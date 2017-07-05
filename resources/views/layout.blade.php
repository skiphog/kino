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
    @include('menu.menu')
</header>

<h1 class="uk-text-center uk-text-primary">@yield('title')</h1>
<hr class="uk-divider-icon">

<!-- Content -->
<section class="uk-container uk-margin-large-bottom">
    @yield('content')
</section>
<!--// Content -->

<!-- Footer -->
@include('footer.footer')
<!--// Footer -->
<script src="/js/app.js"></script>
@stack('scripts')
</body>
</html>