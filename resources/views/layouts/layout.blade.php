<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.6.2/tailwind.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>Document</title>
</head>
<body class="bg-gray-100 text-gray-800">
    <div id="topbar">
        Account: Miloš Jovanović
    </div>
    <header>
        <div class="logo mr-5">
            <img src="https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/630/aiga_bus_on_grn_circle-512.png" alt="our logo" class="h-12">
        </div>
        <div id="menu" class="hidden">
            <div>Home</div>
            <div>Routes</div>
            <div>Stops</div>
        </div>
    </header>

    @yield('content')


    <div class="footer-disclaimer">
        This site is made solely for entertainment purposes.
        This site doesn't access the game or user files in any way. All data is entered by the end-users and
        listed is only publicly available data.<p>
        Bus Simulator, Bus Simulator 18 are properties of Astragon Entertainment and stillAlive Studios.
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
     @yield('scripts')
</body>
</html>
