    <x-slot name="header">
                <span class="text-2xl route-number p-5">{{$route->number}}</span>
                <span class="px-3">{{$route->autoName()}}</span>
     </x-slot>
     <div id="page">

        <div>
            @if($route->company)
            Operated By: {{$route->company->name}}
            @endif
        </div>

    @if($route->timetable) {
    <div class="timetable pl-20">
        <h2 id="timetable">Timetable</h2>

        <table class="bordered-table table-fixed w-full">
            <thead>
                <tr class="uppercase">
                <th class="w-1/12 text-left">Hour</th>
                <th class="w-2/12 text-left">Week days</th>
                <th class="w-2/12 text-left">Saturday</th>
                <th class="w-2/12 text-left">Sunday</th>
                </tr>
            </thead>
            <tbody>
                <tr class="uppercase">
                    <td>04</td>
                    <td>05,15,25,45,55</td>
                    <td>05,35</td>
                    <td>05,35</td>
                </tr>
                <tr class="uppercase">
                    <td>05</td>
                    <td>05,15,25,45,55</td>
                    <td>05,35</td>
                    <td>05,35</td>
                </tr>
                <tr class="uppercase">
                    <td>06</td>
                    <td>05,15,25,45,55</td>
                    <td>05,35</td>
                    <td>05,35</td>
                </tr>
                <tr class="uppercase">
                    <td>07</td>
                    <td>05,15,25,45,55</td>
                    <td>05,35</td>
                    <td>05,35</td>
                </tr>
                <tr class="uppercase">
                    <td>08</td>
                    <td>05,15,25,45,55</td>
                    <td>05,35</td>
                    <td>05,35</td>
                </tr>
            </tbody>
        </table>
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
    <a href="{{route('routes.edit',$route->permalink(true))}}">Edit</a>
</div>