<?php

namespace App\Http\Livewire\Routes\Forms;

use Livewire\Component;
use App\Area;
use App\Stop;
use \Illuminate\Http\Request;
use \Illuminate\Support\Str;
use App\Services\RouteService;
use App\Route;

class AddNew extends Component
{
    public $areas;
    public $edit;
    public $route;
    public $hash_id;

    public $formAction;

    public function mount() {
        $this->areas = Area::all();
        $this->formAction = route("routes.post-quick-share");
        if($this->edit) {
            $this->route = Route::where('hash_id',$this->hash_id)->first();
            $this->formAction = route("routes.update",$this->hash_id);
        }
    }


    public function render()
    {
        return view('livewire.routes.forms.add-new');
    }
}
