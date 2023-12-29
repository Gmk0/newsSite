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

        <!-- Styles -->
        @livewireStyles
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    </head>
    <body x-data="{open:false,isNavOpen:false}" class="font-sans antialiased" :class="{'overflow-hidden': isNavOpen}">




            @livewire('web.header')

           {{-- @include('tools.header')
--}}
            <!-- Page Content -->
            <main class="pt-10 overflow-auto">
                {{ $slot }}
            </main>

            @livewire('web.footer')


        @stack('modals')

        @livewireScriptConfig
    </body>
</html>
