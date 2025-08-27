<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'laravel') }} | @yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="vh-100 overflow-hidden">
    @include('layouts.nav')
    @session('status')
        <div class="alert alert-success" role="alert">
            {{ status('success') }}
        </div>
    @endsession
    @session('error')
        <div class="alert alert-danger" role="alert">
            {{ status('error') }}
        </div>
    @endsession
    <div class="container-fluid h-100 overflow-x-scroll">
        <div class="row">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
