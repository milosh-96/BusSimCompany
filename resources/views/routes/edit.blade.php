@extends('layouts.layout')
@section('content')
    <div id="page">
        <div class="bg-red-300 text-red-900 p-5">
            To save your routes, register. Quick Share Routes will be deleted after 5 days.
        </div>
        <h1>Edit Route</h1>
        <p class="italic">
        </p>
        <div>
            <div class="flex">
            <div class="w-2/3">
                <form action="{{route('routes.update',$route->permalink())}}" method="POST">
                    {{ csrf_field() }}
                <h3>Your Route</h3>
               <div class="w-full">
                <label>Route number</label>
                <input class="text-2xl" name="number" class="border-blue-200" value="{{$route->number}}" />
               </div>
                <select name="stops[]" multiple class="big-select w-2/3" size="20" id="new-route">
                    @foreach($route->stops->sortBy("position") as $stop)
                        <option id="stop-{{$stop->id}}" data-id="{{$stop->id}}" value="{{$stop->id}}">{{$stop->name}}</option>
                    @endforeach
                </select>
                <div class="w-full">
                    <input type="submit" class="submit-button w-full" value="Share!">
                </div>
            </div>
            <div class="w-1/3">
                <h3>Stops Available</h3>
                <select class="big-select w-full" id="stop-bank" size="10">
                    @foreach($areas as $area)
                    <optgroup label="{{$area->name}}">
                        @foreach($area->stops as $stop)
                        <option @if($route->stops->contains($stop)) disabled @endif id="stop-{{$stop->id}}" data-id="{{$stop->id}}" value="{{$stop->id}}">{{$stop->name}}</option>
                        @endforeach
                    </optgroup>
                    @endforeach
                </select>
            </div>
            </div>

    </div>
    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $("#new-route > option").attr("selected","selected");

        $("#new-route > option").click(function(e) {
            handleSubSelect(e.currentTarget);
        });

        $("#stop-bank > optgroup >option").click((e)=>{

        var option = e.currentTarget;
        $("#new-route").append(option.outerHTML);
        option.disabled = true;
        $("#new-route > option").attr("selected","selected");
        $("#new-route > option").click(function(e) {
            handleSubSelect(e.currentTarget);
        });
        });


    });

    function handleSubSelect(element) {
        $(element).remove();
        $("#stop-bank option#"+element.id).removeAttr("disabled");
    }





</script>
@endsection
