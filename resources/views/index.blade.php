@extends('layouts.front-layout')

@section('title', 'Inicio | Mindora')

@section('extra-css')
    <link href="{{ asset('js/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('js/slick/slick-theme.css') }}" rel="stylesheet">
@endsection


@section('content')
    <h1>Hello world!</h1>
@endsection

@section('extra-js')
    <script src="{{ asset('js/slick/slick.js') }}"></script>
@endsection