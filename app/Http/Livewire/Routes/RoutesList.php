<?php

namespace App\Http\Livewire\Routes;

use Livewire\Component;

class RoutesList extends Component
{
    public $routes;
    public function mount() {
        $this->routes = auth()->user()->company->routes;
    }
    public function render()
    {
        return view('livewire.routes.routes-list');
    }
}
