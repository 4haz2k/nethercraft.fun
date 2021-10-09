<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use function Symfony\Component\Translation\t;

class ShopController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $items = Item::all();
        return view('shop.shop', compact('items'));
    }

    public function addItem(Request $request){
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
                    'cart' => $cart
                ]);
            }
            else{
                $cart = json_decode(Cookie::get('cart'), true);
                $is_found = false;
                foreach ($cart as &$item){
                    if((int)$item['id'] == (int)$request->id){
                        (int)$item['qty'] += (int)$request->qty;
                        $is_found = true;
                    }
                }
                if($is_found){
                    Cookie::queue('cart', json_encode($cart), 2880);
                    return response()->json([
                        'response' => 'Success',
                        'cart' => $cart
                    ]);
                }
                else{
                    array_push($cart, ['id' => $request->id, 'qty' => $request->qty]);
                    Cookie::queue('cart', json_encode($cart), 2880);
                    return response()->json([
                        'response' => 'Success',
                        'cart' => $cart
                    ]);
                }
            }
        }
    }
}
