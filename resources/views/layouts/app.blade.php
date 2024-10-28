<!DOCTYPE html>
<html class="h-full w-full overflow-x-hidden" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Christianson Wedding</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Unna:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full w-full bg-[#F4F1E1]">
            @include('components.navbar')
            @yield('content')
    </body>
</html>
