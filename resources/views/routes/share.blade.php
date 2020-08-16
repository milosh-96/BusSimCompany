@extends('layouts.layout')
@section('content')
    <div id="page">
        <h1>Share a Route</h1>
        <div class="flex">
            <div class="w-2/3">
                <h3>Your Route</h3>
                <select size="20" id="new-route">

                </select>
            </div>
            <div class="w-1/3">
                <h3>Stops Available</h3>
                <select id="stop-bank" class="bg-gray-300 w-full p-3 text-2xl" size="10" id="">
                    <option value="1">West Spoke</option>
                    <option value="2">East Spoke</option>
                    <option value="3">North Spoke</option>
                    <option value="4">South Spoke</option>
                </select>
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
