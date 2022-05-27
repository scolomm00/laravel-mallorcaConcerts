<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="192x192" href="https://drop.show/wp-content/uploads/2021/04/logonegro.png">


    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    @include('front.layout.partials.style')

</head>

<body>
    
    @include('front.layout.partials.header')

    <main>

        @yield('content')
    
    </main>
    
    @include('front.layout.partials.footer')

    @include('front.layout.partials.js')

</body>
</html>