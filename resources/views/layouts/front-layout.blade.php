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

@yield('content')

<script src="{{ asset('js/jquery.min.js') }}"></script>
@yield('extra-js')
</body>
</html>