<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ mix('/css/layout.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/homepage.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2 px-1" href="{{ url('/') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
            </a>
            <a class="py-2 d-none d-md-inline-block" href="#">Магазин</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Описание доната</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Топы</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Тех. поддержка</a>
        </div>
    </nav>
    @yield('content')
    <footer class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
                <svg style="display: block; margin: auto" xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                <small class="d-block mb-3 text-muted text-center">© 2020-2021 NetherCraft.Fun</small>
            </div>
            <div class="col-6 col-md">
                <h5 class="text-center">Игровая составляющая</h5>
                <ul class="list-unstyled text-small text-center">
                    <li><a class="text-muted" href="#">Правила проекта</a></li>
                    <li><a class="text-muted" href="#">Описание доната</a></li>
                    <li><a class="text-muted" href="#">Инструкция</a></li>
                    <li><a class="text-muted" href="#">Магазин</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5 class="text-center">Социальные сети</h5>
                <ul class="list-unstyled text-small text-center">
                    <li><a class="text-muted" href="#">YouTube <img style="margin-bottom: 2px" src="https://img.icons8.com/color/20/000000/youtube-play.png"/></a></li>
                    <li><a class="text-muted" href="#">Discord <img style="margin-bottom: 2px" src="https://img.icons8.com/color/20/000000/discord-new-logo.png"/></a></li>
                    <li><a class="text-muted" href="#">Вконтакте <img style="margin-bottom: 2px" src="https://img.icons8.com/color/20/000000/vk-com.png"/></a></li>
                    <li><a class="text-muted" href="#">Twitch <img style="margin-bottom: 2px" src="https://img.icons8.com/color/20/000000/twitch--v1.png"/></a></li>
                </ul>
            </div>
            <div class="col-12 col-md">
                <h5 class="text-center">Основное</h5>
                <ul class="list-unstyled text-small text-center">
                    <li><a class="text-muted" href="#">Публичная оферта</a></li>
                    <li><a class="text-muted" href="#">Техническая поддержка</a></li>
                    <li><a class="text-muted" href="#">Контакты</a></li>
                    <li><a class="text-muted" href="#">Отзывы</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
