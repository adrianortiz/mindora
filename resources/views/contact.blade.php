@extends('layouts.front-layout')

@section('title', 'Contacto | Mindora')

@section('extra-css')
    <link href="{{ asset('js/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('js/slick/slick-theme.css') }}" rel="stylesheet">
@endsection


@section('content')

    <div id="map"></div>

    <section class="contact-container-full">
        <section class="contact-container-full-b">
            <section class="contact-container">
                <div class="contact-container-form">
                    <h2>Formulario de contacto</h2>
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
                            <div class="input-container" style="width: 48%; display: inline-block">
                                <label for="name">Nombre(s):</label>
                                <input type="text" id="name" name="name" placeholder="Nombre(s)" value="{{ old('name') }}" required/>
                                @error('name')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-container" style="width: 48%; display: inline-block">
                                <label for="last_name">Apellido(s):</label>
                                <input type="text" id="last_name" name="last_name" placeholder="Apellido(s)" value="{{ old('last_name') }}" required/>
                                @error('last_name')
                                <span>{{ $message }}</span>
                                @enderror
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
                                    <option value="Mercadotecnia" @if(old('service') == 'Estudios de mercado') {{ 'selected="selected"' }} @endif >Estudios de mercado</option>
                                    <option value="Contabilidad" @if(old('service') == 'Estudio de consumidor') {{ 'selected="selected"' }} @endif >Estudio de consumidor</option>
                                    <option value="Legal" @if(old('service') == 'Validación de procesos') {{ 'selected="selected"' }} @endif >Validación de procesos</option>
                                    <option value="Tecnología" @if(old('service') == 'Gestión de riesgos') {{ 'selected="selected"' }} @endif >Gestión de riesgos</option>
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
                                <span>* Todos los campos son obligatorios</span>
                            </div>

                        </form>
                    </div>

                </div>
                <div class="contact-container-info" style='background-image: url("{{ asset('/media/slider/slider-0.png') }}");'>
                    <div>

                        <a href="{{ route('front.index') }}">
                            <img src="{{ asset('/media/app/mindora-white.png') }}" alt="Mindora Consultores S.A. de C.V." width="198" height="65">
                        </a>

                        <h2>Dirección:</h2>
                        <p>Ciruelos 295 Fracc. Hacienda Santa Clara</p>
                        <p>Lerma. Estado de México</p>
                        <p>C.P. 52004</p>
                        <hr>
                        <h2>Teléfono:</h2>
                        <p>(55) 3732 5400</p>
                        <h2>Correo electrónico:</h2>
                        <p>contacto@mindora.com.mx</p>
                        <hr>
                        <h2>Horarios de atención:</h2>
                        <p>Lunes a viernes de 9:00 a 18:00 hrs.</p>
                    </div>
                </div>
            </section>
        </section>
    </section>



@endsection

@section('extra-js')
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 19.415310874313878, lng: -99.17608410000003},
                zoom: 17,
                scrollwheel: false
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASGLG_X33TnTSWT_ynl3qKkTX2YhrVSeI&callback=initMap" async defer></script>
@endsection