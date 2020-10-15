<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.6.2/tailwind.min.css">
    @yield('external-css')
    <link rel="stylesheet" href="/css/main.css">
    @include('global.header-icons')
    @livewireStyles
    <title>
        {{isset($title) ? $title : "Index"}} - Bus Sim Company
     </title>
     <!-- Scripts -->
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
</head>
<body class="text-gray-800">
   @if(auth()->user())
    @include('global.topbar')
    <header class="mb-5">
        <div class="top">
            @include('global.main-nav')
        </div>
    </header>
    @endif

    @if(isset($header))
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header ?? null }}
        </div>
    </header>
    @endif

        <div class="font-sans text-gray-900 antialiased">
            <div class="w-11/12 mx-auto">
                @include('global.errors')
            </div>
            {{ $slot }}
        </div>
        @include('global.footer')
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
         @yield('scripts')
         @livewireScripts
    </body>
</html>
