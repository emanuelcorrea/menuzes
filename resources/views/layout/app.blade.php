<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Styles -->
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
        <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Title -->
        <title>{{ $title }} - Café Cherie</title>

        <!-- Extra -->
        @yield('extra')
    </head>
    <body class="antialiased font-poppins">
        @yield('content')

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
