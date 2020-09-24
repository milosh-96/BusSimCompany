@if(auth()->user())
    <x-app-layout>
        @livewire('companies.details')
    </x-app-layout>
@else
<x-guest-layout>
    @livewire('companies.details')
</x-guest-layout>
@endif

