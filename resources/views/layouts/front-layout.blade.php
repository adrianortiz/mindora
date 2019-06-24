<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Mindora')</title>
    <meta property="og:url"           content="https://www.mindora.com.mx/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Mindora" />
    <meta property="og:description"   content="consultora" />
    <meta property="og:image"         content="https://www.mindora.com.mx/cover.jpg" />
    <link href="{{ asset('css/index.min.css') }}" rel="stylesheet">
    <style> select.custom-select { background-image: url("{{ asset('/media/app/btn-select.png') }}"); !important;}</style>
    @yield('extra-css')
</head>
<body>

<header class="header-container">
    <div class="header-container-a">
        <div class="header-container-a-items">
            <ul>
                <li>
                    <a href="tel:5537325400">Tel: (55) 3732 5400</a>
                </li>
                <li>
                    <a href="mailto:contacto@mindora.com.mx">contacto@mindora.com.mx</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="header-container-b">
        <div class="header-container-b-items">
            <a href="{{ route('front.index') }}" class="main-logo" style='background-image: url("{{ asset('/media/app/mindora.png') }}");'></a>
            <ul>
                <li>
                    <a href="{{ route('front.index') }}" class="menu-link-active">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('front.index') }}/#nosotros">Nosotros</a>
                </li>
                <li>
                    <a href="#!">Servicios</a>
                </li>
                <li>
                    <a href="#!" class="btn-header-contact" style='background-image: url("{{ asset('/media/app/icon-email.png') }}");'>Contacto</a>
                </li>
                <li>
                    <a href="#!" class="btn-header-social" style='background-image: url("{{ asset('/media/app/icon-linkedin.png') }}");'></a>
                </li>
                <li>
                    <a href="#!" class="btn-header-social" style='background-image: url("{{ asset('/media/app/icon-facebook.png') }}");'></a>
                </li>
                <li>
                    <a href="#!" class="btn-header-social" style='background-image: url("{{ asset('/media/app/icon-twitter.png') }}");'></a>
                </li>
            </ul>
        </div>
    </div>
</header>

@yield('content')

<footer>
    <section class="footer-container">

    </section>
</footer>
<section class="footer-codizer">

</section>

<script src="{{ asset('js/jquery.min.js') }}"></script>
@yield('extra-js')
</body>
</html>