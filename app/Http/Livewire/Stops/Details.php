<?php

namespace App\Http\Livewire\Stops;

use Livewire\Component;
use App\Stop;
class Details extends Component
{
    public $stop;
    public function mount() {
        $this->stop = request()->stop;
    }
    public function render()
    {
        return view('livewire.stops.details');
    }
}
