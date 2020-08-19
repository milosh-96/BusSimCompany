@extends('layouts.layout')
@section('content')
    <div id="page"">

       <div class="flex">
        <div class="w-3/4">
            <h2 class="text-3xl">
                Active Routes
            </h2>
            <ul class="generic-list">
              @foreach($routes as $route)
              <li>
                <a href="{{route('routes.details',$route->hash_id)}}" class="flex">
                    <div class="route-number w-12">{{$route->number}}</div>
                    <div>
                        {{$route->autoName()}}
                    </div>
                </a>
                </li>
              @endforeach

            </ul>
        </div>
        <div class="w-1/4">
            @if(auth()->user())
            <h2 class="text-3xl">
                Manage
            </h2>
            <ul class="generic-list">
                <li>
                    <a href="#">Add New</a>
                    <a href="#">Delete All</a>
                </li>
            </ul>
            @endif
        </div>

       </div>

        </div>


@endsection
