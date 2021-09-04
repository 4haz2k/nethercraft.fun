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
                <svg style="display: block; margin: auto" xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                <small class="d-block mb-3 text-center logo-footer">NetherCraft.Fun Project</small>
            </div>
            <div class="col-6 col-md">
                <h5 class="text-center footer-title">Игровая составляющая</h5>
                <ul class="list-unstyled text-small text-center">
                    <li><a class="footer-item" href="#">Правила проекта</a></li>
                    <li><a class="footer-item" href="#">Описание доната</a></li>
                    <li><a class="footer-item" href="#">Инструкция</a></li>
                    <li><a class="footer-item" href="#">Магазин</a></li>
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
