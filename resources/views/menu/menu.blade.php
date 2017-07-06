<div class="g-logo">
    <img src="/images/kino.png" width="604" height="215" alt="logo">
    <ul class="uk-navbar-nav">
        <li><a href="/">Главная</a></li>
        <li><a href="{{ url('albums') }}">Альбомы</a></li>
        <li><a href="{{ url('articles') }}">Статьи</a></li>
        @if (Auth::check())
            <li><a href="{{ url('/admin') }}">Админка</a></li>
        @endif
    </ul>
</div>
<div id="particles-js"></div>