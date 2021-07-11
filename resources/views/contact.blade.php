@extends('layouts.front-layout')

@section('title', 'Contacto | Mindora')

@section('extra-css')
    <link href="{{ asset('js/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('js/slick/slick-theme.css') }}" rel="stylesheet">
@endsection


@section('content')

    <div id="map"></div>

    <section class="contact-container-full">
            <section class="contact-container" style='background-image: url("{{ asset('/media/slider/slider-0.png') }}");'>
                <div class="contact-container-form">
                    <div class="form-title" style='background-image: url("{{ asset('/media/app/icon-form-contact.png') }}");'>
                        <h2>Contacto</h2>
                        <p>Formulario de contacto</p>
                    </div>
                    <div class="form-contact">

                        @if ($errors->any())
                            <div class="error-msn-form">
                                Por favor corrigue los mensajes de error y vuelve a intentarlo.
                            </div>
                        @endif

                        @if (session()->has('message-success'))
                            <div class="ok-msn-form">
                                ¡Mensaje enviado! En breve nos pondremos en contacto.
                            </div>
                        @endif

                        <form method="POST" action="{{ route('website.contact.mail') }}" class="needs-validation" novalidate="" autocomplete="on">
                            @csrf
                            <div style="display: block">
                                <div class="input-container input-container-50 input-container-50-a">
                                    <label for="name">Nombre:</label>
                                    <input type="text" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}" required/>
                                    @error('name')
                                    <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-container input-container-50 input-container-50-b">
                                    <label for="last_name">Apellidos:</label>
                                    <input type="text" id="last_name" name="last_name" placeholder="Apellido" value="{{ old('last_name') }}" required/>
                                    @error('last_name')
                                    <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="input-container">
                                <label for="email">Correo Eletrónico:</label>
                                <input type="text" id="email" name="email" placeholder="Correo Eletrónico" value="{{ old('email') }}" required/>
                                @error('email')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-container">
                                <label for="phone">Teléfono:</label>
                                <input type="text" id="phone" name="phone" placeholder="Teléfono" value="{{ old('phone') }}" required/>
                                @error('phone')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-container">
                                <label for="service">Servicio:</label>
                                <select id="select" name="service" class="select-css">
                                    <option value="Otro" @if(old('service') == 'Otro') {{ 'selected="selected"' }} @endif >Otro</option>
                                    <option value="Estudios de mercado" @if(old('service') == 'Estudios de mercado') {{ 'selected="selected"' }} @endif >Estudios de mercado</option>
                                    <option value="Estudios de consumidor" @if(old('service') == 'Estudios de consumidor') {{ 'selected="selected"' }} @endif >Estudios de consumidor</option>
                                    <option value="Inteligencia comercial" @if(old('service') == 'Inteligencia comercial') {{ 'selected="selected"' }} @endif >Inteligencia comercial</option>
                                    <option value="Validación de procesos" @if(old('service') == 'Validación de procesos') {{ 'selected="selected"' }} @endif >Validación de procesos</option>
                                    <option value="Gestión de riesgos" @if(old('service') == 'Gestión de riesgos') {{ 'selected="selected"' }} @endif >Gestión de riesgos</option>
                                    <option value="Calificación de áreas" @if(old('service') == 'Calificación de áreas') {{ 'selected="selected"' }} @endif >Calificación de áreas</option>
                                </select>
                                @error('service')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-container">
                                <label for="info">Comentarios:</label>
                                <textarea id="info" name="info" placeholder="Sus comentarios son de gran importancia para nosostros." required="required">{{ old('info') }}</textarea>
                                @error('info')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>

                            <!--
                            <div id="btn-contact-error" style="display: none">
                                <div class="input-container">
                                    <span>reCaptcha con error, por favor recarga la página.</span>
                                </div>
                            </div>
                            -->

                            <div id="btn-contact" style="display: none">
                                <div class="input-container">
                                    <span style="color: #5BA3DF">reCaptcha válidado correctamente.</span>
                                </div>
                            </div>

                            <div  class="input-container">
                                <button type="submit">Enviar</button>
                                <span style="text-align: center">* Todos los campos son obligatorios</span>
                            </div>

                        </form>
                    </div>

                </div>
                <div class="contact-container-info">
                    <div class="contact-container-info-div">

                        <a href="{{ route('front.index') }}">
                            <img src="{{ asset('/media/app/mindora-white.png') }}" alt="Mindora Consultores S.A. de C.V." width="198" height="65">
                        </a>

                        <h2>Dirección:</h2>
                        <p>Ciruelos 295, Santa Clara</p>
                        <p>Lerma. Estado de México</p>
                        <p>C.P. 52004</p>
                        <hr>
                        <h2>Teléfono:</h2>
                        <p style="color: #ffffff !important;">(55) 6481 1572</p>
                        <h2>Correo electrónico:</h2>
                        <p>contacto@mindora.com.mx</p>
                        <hr>
                        <h2>Horarios de atención:</h2>
                        <p>Lunes a viernes de 9:00 a 18:00 hrs.</p>

                        <section class="btn-contact-social-container">
                            <a href="#!" target="_blank" class="btn-contact-social" style='background-image: url("{{ asset('/media/app/icon-linkedin.png') }}");'></a>
                            <a href="#!" target="_blank" class="btn-contact-social" style='background-image: url("{{ asset('/media/app/icon-facebook.png') }}");'></a>
                            <a href="#!" target="_blank" class="btn-contact-social" style='background-image: url("{{ asset('/media/app/icon-twitter.png') }}");'></a>
                        </section>
                    </div>
                </div>
            </section>
    </section>

@endsection

@section('extra-js')

    <script>
        var marker;
        var infowindow;
        var bangaloreA = { lat: 19.3114063, lng: -99.5445811 };
        var bangaloreB = { lat: 19.313283, lng: -99.544662 };

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: bangaloreA,
                zoomControl: true,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_TOP
                },
                fullscreenControl: true,
                fullscreenControlOptions: {
                    position: google.maps.ControlPosition.TOP_RIGHT
                },
                mapTypeControl: false,
                scaleControl: true,
                streetViewControl: false,
                rotateControl: true,
            });

            var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h1 id="firstHeading" class="firstHeading">Mindora</h1>'+
                '<div id="bodyContent">'+
                '<p><b>Mindora</b>, Un equipo visionario con líderes especializados con más de 14 años de experiencia en inteligencia comercial comercial y farmacéutica .</p>'+
                '</div>'+
                '</div>';

            infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            marker = new google.maps.Marker({
                map: map,
                draggable: false,
                animation: google.maps.Animation.DROP,
                position: bangaloreB,
                title: 'Mindora S.A. de C.V.'
            });

            marker.addListener('click', toggleBounce);

            marker.setAnimation(google.maps.Animation.BOUNCE);

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }

        function toggleBounce() {
            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASGLG_X33TnTSWT_ynl3qKkTX2YhrVSeI&callback=initMap" async defer></script>
@endsection
