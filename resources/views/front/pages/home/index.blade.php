@extends('front.layout.master')

@section('title') Inicio @endsection
@section('description') Esto es la descripcion de la página @endsection
@section('keywords') Esto son las palabras clave de la página @endsection
@section('content')

    @if($agent->isDesktop())
        @include('front.pages.home.desktop.home')
    @endif

    @if($agent->isMobile())
        @include('front.pages.home.mobile.home')
    @endif

@endsection
