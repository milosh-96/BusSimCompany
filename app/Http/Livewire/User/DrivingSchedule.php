<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class DrivingSchedule extends Component
{
    public  $routes;
    public $buses;
    public $modes;
    public $userBus;
    public $dayPeriods;
    public function mount() {

        $this->buses = ["Citaro K","Citaro G","MAN Lion's City","Iveco Urbanway 12"];
        $this->modes = ["Round Trip","Loop"];
        $this->dayPeriods = ["Morning (04-09)","Daytime (09-17)","Dusk (17-19)","Evening (19-23)","Night (23-04)"];
        $this->routes = $this->generate();

        $this->userBus = [
            "bus"=>$this->buses[rand(0,count($this->buses))],
            "depotNo"=>rand(0,3000)
        ];

    }
    public function render()
    {
        return view('livewire.user.driving-schedule');
    }

    private function generate() {
        $initRoute = auth()->user()->company->routes->random(1)[0];
        $i = 0;
        $generatedRoutes = [];
        while($i <= 4) {
            $route = auth()->user()->company->routes->random(1)[0];
            if(
                $route->firstStop()->area_id == $initRoute->firstStop()->area_id ||
                $route->lastStop()->area_id == $initRoute->firstStop()->area_id
                ) {
                $generatedRoutes[] = ((object)array(
                    "route"=>$route,
                    "mode"=>$this->modes[rand(0,1)],
                    "period"=>$this->dayPeriods[rand(0,count($this->dayPeriods)-1)],
                ));
                $i++;
            }

        }
        return $generatedRoutes;
    }
}
