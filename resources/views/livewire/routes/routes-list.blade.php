<div>
    @foreach($routes as $route)
        @livewire('routes.item', ['route' => $route], key($route->number))
    @endforeach
</div>
