<x-app-layout>
    @slot('header',auth()->user()->company->name . ': Driving Schedule for ' . auth()->user()->name)
    @livewire('user.driving-schedule')
</x-app-layout>
