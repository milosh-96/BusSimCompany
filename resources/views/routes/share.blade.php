@extends('layouts.layout')
@section('content')
    <div id="page">
        <form class="default-form" action="{{route('routes.post-quick-share')}}" method="POST">
                    {{ csrf_field() }}

        @if(!auth()->user() || !auth()->user()->company)
        <div class="message-box alert">
            To save your routes, <a href="{{route('register')}}">Register</a>! Quick Share Routes will be deleted after 5 days.
        </div>
        @endif
        <p class="italic">
            @if(!auth()->user() || !auth()->user()->company)
            If you want to quickly share your routes use this tool. If you want to maintain a
            collection of your routes - <a href="{{route('register')}}">register</a> and create your company. Read more details <a href="#">here</a>.
            @endif
        </p>
        <div>
            <div>
               <label>Enter number of your route:</label> <input style="width:150px" placeholder="route number" class="text-2xl rounded-md mx-3 text-center text-white bg-green-500" name="number" />
            </div>
            <div class="md:flex">
            <div class="w-full md:w-2/3">
                <h3>Selected Stops</h3>
                <select name="stops[]" multiple class="big-select w-full md:w-2/3" size="20" id="new-route">
                </select>

            </div>
            <div class="w-full md:w-1/3">
                <h3>Stops Available</h3>
                <select class="big-select w-full" id="stop-bank" size="15">
                    @foreach($areas as $area)
                    <optgroup label="{{$area->name}}">
                        @foreach($area->stops as $stop)
                        <option id="stop-{{$stop->id}}" data-id="{{$stop->id}}" value="{{$stop->id}}">{{$stop->name}}</option>
                        @endforeach
                    </optgroup>
                    @endforeach
                </select>
            </div>
            </div>

    </div>
    <div class="w-full">
        <input type="submit" class="submit-button w-full" value="Share!">
    </div>
</form>
    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
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
