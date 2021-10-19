<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Styles -->
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" >
        <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preload" as="font" href="{{ asset('fonts/Poppins-Bold.ttf') }}" type="ttf">
        <link rel="preload" as="font" href="{{ asset('fonts/Poppins-ExtraBold.ttf') }}" type="ttf">
        <link rel="preload" as="font" href="{{ asset('fonts/Poppins-Italic.ttf') }}" type="ttf">
        <link rel="preload" as="font" href="{{ asset('fonts/Poppins-Medium.ttf') }}" type="ttf">
        <link rel="preload" as="font" href="{{ asset('fonts/Poppins-Regular.ttf') }}" type="ttf">
        <link rel="preload" as="font" href="{{ asset('fonts/Poppins-Thin.ttf') }}" type="ttf">

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
