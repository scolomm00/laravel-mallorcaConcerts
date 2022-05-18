@extends('front.layout.master')

@section('title') Página de pago @endsection
@section('description') Esto es la descripcion de la página @endsection
@section('keywords') Esto son las palabras clave de la página @endsection
@section('content')

    @if($agent->isDesktop())
        @include('front.components.desktop.title', ['title' => 'Página de pago'])
        @include('front.pages.checkout.desktop.checkout')
    @endif

    @if($agent->isMobile())
        @include('front.components.mobile.title', ['title' => 'Página de pago'])
        @include('front.pages.checkout.mobile.checkout')
    @endif
    
@endsection