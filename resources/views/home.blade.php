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
            <nav role="navigation" class="mobile-menu d-block d-sm-none">
                <div id="menuToggle">
                    <input type="checkbox" />
                    <span></span>
                    <span></span>
                    <span></span>
                    <ul id="menu">
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">О донате</a></li>
                        <li><a href="#">Магазин</a></li>
                        <li><a href="#">Правила</a></li>
                    </ul>
                </div>
            </nav>
            <div class="row p-2 top-nav">
                <div class="col-sm-3 text-nav logo">
                    <a href="">NetherCraft Project</a>
                </div>
                <div class="col-sm-6 d-none d-sm-block text-center" style="padding-top: 5px">
                    <div class="row text-nav">
                        <div class="col-3 w-50"><a href="" class="a-none social">Главная</a></div>
                        <div class="col-3 w-50"><a href="" class="a-none social">О донате</a></div>
                        <div class="col-3 w-50"><a href="" class="a-none social">Магазин</a></div>
                        <div class="col-3 w-50"><a href="" class="a-none social">Правила</a></div>
                    </div>
                </div>
                <div class="col-sm-3 text-center social-icons" style="padding-top: 5px; max-width: 225px; margin: 0 auto;">
                    <div class="row">
                        <div class="col-3"><a href="" class="a-none social"><svg style="height: 24px; width: 30px;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg></a></div>
                        <div class="col-3"><a href="" class="a-none social"><svg style="height: 24px; width: 30px;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="discord" class="svg-inline--fa fa-discord fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"></path></svg></a></div>
                        <div class="col-3"><a href="" class="a-none social"><svg style="height: 24px; width: 30px;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="vk" class="svg-inline--fa fa-vk fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"></path></svg></a></div>
                        <div class="col-3"><a href="" class="a-none social"><svg style="height: 22px; width: 28px; padding-top: 3px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitch" class="svg-inline--fa fa-twitch fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M391.17,103.47H352.54v109.7h38.63ZM285,103H246.37V212.75H285ZM120.83,0,24.31,91.42V420.58H140.14V512l96.53-91.42h77.25L487.69,256V0ZM449.07,237.75l-77.22,73.12H294.61l-67.6,64v-64H140.14V36.58H449.07Z"></path></svg></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="has-slideshow">
        <div class="swiper-container" data-slideshow-autoplay="true" data-slideshow-loop="false" data-slideshow-timeout="8000" data-slideshow-speed="800">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" style="background-image: url('{{ asset('img/pic.png') }}'); background-position: center top">
                    <div class="slide">
                        <h3 class="top-title">
                            <span>NetherCraft Project</span>
                        </h3>
                        <h1 class="main-title">
                            <span>Встречайте, это проект NetherCraft по-новому!</span>
                        </h1>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset('img/pic2.png') }}'); background-position: center 5vh;">
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
