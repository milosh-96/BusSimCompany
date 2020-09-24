<?php

namespace App\Http\Livewire\Companies;

use Livewire\Component;

class Details extends Component
{
    public $user;

    public function mount() {
        $this->user = auth()->user();
    }
    public function render()
    {
        return view('livewire.companies.details');
    }
}
