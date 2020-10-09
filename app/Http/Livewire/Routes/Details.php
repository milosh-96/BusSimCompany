<?php

namespace App\Http\Livewire\Routes;
use App\Route;
use App\Services\RouteService;
use Livewire\Component;

class Details extends Component
{

    public $route;
    public $title;
    public $myRoute = false;
    public function mount() {
        $this->route = Route::where('hash_id',request()->hash_id)->first();
        $this->title = $this->route->autoName(true);
        if(auth()->user()) {
            $this->myRoute = true;
        }

    }

    public function delete(RouteService $routeService) {
        $routeService->deleteRoute($this->route);
        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.routes.details');

    }
}
