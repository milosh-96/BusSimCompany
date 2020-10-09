<x-app-layout>
    @slot('header','Add Line to your company')
    <div id="page">
        @livewire('routes.forms.add-new',["edit"=>true,"hash_id"=>request()->hash_id])
    </div>
</x-app-layout>
