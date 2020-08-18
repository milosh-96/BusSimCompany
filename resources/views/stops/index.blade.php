@extends('layouts.layout')
@section('content')
<div id="page">
    <h1>Stops</h1>
    <hr>
    <ul class="generic-list">
        @foreach($areas as $area)
            <li><strong>{{$area->name}}</strong></li>
            @foreach($area->stops as $stop)
            <li>
                <a href="{{route('stops.details',$stop->permalink(true))}}">{{$stop->name}}</a>
            </li>
            @endforeach
        @endforeach
    </ul>
    <hr>
    <div class="actions">
        <a href="{{route('stops.create')}}">Create</a>
    </div>
</div>
@endsection
