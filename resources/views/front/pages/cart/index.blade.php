@extends('front.layout.master')

@section('title') Carrito de compra @endsection
@section('description') Esto es la descripcion de la página @endsection
@section('keywords') Esto son las palabras clave de la página @endsection
@section('content')

    @if($agent->isDesktop())
        @include('front.components.desktop.title', ['title' => 'Carrito de compra'])
        @include('front.pages.cart.desktop.cart')
    @endif

    @if($agent->isMobile())
        @include('front.components.mobile.title', ['title' => 'Carrito de compra'])
        @include('front.pages.cart.mobile.cart')
    @endif
    
@endsection