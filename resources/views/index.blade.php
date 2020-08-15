@extends('layouts.layout')
@section('content')
    <div id="page"">

       <div class="flex">
        <div class="w-3/4">
            <h2 class="text-3xl">
                Active Routes
            </h2>
            <ul class="generic-list">
                <li>
                <a href="/route" class="flex">
                    <div class="route-number w-6">5</div>
                    <div>Central Bus Station - Airport</div>
                </a>
                </li>
                <li>
                    <a href="/route" class="flex">
                        <div class="route-number w-6">6</div>
                    <div>Westfield - Hayscales</div>
                    </a>
                  </li>
            </ul>
        </div>
        <div class="w-1/4">
            <h2 class="text-3xl">
                Manage
            </h2>
            <ul class="generic-list">
                <li>
                    <a href="#">Add New</a>
                    <a href="#">Delete All</a>
                </li>
            </ul>
        </div>

       </div>

        </div>


@endsection
