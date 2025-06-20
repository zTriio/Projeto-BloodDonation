<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
         <link rel="manifest" href="{{ asset('manifest.json') }}">
         <meta name="theme-color" content="#0d6efd">
         <link rel="icon" href="/icons/icon-192.png" type="image/png">
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <script>
            if ("serviceWorker" in navigator) {
                navigator.serviceWorker.register("/service-worker.js")
                    .then(() => console.log("Service Worker registrado!"))
                    .catch(err => console.error("Erro ao registrar o Service Worker:", err));
            }
        </script>
    </body>
</html>
