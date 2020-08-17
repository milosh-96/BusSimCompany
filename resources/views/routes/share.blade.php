@extends('layouts.layout')
@section('content')
    <div id="page">
        <div class="bg-red-300 text-red-900 p-5">
            To save your routes, register.
        </div>
        <h1>Share a Route</h1>
        <p class="italic">
            If you want to quickly share your routes use this tool. If you want to maintain a
            collection of your routes - <a href="{{route('register')}}">register</a> and create your company. Read more details <a href="#">here</a>.
        </p>
        <div>
            <div class="flex">
            <div class="w-2/3">
                <h3>Your Route</h3>
                <select class="big-select w-1/2" size="20" id="new-route">

                </select>
            </div>
            <div class="w-1/3">
                <h3>Stops Available</h3>
                <select class="big-select w-full" id="stop-bank" size="10>
                    @foreach($stops as $stop)
                    <option value="{{$stop->id}}">{{$stop->name}}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <div class="w-full">
                <input type="submit" class="submit-button w-full" value="Share!">
            </div>
    </div>
    </div>
@endsection

@section('scripts')
<script>
    $("#stop-bank > option").click((e)=>{
        var option = e.currentTarget;
        $("#new-route").append(option.outerHTML);
        option.disabled = true;


    });
</script>
@endsection
