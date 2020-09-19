@extends('layouts.layout')
@section('content')
    <div id="page">
        @livewire('routes.forms.add-new',["edit"=>true,"hash_id"=>request()->hash_id])
    </div>
@endsection
