    <x-slot name="header">

     </x-slot>
     <div id="page">

        <div>
            <div class="mb-5">
                <span class="text-2xl route-number p-5">{{$route->number}}</span>
                <span class="px-3">{{$route->autoName()}}</span>
            </div>

        </div>

    @if($route->timetable)
    <div class="timetable">
        <h2 id="timetable">Timetable</h2>

        <div style="max-height: 200px;overflow-y:scroll">

        <table class="bordered-table table-fixed w-full">
            <thead class="bg-white">
                <tr class="uppercase">
                <th class="w-1/12 text-left">Hour</th>
                <th class="w-2/12 text-left">Week days</th>
                <th class="w-2/12 text-left">Saturday</th>
                <th class="w-2/12 text-left">Sunday</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 0;$i < 24;$i++)
                <tr class="uppercase">
                    <td>{{str_pad($i,2,"0",STR_PAD_LEFT)}}</td>
                    <td>05,15,25,45,55</td>
                    <td>05,35</td>
                    <td>05,35</td>
                </tr>
                @endfor

            </tbody>
        </table>
        </div>
    </div>
    @endif

    <div class="stops">
        <h2 id="stops">Stops</h2>
        <div class="md:flex">
        <div class="w-full md:w-1/2">
            <h3>Direction A</h3>
            <ol class="generic-list">
               @foreach($route->stops as $stop)
               <li>
                   <a href="{{route('stops.details',$stop->permalink(true))}}">{{$stop->name}}</a>
               </li>
               @endforeach
            </ol>
        </div>
        <div class="w-full md:w-1/2">
            <h3>Direction B</h3>
            <ol class="generic-list" reversed>
                @foreach($route->stops as $stop)
                <li>{{$stop->name}}</li>
                @endforeach
            </ol>
        </div>
    </div>
    </div>
    @if($route->ownedByLoggedInUser())
    <a href="{{route('routes.edit',$route->permalink(true))}}">Edit</a>
    <a href="#" wire:click="delete">Delete</a>
    @endif
</div>
