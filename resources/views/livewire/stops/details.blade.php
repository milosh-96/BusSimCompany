        @slot('header',$stop->name)
        <div>
            <hr>
                Area: {{$stop->area->name}}<p>
                @if(auth()->user())
                Active Routes: @foreach($stop->routes as $route) <a href="{{route('routes.details',$route->permalink(true))}}">{{$route->number}} </a>  @endforeach
                @endif

        </div>


