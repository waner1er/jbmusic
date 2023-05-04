<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="lofi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
</head>

<body class="antialiased flex flex-col justify-between min-h-screen">
    <div>
        @livewire('nav-menu')
        <div>
            {{ $slot }}
        </div>
    </div>
    <x-footer />
    @livewireScripts
</body>

</html>
