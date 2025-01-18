<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title', '')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts and Styles -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- Livewire Styles -->
    @livewireStyles
</head>

<body>

    <!-- This is a comment added to the base layout -->
    @yield('body')

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Stack for Additional Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta24/dist/js/tabler.min.js"></script>
    @stack('scripts')
</body>

</html>
