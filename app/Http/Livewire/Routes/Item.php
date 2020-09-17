<?php

namespace App\Http\Livewire\Routes;

use Livewire\Component;

class Item extends Component
{
    public $route;
    public function render()
    {
        return view('livewire.routes.item');
    }
}
