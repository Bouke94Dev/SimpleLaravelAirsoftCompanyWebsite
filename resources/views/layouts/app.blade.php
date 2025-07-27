<!DOCTYPE html>
<html lang="en">
    <head>
        @routes
        <meta charset="UTF-8" />
        <title>@yield("title", "United AR")</title>
        {{-- Vite assets (Tailwind, Alpine, JS) --}}
        @vite(["resources/css/app.css", "resources/js/app.js"])

        {{-- Livewire styles --}}
        @livewireStyles
    </head>
    <body class="p-10 font-sans bg-gray-200">
        @include("partials.header")
        @yield("body")

        @include("partials.footer")
        {{-- Livewire scripts --}}
        @livewireScripts
    </body>
</html>
