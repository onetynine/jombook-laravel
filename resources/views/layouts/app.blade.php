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

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Livewire Styles -->
    @livewireStyles

</head>

<body class="font-sans antialiased dark:bg-gray-800">

    <!-- Header -->
    @include('layouts.includes.header')

    <!-- Banner -->
    <x-banner />

    <!-- Main Content -->
    <main class="container-fluid mx-auto flex flex-col flex-grow justify-center">
        {{ $slot }}
    </main>


    <!-- Footer -->
    @include('layouts.includes.footer')

    <!-- Modals -->
    @stack('modals')

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>
