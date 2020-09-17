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
    private $routeService;
    public $areas;
    public $stops;
    public $number;
    public function mount() {
        $this->areas = Area::all();
    }

    public function saveRoute(Request $request) {

        $anon = true;
        if(auth()->user() && auth()->user()->company) {
            $anon = false;
        }
        $data["hash_id"]=Str::uuid();
        $data["anonymous"]=true;

        if(!$anon) {
            $data["anonymous"]=false;
            $data["company_id"]=auth()->user()->company->id;
        }
        $i = 1;
        $data["stops"]=$this->stops;
        $data["number"]=$this->number;
        return $this->stops;
        $route = Route::create($data);
        foreach($data['stops'] as $stop) {
            $route->stops()->attach($stop,['position'=>$i,'direction'=>1]);
            $i++;
        }

        return redirect()->route('routes.details', ['hash_id' => $route->hash_id]);
    }

    public function render()
    {
        return view('livewire.routes.forms.add-new');
    }
}
