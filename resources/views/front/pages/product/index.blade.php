@extends('front.layout.master')

@section('title') Producto @endsection
@section('description') Esto es la descripcion de la página @endsection
@section('keywords') Esto son las palabras clave de la página @endsection
@section('content')

    @if($agent->isDesktop())
        @include('front.pages.product.desktop.product')
    @endif

    @if($agent->isMobile())
        @include('front.pages.product.mobile.product')
    @endif

@endsection
