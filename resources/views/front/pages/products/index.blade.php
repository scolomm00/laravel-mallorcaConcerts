@extends('front.layout.master')

@section('title') Productos @endsection
@section('description') Esto es la descripcion de la página @endsection
@section('keywords') Esto son las palabras clave de la página @endsection
@section('content')

    @if($agent->isDesktop())
        @include('front.pages.products.desktop.products')
    @endif

    @if($agent->isMobile())
        @include('front.pages.products.mobile.products')
    @endif

@endsection
