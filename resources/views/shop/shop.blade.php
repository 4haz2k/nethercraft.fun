@extends('shop.layout')

@section('title', 'Магазин » NetherCraft Project')
@section('background', 'background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 50%), url("/img/shop/layout.png") center 40% no-repeat;')
@section('title_box', 'Магазин')
@section('description_box')В этом разделе находятся предметы,<br> привилегии, наборы и прочее.@endsection

@section('body')
    <div class="cart">
        <div class="cartCard">
            test
        </div>
        <div class="container-fluid mt-5 container-fix-xs" style="max-width: calc(100% - 250px)">
            <div class="row">
                <div class="col-12 text-center donate-title">
                    Игровые предметы
                </div>
                @foreach($items as $item)
                    <div class="col-sm-12 item-card my-3">
                        <div class="rectangle item-block" id="{{$item->id}}">
                            <div class="item-img py-3">
                                <div class="item-background">
                                    <img style="margin-top: 17px;" src="{{$item->img}}" alt="" width="110" height="110">
                                </div>
                            </div>
                            <div class="item-title py-2">
                                {{Str::limit($item->title, 15)}}
                            </div>
                            <div class="item-quantities py-3">
                                <div class="item-less text-center">
                                    <button id="lessQuantities" class="item-button minus_button"></button>
                                </div>
                                <div class="item-field">
                                    <input id="field" type="text" class="field_button text-center" placeholder="Кол-во" value="1">
                                </div>
                                <div class="item-more text-center">
                                    <button id="addQuantities" class="item-button plus_button"></button>
                                </div>
                            </div>
                            <div class="item-add text-center">
                                <button id="buy_item" class="buy-item">
                                    Добавить
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container" style="height: 500px"></div>
        <div id="stickyStop"></div>
        <div class="container" style="height: 500px"></div>
    </div>
@endsection
