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

    <section id="servicios" class="services-container">
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

    <section class="analysis-question-container">
        <p class="analysis-question-container-text-a">Brindamos información para toma de decisiones de negocios enfocados siempre en realizar las preguntas correctas al análisis en cuestión.</p>
        <p class="analysis-question-container-text-b">Poder realizar las preguntas correctas en el contorno de la empresa podrá generar información de gran valor.</p>

        <div class="analysis-question-container-block">
            <div class="analysis-question-container-block-a">
                <p>¿Quiénes son mis principales competidores, cuanto venden y donde están posicionados?</p>
                <p>¿Qué potencial tiene un mercado y que oportunidades de negocio puede brindar?</p>
                <p>¿Cuál es el Market Share de mi empresa?</p>
            </div>
            <div class="analysis-question-container-block-b">
                <div>
                    <p style='background-image: url("{{ asset('/media/app/icon-analysis-08.png') }}");'></p>
                    <p>Minería de datos</p>
                    <p>Big data</p>
                    <p>Analytics</p>
                </div>
            </div>
            <div class="analysis-question-container-block-c">
                <p>¿Qué zona geográfica tiene el mejor potencial de mercado?</p>
                <p>¿Cuáles son las mejores ubicaciones para abrir una TPV?</p>
                <p>¿Cuál es el tamaño de mi mercado?</p>
            </div>
        </div>
    </section>

    <section class="contact-us-container-full">
        <section class="contact-us-container">
            <div>
                <p>¿Deseas más información?</p>
                <p>Ponte en contacto con nostros, estamos a tus ordenes.</p>
            </div>
            <a href="#!" id="nosotros" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contáctanos</a>
        </section>
    </section>

    <section class="about-us-container">
        <div>
            <a href="{{ route('front.index') }}">
                <img src="{{ asset('/media/app/mindora-logo.png') }}" alt="Mindora Consultores S.A. de C.V." width="81" height="82">
            </a>
            <h4>Quienes somos</h4>
            <p>Un equipo visionario con líderes especializados  con más de 14 años de experiencia en inteligencia comercial comercial y farmacéutica.</p>
        </div>
        <div>
            <h4>Analytics e inteligencia comercial</h4>
            <p>Nuestra especialidad es investigación, la recopilación, la validación y  el análisis de datos para diferentes mercados, a fin de facilitar la toma de decisiones de negocios de las empresas, gestionando y analizando grandes volúmenes de información de mercados B2B, así como  participación de mercado, analytics y modelos predictivos.</p>
            <h4>Validación y gestión de riesgos</h4>
            <p>Brindamos soporte al sistema de calidad, validación en procesos, validación de sistemas computarizados, validación de sistemas críticos, calificación de áreas y equipos, mantenimiento del estado calificado, validación de la cadena de red fría y seca, auditorias regulatorias y gestión de riesgos.</p>
        </div>
    </section>


    <section class="mision-vision-container-full" style='background-image: url("{{ asset('/media/slider/slider-0.png') }}");'>
        <section class="mision-vision-container-full-b">
            <section class="mision-vision-container">
                <div style='background-image: url("{{ asset('/media/app/icon-people.png') }}");'>
                    <h2>Misión</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis iaculis, ante non molestie sagittis, felis turpis vulputate dui, et laoreet quam felis ut odio. Quisque ullamcorper consectetur dolor. Phasellus interdum consequat tortor quis egestas.</p>
                </div>
                <div style='background-image: url("{{ asset('/media/app/icon-people.png') }}");'>
                    <h2>Visión</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis iaculis, ante non molestie sagittis, felis turpis vulputate dui, et laoreet quam felis ut odio.</p>
                </div>
            </section>
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
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                draggable: true,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1025,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 2,
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
                        breakpoint: 374,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }]

            });
        });
    </script>
@endsection