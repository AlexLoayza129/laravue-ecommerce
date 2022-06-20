<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body{background-color: #f5f5f5;}
    </style>
    <title>@yield('title')</title>
</head>
<body class="relative pb-8">
    <div id="app" class="pb-8" style="min-height: 100vh;">
        @include('layout.base-layout')
        <div class="container mx-auto bg-white my-4 p-4">
            @yield('content')
        </div>
        @include('layout.footer')    
    </div>
    @routes
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>