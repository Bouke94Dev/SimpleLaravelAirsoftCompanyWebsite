<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Airsoft')</title>

    {{-- Vite assets (Tailwind, Alpine, JS) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Livewire styles --}}
    @livewireStyles
</head>
<body class="p-10 font-sans bg-gray-100">
    @yield('content')

    {{-- Livewire scripts --}}
    @livewireScripts
</body>
</html>
