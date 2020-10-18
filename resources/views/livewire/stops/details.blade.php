        <div>
            <h2>{{$stop->name}}</h2>
                Area: {{$stop->area->name}}<p>
                @if(auth()->user())
                    @livewire('routes.routes-list', ['routes' => $stop->routes], key($stop->id))
                @else
                <p class="py-5">
                    <strong>Stat: </strong>  {{count($stop->routes)}} routes serve this stop.
                </p>
                @endif


        </div>


