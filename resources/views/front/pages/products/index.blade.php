@extends('front.layout.master')

@section('title') Productos @endsection
@section('description') Esto es la descripcion de la página @endsection
@section('keywords') Esto son las palabras clave de la página @endsection
@section('content')

    @if($agent->isDesktop())
        @include('front.pages.products.desktop.products', ['products' => $products, 'product_categories' => $product_categories])
    @endif

    @if($agent->isMobile())
        @include('front.pages.products.mobile.products', ['products' => $products, 'product_categories' => $product_categories])
    @endif

@endsection
