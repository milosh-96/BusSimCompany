@extends('layouts.layout')
@section('content')
<div id="page">
    <h1>Stop: {{$stop->name}}</h1>
    <hr>
        Area: {{$stop->area->name}}
    <hr>
    <div class="actions">
        <a href="{{route('stops.edit',$stop->permalink(true))}}">Edit</a>
    </div>
</div>
@endsection
