<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="{{ mix('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/layout.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/homepage.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/errors_style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @yield('body')
    <footer class="container py-5">
        <div class="row">
            <div class="col-md-12 mb-2">
                <svg style="display: block; margin: auto" xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                <small class="d-block mb-3 text-center logo-footer" style="color: black">NetherCraft.Fun Project</small>
            </div>
            <div class="col-12 text-center rights-reserved">
                © 2021 NetherCraft Project. Все права защищены.
            </div>
        </div>
    </footer>
</body>
</html>
