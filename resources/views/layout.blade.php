<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="description" content="@yield('description')">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
</head>
<body>

<header class="uk-container-expand">
    <div class="g-logo">
        <img src="/images/sektor.png" alt="logo">
        <ul class="uk-navbar-nav">
            <li><a href="/">Главная</a></li>
            <li><a href="#">Фотографии</a></li>
            <li><a href="#">Альбомы</a></li>
        </ul>
    </div>

    <div id="particles-js"></div>
</header>

<h1 class="uk-text-center uk-text-primary">КИНО</h1>
<hr class="uk-divider-icon">

<!-- Content -->
<section class="uk-container uk-margin-large-bottom">
    <div class="uk-flex-middle" uk-grid>
        <div class="uk-width-1-3@m uk-text-center">
            <img class="uk-responsive-width uk-border-circle" src="/images/hoy.jpg" alt="Image">
        </div>
        <div class="uk-width-2-3@m">
            // Текст
        </div>

    </div>
</section>
<!--// Content -->

<!-- Footer -->
@include('footer.footer')
<!--// Footer -->
<script src="/js/app.js"></script>
@stack('scripts')
</body>
</html>