<ul class="text-gray-100 px-5 w-full">
    @if(auth()->user())
    <li><strong>{{auth()->user()->company->name ?? "Welcome"}}</strong></li>
    <li><a href="{{route('home')}}">Dashboard</a></li>
    <li>Routes</li>
    @else
    <li><a href="{{route('login')}}">Login</a></li>
    <li><a href="{{route('register')}}">Register</a></li>
    @endif

</ul>
