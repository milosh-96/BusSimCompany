@extends('layouts.layout')
@section('content')
<div id="page">
    <h1>Stop: {{$stop->name}}</h1>
    <hr>
        Area: {{$stop->area->name}}<p>
        Active Routes: @foreach($stop->routes as $route) <a href="{{route('routes.details',$route->permalink(true))}}">{{$route->number}} </a>  @endforeach
    <hr>
    <div class="actions">
        <a href="{{route('stops.edit',$stop->permalink(true))}}">Edit</a>
    </div>
</div>
@endsection
