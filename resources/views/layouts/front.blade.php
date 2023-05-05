<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="lofi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
</head>

<body class="antialiased flex flex-col justify-between min-h-screen ">
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
