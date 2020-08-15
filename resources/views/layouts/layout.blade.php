<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.6.2/tailwind.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>Document</title>
</head>
<body class="bg-gray-100 text-gray-800">
    <header>
        <div class="logo mr-5">
            <img src="https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/630/aiga_bus_on_grn_circle-512.png" alt="our logo" class="h-20">
        </div>
        <div id="menu" class="flex">
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
</body>
</html>
