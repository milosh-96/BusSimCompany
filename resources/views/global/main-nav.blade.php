<nav id="header-menu">
    <div class="logo">
        <a href="{{route('home')}}" class="flex">
            <img class="icon" width="54" height="54" src="https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/630/aiga_bus_on_grn_circle-512.png">
            <span class="text">My Bus Company</span>
        </a>
    </div>
    <div class="block lg:hidden">
      <button class="flex items-center px-3 py-2 border rounded text-gray-200 border-gray-400 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
      <div class="menu-items lg:flex-grow">
        <a href="{{route('home')}}">
          Home
        </a>
        <a href="{{route('routes.index')}}">
          Suggested Routes
        </a>
        <a href="{{route('stops.index')}}">
          Stops Index
        </a>
        <a href="#responsive-header">
        </a>
      </div>
      <div>
        <a href="{{route('share')}}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-orange-500 border-white hover:border-transparent hover:text-orange-600 bg-white mt-4 lg:mt-0">Share Your Route!</a>
        <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-gray-500 hover:bg-white mt-4 lg:mt-0 animate-pulse">Create Your Company Now!</a>
      </div>
    </div>
