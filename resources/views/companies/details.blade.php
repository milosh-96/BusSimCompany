@extends('layouts.layout')
@section('content')
    <div id="page"">
        <div class="flex">
            <div class="w-3/12 bg-white p-5 rounded shadow-sm">
                <h3>{{auth()->user()->company->name}}</h3>

                <a href="#">Get Driving Schedule</a>

            </div>
            <div class="w-1/12"></div>
            <div class="w-8/12 bg-white p-5 rounded shadow-sm">
                <livewire:routes.routes-list></livewire:routes.routes-list>
            </div>
        </div>

    </div>


@endsection
