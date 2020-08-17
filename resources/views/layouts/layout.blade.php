<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.6.2/tailwind.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>
        {{isset($title) ? $title : "Index"}} - Bus Sim Company
     </title>
</head>
<body class="bg-gray-100 text-gray-800">
    @include('global.topbar')
    <header>
        <div class="top">
            @include('global.main-nav')
        </div>
    </header>

    @yield('content')


    <div class="footer-disclaimer">
        This site is made solely for entertainment purposes.
        This site doesn't have access the game or user files.
        All data is entered by the end-users.
        All of the game data on this site is public data, in other words, data that everyone can see via the game interface (stops,buses...).
        <p>Bus Simulator, Bus Simulator 18 are properties of Astragon Entertainment and stillAlive Studios.
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
     @yield('scripts')
</body>
</html>
