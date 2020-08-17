@extends('layouts.layout')
@section('content')
<div id="page">
    <h1>Stop: {{$stop->name}}</h1>
    <hr>
        active routes: none
    <hr>
    <div class="actions">
        <a href="{{route('stops.edit',$stop->permalink(true))}}">Edit</a>
    </div>
</div>
@endsection
