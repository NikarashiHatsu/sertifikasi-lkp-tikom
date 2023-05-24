<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="emerald">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="drawer drawer-mobile">
        <input id="drawer" type="checkbox" class="drawer-toggle" />
        <main class="drawer-content w-full flex flex-col bg-base-200 p-6">
            {{ $slot }}
        </main>
        <div class="drawer-side">
            <label for="drawer" class="drawer-overlay"></label>
            @include('layouts.navigation')
        </div>
    </div>

    @livewireScripts
</body>

</html>
