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
    <meta property="og:image"         content="{{ asset('/media/app/cover.png') }}" />
    <link href="{{ asset('css/index.min.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ route('front.index')}}/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ route('front.index')}}/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ route('front.index')}}/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ route('front.index')}}/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ route('front.index')}}/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ route('front.index')}}/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ route('front.index')}}/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ route('front.index')}}/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ route('front.index')}}/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ route('front.index')}}/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ route('front.index')}}/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ route('front.index')}}/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ route('front.index')}}/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ route('front.index')}}/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ route('front.index')}}/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    @yield('extra-css')
</head>
<body>
<div class="menu mobile-menu-container">
    <div>
        <h2>Menú</h2>
        <ul class="mobile-menu-list">
            <li>
                <a href="{{ route('front.index') }}" class="menu-link-active" style='background-image: url("{{ asset('/media/app/icon-mobile-home.png') }}");'>Inicio</a>
            </li>
            <li>
                <a href="{{ route('front.index') }}/#nosotros" class="menu-access" style='background-image: url("{{ asset('/media/app/icon-mobile-us.png') }}");'>Nosotros</a>
            </li>
            <li>
                <a href="{{ route('front.index') }}/#servicios" class="menu-access" style='background-image: url("{{ asset('/media/app/icon-mobile-service.png') }}");'>Servicios</a>
            </li>
            <li>
                <a href="{{ route('front.contact') }}" class="btn-header-contact" style='background-image: url("{{ asset('/media/app/icon-mobile-mail.png') }}");'><span>Contacto</span></a>
            </li>
            <li>
                <a href="{{ route('front.index') }}/admin" target="_blank" style='background-image: url("{{ asset('/media/app/icon-mobile-us.png') }}"); background-color: #004848; color: #FFF'>Administración</a>
            </li>
            <li>
                <a href="#!" target="_blank" class="btn-header-social" style='background-image: url("{{ asset('/media/app/icon-linkedin.png') }}");'></a>
            </li>
            <li>
                <a href="#!" target="_blank" class="btn-header-social" style='background-image: url("{{ asset('/media/app/icon-facebook.png') }}");'></a>
            </li>
            <li>
                <a href="#!" target="_blank" class="btn-header-social" style='background-image: url("{{ asset('/media/app/icon-twitter.png') }}");'></a>
            </li>
        </ul>
        <p>
            <a href="mailto:contacto@mindora.com.mx">contacto@mindora.com.mx</a>
        </p>
        <p>
            <a href="tel:5537325400">Tel: (55) 6481 1572</a>
        </p>
    </div>
</div>
<header class="header-container">
    <div class="header-container-a">
        <div class="header-container-a-items">
            <ul>
                <li>
                    <a href="tel:5537325400">Tel: (55) 6481 1572</a>
                </li>
                <li>
                    <a href="mailto:contacto@mindora.com.mx">Mail: contacto@mindora.com.mx</a>
                </li>
                <li>
                    <a href="{{ route('front.index') }}/admin" target="_blank">Administración</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="header-container-b">
        <div class="header-container-b-items">
            <a href="{{ route('front.index') }}" class="main-logo" style='background-image: url("{{ asset('/media/app/mindora.png') }}");'></a>

            <div class="mobile-menu-container-header">
                <nav class="menu-btn">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </nav>
            </div>

            <ul class="header-destop-menu">
                <li>
                    <a href="{{ route('front.index') }}" class="menu-link-active">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('front.index') }}/#nosotros">Nosotros</a>
                </li>
                <li>
                    <a href="{{ route('front.index') }}/#servicios">Servicios</a>
                </li>
                <li>
                    <a href="{{ route('front.contact') }}" class="btn-header-contact" style='background-image: url("{{ asset('/media/app/icon-email.png') }}");'><span>Contacto</span></a>
                </li>
                <li>
                    <a href="#!" target="_blank" class="btn-header-social" style='background-image: url("{{ asset('/media/app/icon-linkedin.png') }}");'></a>
                </li>
                <li>
                    <a href="#!" target="_blank" class="btn-header-social" style='background-image: url("{{ asset('/media/app/icon-facebook.png') }}");'></a>
                </li>
                <li>
                    <a href="#!" target="_blank" class="btn-header-social" style='background-image: url("{{ asset('/media/app/icon-twitter.png') }}");'></a>
                </li>
            </ul>
        </div>
    </div>
</header>

@yield('content')

<footer>
    <section class="footer-container">
        <div class="footer-container-a">
            <a href="{{ route('front.index') }}">
                <img src="{{ asset('/media/app/mindora.png') }}" alt="Mindora Consultores S.A. de C.V." width="118" height="41">
            </a>
            <p><span>Mindora</span> Un equipo visionario con líderes especializados  con más de 14 años de experiencia en inteligencia comercial y farmacéutica <span><a
                            href="{{ route('front.contact') }}">Contáctanos.</a></span></p>

            <h2>Dirección</h2>
            <p>Ciruelos 295, Santa Clara Lerma</p>
            <p>Estado de México</p>
            <p>C.P. 52004</p>
        </div>
        <div class="footer-container-b">
            <h2>Contacto</h2>
            <p>
                E-mail: <a href="mailto:contacto@mindora.com.mx">contacto@mindora.com.mx</a>
            </p>
            <p>
                Tel: <a href="tel:5537325400">(55) 6481 1572</a>
            </p>

            <ul class="footer-contact">
                <li>
                    <a href="{{ route('front.contact') }}" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'><span>Contacto</span></a>
                </li>
                <li>
                    <a href="#!" target="_blank" style='background-image: url("{{ asset('/media/app/icon-linkedin.png') }}");'></a>
                </li>
                <li>
                    <a href="#!" target="_blank" style='background-image: url("{{ asset('/media/app/icon-facebook.png') }}");'></a>
                </li>
                <li>
                    <a href="#!" target="_blank" style='background-image: url("{{ asset('/media/app/icon-twitter.png') }}");'></a>
                </li>
            </ul>

            <h2 class="footer-website-title">Mapa del sitio</h2>
            <ul class="footer-website">
                <li>
                    <a href="{{ route('front.index') }}" class="menu-link-active">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('front.index') }}/#nosotros">Nosotros</a>
                </li>
                <li>
                    <a href="{{ route('front.index') }}/#servicios">Servicios</a>
                </li>
            </ul>
        </div>
    </section>
</footer>
<section class="footer-codizer">
    <a href="http://codizer.com" target="_blank">www.mindora.com</a>
    <a href="http://codizer.com" target="_blank">© {{ now()->year }} Codizer</a>
</section>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
    // This is a general function that could take functionality from many places.
    // All it does is toggle a class on or off, like so:
    // 01: Does "this" target HTML element have "that" class?
    // 02: If it does, remove that class.
    // 03: If it doesn't, add that class.
    // 04: End function.
    function toggleClass(targetElement, addedClass) {
        if (targetElement.classList.contains(addedClass)) {
            targetElement.classList.remove(addedClass);
        }
        else {
            targetElement.classList.add(addedClass);
        }
    };

    // This is the function we add to our menu button to enable its click functionality
    document.querySelector('.menu-btn').addEventListener('click', function() {

        // This toggleClass is for added 'menu--open' to our menu HTML element. This will open the menu.
        toggleClass(document.querySelector('.menu'), 'menu--open');

        // This toggleClass is for adding '.menu-btn--on' to our menu button HTML element. This creates the animation of the hamburger/hotdog icon to the close icon.
        toggleClass(document.querySelector('.menu-btn'), 'menu-btn--on');
    });


    function toggleClass2(targetElement, addedClass) {
        if (targetElement.classList.contains(addedClass)) {
            targetElement.classList.remove(addedClass);
        }
    };

    $(document).ready(function() {

        var w = $(window).width();

        $(window).resize(function() {
            if ($(window).width()==w) return;
            w = $(window).width();
            toggleClass2(document.querySelector('.menu'), 'menu--open');
            toggleClass2(document.querySelector('.menu-btn'), 'menu-btn--on');
        });

        $('.menu-access').click(function() {
            toggleClass2(document.querySelector('.menu'), 'menu--open');
            toggleClass2(document.querySelector('.menu-btn'), 'menu-btn--on');
            $('.m-modal-container-bg').fadeOut();
        });
    });
</script>
@yield('extra-js')
</body>
</html>