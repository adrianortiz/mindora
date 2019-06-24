@extends('layouts.front-layout')

@section('title', 'Inicio | Mindora')

@section('extra-css')
    <link href="{{ asset('js/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('js/slick/slick-theme.css') }}" rel="stylesheet">
@endsection


@section('content')
    <section class="autoplay-slider">

        <div class="slider-item" style='background-image: url("{{ asset('/media/slider/slider-1.png') }}");'>
            <div class="slider-bg-item">
                <div class="slider-info-item">
                    <h2>Especialistas en</h2>
                    <h1>Soluciones</h1>
                    <a href="#!" class="btn-slider" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contacto</a>
                </div>
            </div>
        </div>
        <div class="slider-item" style='background-image: url("{{ asset('/media/slider/slider-2.png') }}");'>
            <div class="slider-bg-item">
                <div class="slider-info-item">
                    <h2>Especialistas en</h2>
                    <h1>Soluciones</h1>
                    <a href="#!" class="btn-slider" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contacto</a>
                </div>
            </div>
        </div>
        <div class="slider-item" style='background-image: url("{{ asset('/media/slider/slider-3.png') }}");'>
            <div class="slider-bg-item">
                <div class="slider-info-item">
                    <h2>Especialistas en</h2>
                    <h1>Soluciones</h1>
                    <a href="#!" class="btn-slider" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contacto</a>
                </div>
            </div>
        </div>
        <div class="slider-item" style='background-image: url("{{ asset('/media/slider/slider-0.png') }}");'>
            <div class="slider-bg-item">
                <div class="slider-info-item">
                    <h2>Especialistas en</h2>
                    <h1>Soluciones</h1>
                    <a href="#!" class="btn-slider" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contacto</a>
                </div>
            </div>
        </div>

    </section>

    <section class="services-container">
        <div class="services-title-container">
            <h2>Servicios</h2>
        </div>

        <div class="services-container-item" style='background-image: url("{{ asset('/media/slider/slider-0.png') }}");'>
            <div class="services-container-item-bg">
                <h3>Estudio de mercado</h3>
                <a href="#!">Leer más</a>
            </div>
        </div>
        <div class="services-container-item" style='background-image: url("{{ asset('/media/slider/slider-1.png') }}");'>
            <div class="services-container-item-bg">
                <h3>Estudio de consumidor</h3>
                <a href="#!">Leer más</a>
            </div>
        </div>
        <div class="services-container-item" style='background-image: url("{{ asset('/media/slider/slider-2.png') }}");'>
            <div class="services-container-item-bg">
                <h3>Validación de procesos</h3>
                <a href="#!">Leer más</a>
            </div>
        </div>
        <div class="services-container-item" style='background-image: url("{{ asset('/media/slider/slider-3.png') }}");'>
            <div class="services-container-item-bg">
                <h3>Gestión de riesgos</h3>
                <a href="#!">Leer más</a>
            </div>
        </div>
    </section>

    <section class="analysis-container-full">
        <section class="analysis-container">
            <div class="analysis-title-container">
                <h2>Análisis de sectores e industria de negocios</h2>
            </div>
            <div class="autoplay-slider-analysis">
                <a href="#!">
                    <div style='background-image: url("{{ asset('/media/app/icon-analysis-01.png') }}");'>
                        <p>Sector bancario</p>
                    </div>
                </a>
                <a href="#!">
                    <div style='background-image: url("{{ asset('/media/app/icon-analysis-02.png') }}");'>
                        <p>E-commerce</p>
                    </div>
                </a>
                <a href="#!">
                    <div style='background-image: url("{{ asset('/media/app/icon-analysis-03.png') }}");'>
                        <p>Agregadores</p>
                    </div>
                </a>
                <a href="#!">
                    <div style='background-image: url("{{ asset('/media/app/icon-analysis-04.png') }}");'>
                        <p>Valeras</p>
                    </div>
                </a>
                <a href="#!">
                    <div style='background-image: url("{{ asset('/media/app/icon-analysis-05.png') }}");'>
                        <p>Sector automotriz</p>
                    </div>
                </a>
                <a href="#!">
                    <div style='background-image: url("{{ asset('/media/app/icon-analysis-06.png') }}");'>
                        <p>Grandes superficies</p>
                    </div>
                </a>
                <a href="#!">
                    <div style='background-image: url("{{ asset('/media/app/icon-analysis-07.png') }}");'>
                        <p>Entretenimiento</p>
                    </div>
                </a>
            </div>
        </section>
    </section>
@endsection

@section('extra-js')
    <script src="{{ asset('js/slick/slick.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.autoplay-slider').slick({
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                draggable: true,
                dots: true
            });

            $('.autoplay-slider-analysis').slick({
                arrows: false,
                slidesToShow: 5,
                slidesToScroll: 3,
                autoplay: true,
                autoplaySpeed: 4000,
                draggable: true,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1025,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 720,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 376,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }]

            });
        });
    </script>
@endsection