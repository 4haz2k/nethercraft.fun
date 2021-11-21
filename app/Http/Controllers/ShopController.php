<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use function Symfony\Component\Translation\t;

class ShopController extends Controller
{
    /**
     *
     * Page loader
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        if($request->category == "0" or !isset($request->category))
            $items = Item::simplePaginate(20);
        else
            $items = Item::where('category', $request->category)->simplePaginate(20);

        return view('shop.shop', compact('items'));
    }

    /**
     *
     * Item add into cart
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function addItem(Request $request): JsonResponse
    {
        if((int)$request->qty <= 0 or $request->id == ""){
            return response()->json([
                'response' => 'Fail',
                'cart' => Cookie::get('cart')
            ]);
        }
        else{
            // создание Cookie на 48 часов (2880 мин)
            if (!Cookie::get('cart')) {
                $cart = array();
                array_push($cart, ['id' => $request->id, 'qty' => $request->qty]);
                $cart = json_encode($cart);
                Cookie::queue('cart', $cart, 2880);
                return response()->json([
                    'response' => 'Success',
                    'cart' => $cart,
                    'totalPrice' => Str::limit($this->countItemsAndPrice($cart)['totalPrice'], 7)."₽",
                    'totalCount' => $this->countItemsAndPrice($cart)['totalCount'],
                ]);
            }
            else{ // если существует корзина, получаем ее
                $cart = json_decode(Cookie::get('cart'), true);
                $is_found = false; // если найден предмет в корзине
                foreach ($cart as &$item){ // ищем эти предметы в корзине
                    if((int)$item['id'] == (int)$request->id){
                        (int)$item['qty'] += (int)$request->qty; // problem
                        $is_found = true;
                    }
                }
                if($is_found){
                    Cookie::queue('cart', json_encode($cart), 2880);
                    return response()->json([
                        'response' => 'Success',
                        'cart' => $cart,
                        'totalPrice' => Str::limit($this->countItemsAndPrice($cart)['totalPrice'], 7)."₽",
                        'totalCount' => $this->countItemsAndPrice($cart)['totalCount'],
                    ]);
                }
                else{
                    array_push($cart, ['id' => $request->id, 'qty' => $request->qty]);
                    Cookie::queue('cart', json_encode($cart), 2880);
                    return response()->json([
                        'response' => 'Success',
                        'cart' => $cart,
                        'totalPrice' => Str::limit($this->countItemsAndPrice($cart)['totalPrice'], 7)."₽",
                        'totalCount' => $this->countItemsAndPrice($cart)['totalCount'],
                    ]);
                }
            }
        }
    }

    /**
     *
     * First init cart
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function getCart(Request $request): JsonResponse
    {
        if(Cookie::get('cart'))
            return response()->json([
                'response' => 'Success',
                'cart' => json_decode(Cookie::get('cart'), true),
                'totalPrice' => Str::limit($this->countItemsAndPrice(json_decode(Cookie::get('cart'), true))['totalPrice'], 7)."₽",
                'totalCount' => $this->countItemsAndPrice(json_decode(Cookie::get('cart'), true))['totalCount'],
            ]);
        else
            return response()->json([
                'response' => 'Success',
                'totalPrice' => "0 ₽",
                'totalCount' => 0,
            ]);
    }

    /**
     *
     * Подсчет стоимости и кол-ва предметов корзины
     *
     * @param $cart - корзина
     * @return array|null
     */
    private function countItemsAndPrice($cart):?array {
        $totalPrice = 0.00;
        $totalCount = 0;
        foreach ($cart as $item) {
            $totalCount += $item["qty"];
            $totalPrice += $item["qty"] * (double)Item::where('id', $item["id"])->pluck('price')[0];
        }
        return ['totalPrice' => $totalPrice, 'totalCount' => $totalCount];
    }
}
