@extends('layouts.front-layout')

@section('title', 'Inicio | Mindora')

@section('extra-css')
    <link href="{{ asset('js/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('js/slick/slick-theme.css') }}" rel="stylesheet">
@endsection


@section('content')

    <div id="show-service-modal-a" class="m-modal-container-bg">
        <div class="m-modal-container">
            <div class="m-modal-container-a">
                <div class="m-modal-container-head" style='background-image: url("{{ asset('/media/slider/slider-0.png') }}");'>
                    <div class="m-modal-container-head-title" style='background-image: url("{{ asset('/media/app/mindora-logo-white.png') }}");'>
                        <p>Servicio</p>
                        <h2>Estudios de mercado</h2>
                    </div>
                </div>
                <div class="m-modal-container-body">
                    <h3>Los estudios de mercado van enfocados a análisis puntuales enfocándonos en tres rubros principales:</h3>

                    <h4>Tamaño del mercado</h4>
                    <ul>
                        <li>Ventas anuales, mensuales y proyectadas del mercado y sus competidores</li>
                        <li>Evolución del mercado en valores porcentuales de ventas</li>
                        <li>Estacionalidad porcentual de las ventas</li>
                        <li>Mercado por región geográfica</li>
                        <li>Pronósticos de ventas usando herramientas estadísticas</li>
                    </ul>


                    <h4>Participantes del mercado</h4>
                    <ul>
                        <li>Evolución de participantes y/o competidores</li>
                    </ul>

                    <h4>Características del mercado</h4>
                    <ul>
                        <li>Categorías de productos</li>
                        <li>Principales productos</li>
                    </ul>
                </div>
                <div class="m-modal-container-footer">
                    <a href="#!" class="m-modal-container-footer-a btn-close-service-modal">Cerrar</a>
                    <a href="{{ route('front.contact') }}" class="m-modal-container-footer-b" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contáctanos</a>
                </div>
            </div>
        </div>
    </div>
    <div id="show-service-modal-b" class="m-modal-container-bg">
        <div class="m-modal-container">
            <div class="m-modal-container-a">
                <div class="m-modal-container-head" style='background-image: url("{{ asset('/media/slider/slider-0.png') }}");'>
                    <div class="m-modal-container-head-title" style='background-image: url("{{ asset('/media/app/mindora-logo-white.png') }}");'>
                        <p>Servicio</p>
                        <h2>Estudios de consumidor</h2>
                    </div>
                </div>
                <div class="m-modal-container-body">
                    <h3>El consumidor es considerado desde el marketing como el “rey”, ya que de en cierto modo las empresas tienen que cubrir sus necesidades en un proceso de adaptación constante, mediante el cual los expertos intuyen estas necesidades e implementan las estrategias que procedan para satisfacerlas.</h3>

                    <h4>Por tanto, existen una serie de cuestiones que los directores de marketing deben plantearse a la hora de estudiar al consumidor:</h4>
                    <ul>
                        <li>¿Qué compra? Supone analizar el tipo de producto que el consumidor selecciona de entre todos los productos que quiere.</li>
                        <li>¿Quién compra? Determinar quién es el sujeto que verdaderamente toma la decisión de adquirir el producto, si es bien el consumidor, o bien quien influya en él.</li>
                        <li>¿Por qué compra? Analizar cuáles son los motivos por los que se adquiere un producto basándose en los beneficios o satisfacción de necesidades que produce al consumidor mediante su adquisición.</li>
                        <li>¿Cómo lo compra? Tiene relación con el proceso de compra. Si la decisión de compra la hace de una forma racional o bien emocional. Si la paga con dinero o con tarjeta…</li>
                        <li>¿Cuándo compra? Se debe conocer el momento de compra y la frecuencia de la compra con relación a sus necesidades, las cuales son cambiantes a lo largo de su vida.</li>
                        <li>¿Dónde compra? Los lugares donde el consumidor compra se ven influidos por los canales de distribución y además por otros aspectos relacionados con el servicio, trato, imagen del punto de venta, etc.</li>
                        <li>¿Cuánto compra? La cantidad física que adquiere del producto, o bien para satisfacer sus deseos o bien sus necesidades. Ello indica si la compra es repetitiva o no.</li>
                        <li>¿Cómo lo utiliza? Con relación a la forma en que el consumidor utilice el producto se creará un determinado envase o presentación del producto.</li>
                    </ul>

                </div>
                <div class="m-modal-container-footer">
                    <a href="#!" class="m-modal-container-footer-a btn-close-service-modal">Cerrar</a>
                    <a href="{{ route('front.contact') }}" class="m-modal-container-footer-b" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contáctanos</a>
                </div>
            </div>
        </div>
    </div>
    <div id="show-service-modal-c" class="m-modal-container-bg">
        <div class="m-modal-container">
            <div class="m-modal-container-a">
                <div class="m-modal-container-head" style='background-image: url("{{ asset('/media/slider/slider-0.png') }}");'>
                    <div class="m-modal-container-head-title" style='background-image: url("{{ asset('/media/app/mindora-logo-white.png') }}");'>
                        <p>Servicio</p>
                        <h2>Validación de procesos</h2>
                    </div>
                </div>
                <div class="m-modal-container-body">
                    <h3>La validación del proceso está asociada a la recopilación y evaluación de datos durante todo el ciclo de vida de un producto, desde la etapa de diseño del proceso hasta la producción comercial.</h3>

                    <h4>La validación de procesos durante todo el ciclo de vida de un producto se divide en 3 etapas, según la guía para la validación de procesos de la FDA publicada en 2011 y el anexo 3 del informe técnico 49 de la OMS publicado en 2015.</h4>
                    <ul>
                        <li>Etapa 1: Diseño del proceso </li>
                        <li>Etapa 2: Calificación del proceso</li>
                        <li>Etapa 3: Verificación continua del proceso</li>
                    </ul>
                </div>
                <div class="m-modal-container-footer">
                    <a href="#!" class="m-modal-container-footer-a btn-close-service-modal">Cerrar</a>
                    <a href="{{ route('front.contact') }}" class="m-modal-container-footer-b" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contáctanos</a>
                </div>
            </div>
        </div>
    </div>
    <div id="show-service-modal-d" class="m-modal-container-bg">
        <div class="m-modal-container">
            <div class="m-modal-container-a">
                <div class="m-modal-container-head" style='background-image: url("{{ asset('/media/slider/slider-0.png') }}");'>
                    <div class="m-modal-container-head-title" style='background-image: url("{{ asset('/media/app/mindora-logo-white.png') }}");'>
                        <p>Servicio</p>
                        <h2>Gestión de riesgos</h2>
                    </div>
                </div>
                <div class="m-modal-container-body">
                    <h3>La gestión de riesgos es el proceso de identificar, analizar y responder a factores de riesgo a lo largo de la vida de un proyecto y en beneficio de sus objetivos. La gestión de riesgos adecuada implica el control de posibles eventos futuros. Además, es proactiva, en lugar de reactiva.</h3>

                    <h4>Respuesta a los riesgos</h4>
                    <ul>
                        <li>Prevención: Eliminación de una amenaza específica, a menudo al eliminar la causa.</li>
                        <li>Mitigación: Reducción del valor monetario estimado de un riesgo al reducir la probabilidad de ocurrencia.</li>
                        <li>Aceptación: Aceptar las consecuencias del riesgo. Con frecuencia, esto se cumple al desarrollar un plan de contingencia para ejecutar si el riesgo llega a ocurrir.</li>
                    </ul>

                    <h4>El propósito de la gestión de riesgos es la siguiente:</h4>
                    <ul>
                        <li>Identificar posibles riesgos</li>
                        <li>Reducir o dividir los riesgos</li>
                        <li>Proporcionar una base racional para la toma de decisiones en relación con todos los riesgos</li>
                        <li>Planificar</li>
                    </ul>

                </div>
                <div class="m-modal-container-footer">
                    <a href="#!" class="m-modal-container-footer-a btn-close-service-modal">Cerrar</a>
                    <a href="{{ route('front.contact') }}" class="m-modal-container-footer-b" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contáctanos</a>
                </div>
            </div>
        </div>
    </div>

    <section class="autoplay-slider">

        <div class="slider-item" style='background-image: url("{{ asset('/media/slider/slider-1.png') }}");'>
            <div class="slider-bg-item">
                <div class="slider-info-item">
                    <h2>Soluciones en</h2>
                    <h1>Estudios de</h1>
                    <h1>mercados</h1>
                    <a href="{{ route('front.contact') }}" class="btn-slider" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contacto</a>
                </div>
            </div>
        </div>
        <div class="slider-item" style='background-image: url("{{ asset('/media/slider/slider-2.png') }}");'>
            <div class="slider-bg-item">
                <div class="slider-info-item">
                    <h2>Soluciones en</h2>
                    <h1>Estudio de</h1>
                    <h1>consumidor</h1>
                    <a href="{{ route('front.contact') }}" class="btn-slider" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contacto</a>
                </div>
            </div>
        </div>
        <div class="slider-item" style='background-image: url("{{ asset('/media/slider/slider-3.png') }}");'>
            <div class="slider-bg-item">
                <div class="slider-info-item">
                    <h2>Soluciones en</h2>
                    <h1>Validación de</h1>
                    <h1>procesos</h1>
                    <a href="{{ route('front.contact') }}" class="btn-slider" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contacto</a>
                </div>
            </div>
        </div>
        <div class="slider-item" style='background-image: url("{{ asset('/media/slider/slider-0.png') }}");'>
            <div class="slider-bg-item">
                <div class="slider-info-item">
                    <h2>Soluciones en</h2>
                    <h1>Gestión de</h1>
                    <h1>riesgos</h1>
                    <a href="{{ route('front.contact') }}" class="btn-slider" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contacto</a>
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
                <h3>Estudios de mercado</h3>
                <a id="btn-service-modal-a" href="#!">Leer más</a>
            </div>
        </div>
        <div class="services-container-item" style='background-image: url("{{ asset('/media/slider/slider-1.png') }}");'>
            <div class="services-container-item-bg">
                <h3>Estudio de consumidor</h3>
                <a id="btn-service-modal-b" href="#!">Leer más</a>
            </div>
        </div>
        <div class="services-container-item" style='background-image: url("{{ asset('/media/slider/slider-2.png') }}");'>
            <div class="services-container-item-bg">
                <h3>Validación de procesos</h3>
                <a id="btn-service-modal-c" href="#!">Leer más</a>
            </div>
        </div>
        <div class="services-container-item" style='background-image: url("{{ asset('/media/slider/slider-3.png') }}");'>
            <div class="services-container-item-bg">
                <h3>Gestión de riesgos</h3>
                <a id="btn-service-modal-d" href="#!">Leer más</a>
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
        <div class="m-flecha" style='background-image: url("{{ asset('/media/app/top-row.png') }}");'></div>
        <div class="analysis-question-container-block">

            <span class="m-line-1"></span>
            <span class="m-line-2"></span>
            <span class="m-line-3"></span>

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
            <a href="{{ route('front.contact') }}" id="nosotros" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contáctanos</a>
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

            $('#btn-service-modal-a').click(function () {
                $('.m-modal-container-bg').fadeOut();
               $('#show-service-modal-a').fadeIn();
            });

            $('#btn-service-modal-b').click(function () {
                $('.m-modal-container-bg').fadeOut();
                $('#show-service-modal-b').fadeIn();
            });

            $('#btn-service-modal-c').click(function () {
                $('.m-modal-container-bg').fadeOut();
                $('#show-service-modal-c').fadeIn();
            });

            $('#btn-service-modal-d').click(function () {
                $('.m-modal-container-bg').fadeOut();
                $('#show-service-modal-d').fadeIn();
            });

            $('.btn-close-service-modal').click(function () {
                $('.m-modal-container-bg').fadeOut();
            });
        });
    </script>
@endsection