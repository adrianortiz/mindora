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

                    <h3 style="margin-bottom: 14px">El  Área de Validación de Mindora Consultores se especializa en la calificación de áreas y equipos, validación de procesos y sistemas críticos, validación de sistemas computarizados, validación de la cadena de suministro red fría y red seca, mapeo de almacenes (temperatura y humedad relativa), calificación de thermos de 2.0 a 8.0 °C/48hrs  y de 15.0 a 25.0 °C /48 hrs.</h3>
                    <h3 style="margin-bottom: 14px">Asegurando con ello el cumplimiento a normatividad vigente y aplicable como es: NOM-059, Suplemento para el almacenamiento y distribución de insumos para la salud, LGS, RIS</h3>
                    <h3 style="margin-bottom: 14px; color: #004848;"><strong>Expertise en VALIDACIÓN DE PROCESOS</strong></h3>

                    <h4>Expertise en EQUIPOS</h4>
                    <h4>Expertos en la calificación de equipos como son:</h4>
                    <ul>
                        <li>Cámaras de refrigeración de 2.0 a 8.0 °C.</li>
                        <li>Mezcladores</li>
                        <li>Tableteadoras, encapsuldoras</li>
                        <li>Tanques, llenadoras, agitadores</li>
                        <li>Hornos</li>
                        <li>Refrigeradores/congeladores</li>
                        <li>Bombos</li>
                        <li>Blisteadoras, etiquetadoras, codificadoras, engargoladoras y encartonadoras</li>
                        <li>Unidades de transporte de 2.0 a 8.0 °C  y de 15.0 a 25.0 °C</li>
                    </ul>

                    <h4>Expertos en VALIDACIÓN DE PROCESOS como son:</h4>
                    <ul>
                        <li>Inyectables</li>
                        <li>Sólidos</li>
                        <li>Líquidos</li>
                        <li>Semisólidos</li>
                        <li>Acondicionamiento primario</li>
                        <li>Acondicionamiento secundario</li>
                        <li>Cadena de suministro de red fría y seca</li>
                    </ul>

                    <h4><strong>Ofrecemos:</strong> Cumplimiento a NOM-059 “Diseño del proceso, calificación del proceso y verificación continua del proceso.</h4>

                    <h4>Expertise en VALIDACIÓN DE SISTEMAS COPUTARIZADOS</h4>
                    <h4>Expertos en VALIDACIÓN DE SISTEMAS COMPUTARIZADOS como son:</h4>
                    <ul>
                        <li>SAP</li>
                        <li>Monitoreo de red fría</li>
                    </ul>
                    <h4><strong>Ofrecemos:</strong> Cumplimiento a NOM-059</h4>

                    <h3 style="margin-bottom: 14px">La validación del proceso está asociada a la recopilación y evaluación de datos durante todo el ciclo de vida de un producto, desde la etapa de diseño del proceso hasta la producción comercial.</h3>

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
                    <h3>El área de Gestión de Riesgos de <strong>Mindora Consultores</strong> se especializa en la capacitación e implementación de la gestión de riesgos del sistema de calidad de la organización, con lo que ofrece la implementación de una metodología que consta de tres fases para el cumplimiento a normatividad vigente como es: ISO 9001 y NOM-059 ayudando con ello al enfoque preventivo e implementación de los controles de la operación para la estandarización de procesos, evaluación de impacto a desviaciones y controles de cambio, con lo que se fomenta el trabajo en equipo de la organización y mejora continua.</h3>

                    <div style="width: 100%; text-align: center; margin-top: 16px">
                        <img style="width: 90%;" src="{{ asset('media/app/service-diagram-a.png') }}" alt="Flujo de riesgos de calidad" >
                    </div>

                    <h4>Expertise en gestión de riesgos</h4>
                    <h3 style="margin-bottom: 12px">Capacitación e implementación de una metodología para la gestión de riesgos aplicable a:</h3>
                    <ul>
                        <li>Procesos o subprocesos (implementación de controles).</li>
                        <li>Desviaciones (evaluación de impacto)</li>
                        <li>Controles de cambio (evaluación de impacto)</li>
                        <li>Necesidades de clientes interno y externos</li>
                    </ul>
                    <div style="width: 100%; text-align: center">
                        <img style="width: 90%;" src="{{ asset('media/app/service-diagram-b.png') }}" alt="Gestión de riesgos de calidad" >
                    </div>

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

    <div id="show-service-modal-e" class="m-modal-container-bg">
        <div class="m-modal-container">
            <div class="m-modal-container-a">
                <div class="m-modal-container-head" style='background-image: url("{{ asset('/media/slider/slider-0.png') }}");'>
                    <div class="m-modal-container-head-title" style='background-image: url("{{ asset('/media/app/mindora-logo-white.png') }}");'>
                        <p>Servicio</p>
                        <h2>Inteligencia comercial</h2>
                    </div>
                </div>
                <div class="m-modal-container-body">
                    <h3 style="margin-bottom: 14px">Los clientes hoy más que nunca están mejor informados sobre nuestros productos y sobre los de la competencia que antes, mediante procesos de investigación online, sabe perfectamente lo que pueden ofrecerle. Por eso el objetivo de las herramientas de inteligencia comercial es facilitar la labor de todo comercial durante el ciclo de ventas, aportando la información que necesitan.</h3>
                    <h3 style="margin-bottom: 14px">El conjunto de métodos, técnicas y mecanismos para recabar, registrar, analizar y difundir la información estratégica sobre: la competencia y el entorno es la inteligencia comercial, en otras palabras, es el hecho de conseguir y procesar la información necesaria para tomar decisiones relativas a la gestión comercial y de marketing en la empresa.</h3>
                    <h3 style="margin-bottom: 14px">En Mindora consultores contamos con una estructura permanente compuesta por personas, equipos y procedimientos orientados a capturar, clasificar, analizar, evaluar y distribuir información pertinente, clara, oportuna, precisa y actual que soporte la toma de decisiones en cada una de las etapas del proceso de marketing de los sectores a los que nos dedicamos.</h3>

                    <h4>Inteligencia comercial</h4>
                    <ul>
                        <li><strong>Mercadotecnia</strong> (Segmentación de mercados, análisis de tendencias y de clientes)</li>
                        <li><strong>Ventas</strong> (Análisis de clientes y rentabilidad, análisis por producto, por segmento, proyecciones y pronósticos de ventas, análisis predictivos)</li>
                    </ul>

                    <h4>Realizando estudios enfocados en las siguientes fases:</h4>
                    <ul>
                        <li>Fichas ejecutivas de competidores actualizadas</li>
                        <li>Perfiles de competidores completos</li>
                        <li>Listado de nuevos clientes</li>
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
                    <h1>Estudios de</h1>
                    <h1>consumidor</h1>
                    <a href="{{ route('front.contact') }}" class="btn-slider" style='background-image: url("{{ asset('/media/app/icon-email-white.png') }}");'>Contacto</a>
                </div>
            </div>
        </div>
        <div class="slider-item" style='background-image: url("{{ asset('/media/slider/slider-4.png') }}");'>
            <div class="slider-bg-item">
                <div class="slider-info-item">
                    <h2>Soluciones en</h2>
                    <h1>Inteligencia</h1>
                    <h1>comercial</h1>
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
                <h3>Estudios de consumidor</h3>
                <a id="btn-service-modal-b" href="#!">Leer más</a>
            </div>
        </div>
        <div class="services-container-item" style='background-image: url("{{ asset('/media/slider/slider-4.png') }}");'>
            <div class="services-container-item-bg">
                <h3>Inteligencia comercial</h3>
                <a id="btn-service-modal-e" href="#!">Leer más</a>
            </div>
        </div>
        <div class="services-container-item" style='background-image: url("{{ asset('/media/slider/slider-2.png') }}");'>
            <div class="services-container-item-bg">
                <h3>Validación de procesos</h3>
                <a id="btn-service-modal-c" href="#!">Leer más</a>
            </div>
        </div>
        <div class="services-container-item last-item" style='background-image: url("{{ asset('/media/slider/slider-3.png') }}");'>
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
            <p>Un equipo visionario con líderes especializados  con más de 14 años de experiencia en inteligencia comercial y farmacéutica.</p>
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
                    <p>Construir una opción real, profesional, comprometida oportuna y ética que permita desplegar y desarrollar las estrategias de nuestros clientes.</p>
                </div>
                <div style='background-image: url("{{ asset('/media/app/icon-people.png') }}");'>
                    <h2>Visión</h2>
                    <p>Cimentar estrechas relaciones laborales y/o comerciales de mediano y largo plazo entre nuestros clientes, proveedores y accionistas de la empresa en busca del beneficio común.</p>
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

            $('#btn-service-modal-e').click(function () {
                $('.m-modal-container-bg').fadeOut();
                $('#show-service-modal-e').fadeIn();
            });

            $('.btn-close-service-modal').click(function () {
                $('.m-modal-container-bg').fadeOut();
            });
        });
    </script>
@endsection