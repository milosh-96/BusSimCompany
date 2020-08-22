<div id="topbar">
    @if(auth()->user())
    <div class="active-user">
        <strong>User Name: </strong>
        {{auth()->user()->name}}
    </div>
    @else
    <div class="login">
        <a href="{{route('login')}}">Login</a>
        <span> or </span>
        <a href="{{route('register')}}">Register</a>
    </div>
    @endif
</div>
