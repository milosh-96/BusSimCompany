@extends('layouts.layout')
@section('content')
    <div id="page"">
        <div class="flex">
            <div class="w-2/3">
                <h2>User Profile</h2>
                <hr>
                ...
                <hr>
                <h3>Company Stats</h3>
                @if(!auth()->user()->company)
                <p>You don't have a company,
                    <a href="{{route('companies.create')}}">create a new now!</p>
                @else
                    Number of routes: {{count(auth()->user()->company->routes)}}
                @endif
            </div>
            <div class="w-1/3">
                <h3>Actions</h2>
                <a href="{{route('routes.create')}}" class="submit-button">Add Route</a>
                <a href="{{route('companies.driver-sheet',auth()->user()->company->hash_id)}}" class="submit-button">Get Driver Sheet</a>
            </div>
        </div>


    </div>


@endsection
