<x-slot name="header">
    {{auth()->user()->company->name,'Welcome'}}
</x-slot>

<div id="page"">
    <div class="flex">
        <div class="w-3/12 bg-white p-5 rounded shadow-sm">
            @if(auth()->user()->company)
            <h3>{{auth()->user()->company->name}}</h3>

            <a href="#">Get Driving Schedule</a>
            @else
            <a href="#">Create Your Company</a>
            @endif
        </div>
        <div class="w-1/12"></div>
        <div class="w-8/12 bg-white p-5 rounded shadow-sm">
            @if($user->company)
            <livewire:routes.routes-list></livewire:routes.routes-list>
            <hr>
            <a href="{{route('share')}}">Add New</a>
            @endif
        </div>
    </div>
</div>
