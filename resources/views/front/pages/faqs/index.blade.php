@extends('front.layout.master')

@section('title') Preguntas frecuentes @endsection
@section('description') Esto es la descripcion de la página @endsection
@section('keywords') Esto son las palabras clave de la página @endsection
@section('content')

    @if($agent->isDesktop())
        @include('front.components.desktop.title', ['title' => 'Preguntas frecuentes'])
        @include('front.pages.faqs.desktop.faqs')
    @endif

    @if($agent->isMobile())
        @include('front.components.mobile.title', ['title' => 'Preguntas frecuentes'])
        @include('front.pages.faqs.mobile.faqs')
    @endif

@endsection
