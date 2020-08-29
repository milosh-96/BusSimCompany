@extends('layouts.layout')
@section('content')
<div id="page">
    <h2>{{$company->name}}</h2>
    <hr>
    <a href="{{route('routes.create')}}">Add new Route</a>
    <button class="rounded-sm p-1 bg-green-500 text-white">Get Driver Sheet</button>
</div>
@endsection
