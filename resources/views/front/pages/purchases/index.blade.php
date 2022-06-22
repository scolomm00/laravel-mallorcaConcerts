@extends('front.layout.master')

@section('title') Confirmacion pago @endsection
@section('description') Esto es la descripcion de la página @endsection
@section('keywords') Esto son las palabras clave de la página @endsection
@section('content')

    @if($agent->isDesktop())
        @include('front.pages.purchases.desktop.purchases')
    @endif

    @if($agent->isMobile())
        @include('front.pages.purchases.mobile.purchases')
    @endif

@endsection
