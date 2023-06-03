<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cmyk">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/guitar.jpg') }}">
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    @livewireStyles
</head>

<body class="antialiased flex flex-col justify-between min-h-screen font-press-start ">
    <div>
        @livewire('nav-menu')
        @if (isset($header))
            <header class="">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="font-semibold text-2xl text-gray-800 leading-tight mx-auto text-center">
                        {{ $header }}
                    </h1>
                </div>
            </header>
        @endif
            {{ $slot }}
    </div>
    <x-footer />
    @livewireScripts
</body>

</html>
