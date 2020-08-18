@extends('layouts.layout')
@section('content')
<div id="page">
    <h1>Create a stop</h1>
    <hr>
    <form action="{{route('stops.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="flex">
            <div class="flex w-2/3">
                <label class="p-3 bg-green-900 text-white text-2xl w-1/5" for="name">Stop Name</label>
                <input type="text" class="w-3/5 p-3 text-green-900 bg-gray-100 text-2xl" name="name" id="name">
            </div>
            <div class="flex w-1/3">
                <select class="w-3/5 p-3 text-green-900 bg-gray-100 text-2xl" name="area" id="area">

                </select>
            </div>
        <input type="submit" value="Create" class="submit-button" />

        </div>

    </form>
</div>
@endsection
