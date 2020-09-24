@if(auth()->user())
<x-app-layout>
    <div id="page">
        <x-slot name="header">
            Add Line to your company
        </x-slot>
        @livewire('routes.forms.add-new')
    </div>
</x-app-layout>
@else
<x-guest-layout>
    <div id="page">
        @livewire('routes.forms.add-new')
    </div>
</x-guest-layout>
@endif

