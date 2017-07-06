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

<nav class="uk-navbar-container uk-margin" uk-navbar style="background: url(/images/stars2.jpg) #050505;">
    <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="{{ url('admin') }}">Админка</a>
        <ul class="uk-navbar-nav">
            <li><a href="/">На сайт</a></li>
            <li><a href="{{ route('articles.index') }}">Статьи</a></li>
        </ul>
    </div>
</nav>

<h1 class="uk-text-center uk-text-primary">@yield('title')</h1>
<hr class="uk-divider-icon">
<!-- Content -->
<section class="uk-container uk-margin-large-bottom">
    @yield('content')
</section>
<!--// Content -->

<footer class="uk-section s-footer"></footer>
<script src="/js/app.js"></script>
@stack('scripts')
</body>
</html>