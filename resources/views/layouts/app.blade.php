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
     </title> <!-- Scripts -->
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
 </head>
<body class="text-gray-800">

        <div class="bg-gray-100">

           <div class="w-full">
               <div class="bg-gray-700 p-4">
                    <div class="flex">
                        <div class="w-2/12">
                            <a href="{{route('home')}}">
                                <img src="/images/logo.png" width="32px" alt="">
                            </a>
                        </div>
                        <div class="w-10/12 text-right">
                            <form action="{{route('logout')}}" method="POST">
                                {{ csrf_field() }}
                                <button class="bg-gray-600 hover:bg-gray-800 p-1 text-white">Logout</button>

                            </form>
                        </div>
                    </div>
               </div>
            <div class="flex">
                <div class="w-2/12 bg-gray-800 py-5">
                    @include('global.side-nav')

                </div>
                <div class="w-1/12"></div>
                <div class="w-8/12" style="padding-bottom:300px">
                    <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
                </div>
            </div>
           </div>
        </div>

        @stack('modals')
        @include('global.footer')
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        @yield('scripts')
        @livewireScripts

    </body>
</html>
