@extends('front.layout.master') 

@section('title') Página de contacto @endsection
@section('description') Esto es la descripcion de la página @endsection
@section('keywords') Esto son las palabras clave de la página @endsection
@section('content')

    @if($agent->isDesktop())
        <div class="page-section">
            @include('front.components.desktop.title', ['title' => 'Contacto'])
            @include('front.pages.contact.desktop.contact')
        </div>

    @endif

    @if($agent->isMobile())
        @include('front.components.mobile.title', ['title' => 'Contacto'])
        @include('front.pages.contact.mobile.contact')
    @endif

@endsection
     

    