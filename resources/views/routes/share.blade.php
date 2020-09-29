
@if(auth()->user())
<x-app-layout>
    @slot('header','Add Line to your company')
    <div id="page">
        @livewire('routes.forms.add-new')
    </div>
</x-app-layout>
@else
<x-guest-layout>
    @slot('header','Add Line to your company')
    <div id="page">
        @livewire('routes.forms.add-new')
    </div>
</x-guest-layout>
@endif


