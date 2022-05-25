<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="192x192" href="http://cdn.onlinewebfonts.com/svg/img_325788.png">
    <link rel="shortcut icon" href="/assets/favicon.ico">

    <title>Panel de administración</title>
    <meta name="description" content="hola esto es la descripcion">
    <meta name="keywords" content="admin, panel, table, form">

    @include('admin.layout.partials.style')

</head>

<body>
    
    @include('admin.layout.partials.header')

    <main>

        @include('admin.layout.partials.filters')
        
        @yield('content')

    </main>

    @include('admin.layout.partials.notify')
    @include('admin.layout.partials.js')

</body>

</html>