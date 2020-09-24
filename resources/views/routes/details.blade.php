@if(auth()->user())
    <x-app-layout>
        @livewire('routes.details')
    </x-app-layout>
@else
<x-guest-layout>
    @livewire('routes.details')
</x-guest-layout>
@endif

