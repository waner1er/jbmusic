<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>AlphaTab Tutorial</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@coderline/alphatab@latest/dist/alphaTab.js"></script>
    <script src="https://kit.fontawesome.com/b43f0e512e.js"></script>
    @vite(['resources/js/player.js', 'resources/css/player.css'])
</head>

<body>
  <div class="min-h-screen bg-gray-100 ">
    @include('layouts.navigation')
        {{ $slot }}
    </div>

</body>

</html>
