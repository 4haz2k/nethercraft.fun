@extends('shop.layout')

@section('title', 'Магазин » NetherCraft Project')
@section('background', 'background-image: url("/img/shop/layout.png");')
@section('title_box', 'Магазин')
@section('description_box')В этом разделе находятся предметы,<br> привилегии, наборы и прочее.@endsection

@section('body')
<div class="container-fluid mt-5" style="max-width: calc(100% - 150px)">
    <div class="row">
        <div class="col-12 text-center donate-title">
            Игровые предметы
        </div>
        <div class="col-sm-12 col-md-3 my-3">
            <div class="rectangle item-block" id="1">
                <div class="item-img py-3">
                    <img src="/img/items/2_002.png" alt="" width="72" height="72">
                </div>
                <div class="item-title py-2">
                    Земля
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
        <div class="col-sm-12 col-md-3 my-3">
            <div class="rectangle item-block" id="2">
                <div class="item-img py-3">
                    <img src="/img/items/2_002.png" alt="" width="72" height="72">
                </div>
                <div class="item-title py-2">
                    Земля
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
        <div class="col-sm-12 col-md-3 my-3">
            <div class="rectangle item-block" id="3">
                <div class="item-img py-3">
                    <img src="/img/items/2_002.png" alt="" width="72" height="72">
                </div>
                <div class="item-title py-2">
                    Земля
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
    </div>
</div>
@endsection
