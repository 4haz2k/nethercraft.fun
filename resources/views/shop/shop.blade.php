@extends('shop.layout')

@section('title', 'Магазин » NetherCraft Project')
@section('background', 'background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 50%), url("/img/shop/layout.png") center 40% no-repeat;')
@section('title_box', 'Магазин')
@section('description_box')В этом разделе находятся предметы,<br> привилегии, наборы и прочее.@endsection

@section('body')
    <div class="cart">
        <div class="cart-of-items">
            <div class="cart-title">Корзина</div>
            <hr>
            <div class="cart-item">
                <div class="cart-item-title">Предметов:</div>
                <div class="count" id="item-count"></div>
            </div>
            <div class="cart-total">
                <div class="cart-total-title">Сумма:</div>
                <div class="cart-price" id="total-price"></div>
            </div>
            <hr>
            <div class="view-cart"><a class="cart-link">Перейти в корзину ></a></div>
            <div class="checkout-cart"><button class="checkout">Оплатить</button></div>
        </div>
        <div class="container-fluid mt-5 container-fix-xs" style="max-width: calc(100% - 250px)">
            <div class="row">
                <div class="col-12 text-center donate-title">
                    Игровые предметы
                </div>
                <div class="col-12 text-center categories">
                    <button class="category-button category-button-text selected" data-category="0" data-link="{{ url("/") }}/shop?page=">Все предметы</button>
                    <button class="category-button category-button-text" data-category="1" data-link="{{ url("/") }}/shop?page=">Оружие</button>
                    <button class="category-button category-button-text" data-category="2" data-link="{{ url("/") }}/shop?page=">Броня</button>
                    <button class="category-button category-button-text" data-category="3" data-link="{{ url("/") }}/shop?page=">Инструменты</button>
                    <button class="category-button category-button-text" data-category="4" data-link="{{ url("/") }}/shop?page=">Растительность</button>
                    <button class="category-button category-button-text" data-category="5" data-link="{{ url("/") }}/shop?page=">Алхимия</button>
                    <button class="category-button category-button-text" data-category="6" data-link="{{ url("/") }}/shop?page=">Шерсть</button>
                    <button class="category-button category-button-text" data-category="7" data-link="{{ url("/") }}/shop?page=">Красители</button>
                    <button class="category-button category-button-text" data-category="8" data-link="{{ url("/") }}/shop?page=">Книги</button>
                    <button class="category-button category-button-text" data-category="9" data-link="{{ url("/") }}/shop?page=">Ресурсы</button>
                    <button class="category-button category-button-text" data-category="10" data-link="{{ url("/") }}/shop?page=">Блоки</button>
                    <button class="category-button category-button-text" data-category="11" data-link="{{ url("/") }}/shop?page=">Декор</button>
                    <button class="category-button category-button-text" data-category="12" data-link="{{ url("/") }}/shop?page=">Еда</button>
                    <button class="category-button category-button-text" data-category="13" data-link="{{ url("/") }}/shop?page=">Яйца призыва</button>
                    <button class="category-button category-button-text" data-category="14" data-link="{{ url("/") }}/shop?page=">Разное</button>
                </div>
                <div class="row items" id="items" style="zoom: 90%">
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
                <div class="col-12 text-center">
                    <button class="load-more load-more-text load-more-color" id="see-more" data-page="2" data-link="{{ url("/") }}/shop?page=" data-div="#items">Загрузить больше предметов</button>
                </div>
            </div>
        </div>
    </div>
@endsection
