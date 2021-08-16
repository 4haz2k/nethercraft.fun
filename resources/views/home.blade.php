@extends('layout')

@section('content')
{{--    <div class="swiper-container">--}}
{{--        <!-- Additional required wrapper -->--}}
{{--        <div class="swiper-wrapper">--}}
{{--            <!-- Slides -->--}}
{{--            <div class="swiper-slide" style="background-color: green">Slide 1</div>--}}
{{--            <div class="swiper-slide" style="background-color: red">Slide 2</div>--}}
{{--            <div class="swiper-slide" style="background-color: blue">Slide 3</div>--}}
{{--            ...--}}
{{--        </div>--}}
{{--        <!-- If we need pagination -->--}}
{{--        <div class="swiper-pagination"></div>--}}

{{--        <!-- If we need navigation buttons -->--}}
{{--        <div class="swiper-button-prev"></div>--}}
{{--        <div class="swiper-button-next"></div>--}}
{{--    </div>--}}

<div class="g-navigation">
    <div class="header-nav">
        <div class="container-fluid">
            <div class="row p-2">
                <div class="col-sm-3 text-nav logo">
                    <a href="">NetherCraft Project</a>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                    <div class="row text-nav">
                        <div class="col-3"><a href="">Главная</a></div>
                        <div class="col-3"><a href="">О донате</a></div>
                        <div class="col-3"><a href="">Магазин</a></div>
                        <div class="col-3"><a href="">Правила</a></div>
                    </div>
                </div>
                <div class="col-sm-3">навигация</div>
            </div>
        </div>
    </div>
    <div class="has-slideshow">
        <div class="swiper-container" data-slideshow-autoplay="true" data-slideshow-loop="false" data-slideshow-timeout="8000" data-slideshow-speed="800">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" style="background-color: green">
                    <div class="slide">
                        <h3 class="top-title">
                            <span>NetherCraft Project</span>
                        </h3>
                        <h1 class="main-title">
                            <span>Встречайте, это проект NetherCraft по-новому!</span>
                        </h1>
                    </div>
                </div>
                <div class="swiper-slide" style="background-color: #ff3440">
                    <div class="slide">
                        <h3 class="top-title">
                            <span>О проекте</span>
                        </h3>
                        <h1 class="main-title">
                            <span>Адрес сервера: play.nethercraft.fun, версия Minecraft 1.9 - 1.16.5</span>
                        </h1>
                    </div>
                </div>
                <div class="swiper-slide" style="background-color: #718096">
                    <div class="slide">
                        <h3 class="top-title">
                            <span>NetherCraft Project</span>
                        </h3>
                        <h1 class="main-title">
                            <span>Test 3</span>
                        </h1>
                    </div>
                </div>
                <div class="swiper-slide" style="background-color: #718096">
                    <div class="slide">
                        <h3 class="top-title">
                            <span>NetherCraft Project</span>
                        </h3>
                        <h1 class="main-title">
                            <span>Test 3</span>
                        </h1>
                    </div>
                </div>
                <div class="swiper-slide" style="background-color: #718096">
                    <div class="slide">
                        <h3 class="top-title">
                            <span>NetherCraft Project</span>
                        </h3>
                        <h1 class="main-title">
                            <span>Test 3</span>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="navigation">
                <div class="swiper-button-prev swiper-button-disabled">
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
                <div class="swiper-button-next">
                    <i class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
