<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="{{ mix('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/layout.css') }}">
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}

    <link rel="stylesheet" href="{{ mix('/css/homepage.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body style="background-color: black">
    @yield('content')
    <footer class="container py-5">
        <div class="row">
            <div class="col-md-12 mb-5">
                <svg id="Logo" data-name="Logo" style="display: block; margin: auto" width="100" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60"><defs><style>.cls-1{fill: #131516;}  .cls-2,.cls-5{fill:none;stroke-miterlimit:10;stroke-width:0.5px;}  .cls-2{stroke:#f2f2f2;}  .cls-3{fill:url(#Безымянный_градиент_54);}  .cls-4{fill:url(#Безымянный_градиент_54-2);}  .cls-5{stroke:#fff;}  .cls-6{fill:#fff;}</style><linearGradient id="Безымянный_градиент_54" x1="14.5" y1="29.44" x2="45.5" y2="29.44" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="red"/><stop offset="0.52" stop-color="#f15a24"/><stop offset="0.53" stop-color="#f15a24"/><stop offset="1" stop-color="#f7931e"/></linearGradient><linearGradient id="Безымянный_градиент_54-2" x1="14.5" y1="24.58" x2="45.5" y2="24.58" xlink:href="#Безымянный_градиент_54"/></defs><title>pic16</title><polygon class="cls-1" points="4.17 14.72 29.94 0.5 55.83 14.72 55.83 45.28 30.06 59.5 4.17 45.28 4.17 14.72"/><polyline class="cls-1" points="4.17 14.72 30.06 29.06 55.83 14.72"/><polygon class="cls-2" points="4.17 14.72 29.94 0.5 55.83 14.72 55.83 45.28 30.06 59.5 4.17 45.28 4.17 14.72"/><polyline class="cls-2" points="4.17 14.72 30.06 29.06 55.83 14.72"/><line class="cls-2" x1="30.06" y1="59.5" x2="30.06" y2="29.06"/><polygon class="cls-3" points="14.5 20.28 29.97 11.76 45.5 20.28 45.5 38.6 30.03 47.12 14.5 38.6 14.5 20.28"/><polyline class="cls-4" points="14.5 20.28 30.03 28.87 45.5 20.28"/><polygon class="cls-5" points="14.5 20.28 29.97 11.76 45.5 20.28 45.5 38.6 30.03 47.12 14.5 38.6 14.5 20.28"/><polygon class="cls-6" points="22.45 38.54 22.45 24.58 26.83 31.91 26.83 38.54 22.45 38.54"/><polygon class="cls-6" points="22.49 23.1 27.85 23.1 37.06 38.56 31.67 38.56 22.49 23.1"/><polygon class="cls-6" points="32.72 23.24 37.11 23.24 37.11 37.2 32.72 29.87 32.72 23.24"/></svg>
                <small class="d-block mb-3 text-center logo-footer">NetherCraft.Fun Project</small>
            </div>
            <div class="col-6 col-md">
                <h5 class="text-center footer-title">Игровая составляющая</h5>
                <ul class="list-unstyled text-small text-center">
                    <li><a class="footer-item" href="#">Правила проекта</a></li>
                    <li><a class="footer-item" href="#">Описание доната</a></li>
                    <li><a class="footer-item" href="{{ url('cart') }}">Корзина</a></li>
                    <li><a class="footer-item" href="#">Инструкция</a></li>
                    <li><a class="footer-item" href="{{ url('shop') }}">Магазин</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5 class="text-center footer-title">Социальные сети</h5>
                <ul class="list-unstyled text-small text-center">
                    <li><a class="footer-item" href="#">YouTube <img style="margin-bottom: 2px" src="https://img.icons8.com/color/20/000000/youtube-play.png"/></a></li>
                    <li><a class="footer-item" href="#">Discord <img style="margin-bottom: 2px" src="https://img.icons8.com/color/20/000000/discord-new-logo.png"/></a></li>
                    <li><a class="footer-item" href="#">Вконтакте <img style="margin-bottom: 2px" src="https://img.icons8.com/color/20/000000/vk-com.png"/></a></li>
                    <li><a class="footer-item" href="#">Twitch <img style="margin-bottom: 2px" src="https://img.icons8.com/color/20/000000/twitch--v1.png"/></a></li>
                </ul>
            </div>
            <div class="col-12 col-md">
                <h5 class="text-center footer-title">Основное</h5>
                <ul class="list-unstyled text-small text-center">
                    <li><a class="footer-item" href="#">Публичная оферта</a></li>
                    <li><a class="footer-item" href="#">Техническая поддержка</a></li>
                    <li><a class="footer-item" href="#">Контакты</a></li>
                    <li><a class="footer-item" href="#">Отзывы</a></li>
                </ul>
            </div>
            <div class="col-12 text-center rights-reserved mt-5">
                © 2020 - {{Jenssegers\Date\Date::today()->format("Y")}} NetherCraft Project. Все права защищены.
            </div>
        </div>
    </footer>
{{--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
    <script src="{{ mix('/js/jquery.min.js') }}" ver="1.0"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://use.fontawesome.com/fd45a37d11.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <script src="{{ mix('/js/bootstrap.js') }}" ver="1.0"></script>
    <script src="{{ mix('/js/popper.js') }}" ver="1.0"></script>
    <script src="{{ mix('/js/particles.js') }}" ver="1.0"></script>
    <script src="{{ mix('/js/mainpage.js') }}" ver="1.0"></script>
</body>
</html>
