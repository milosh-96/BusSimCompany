<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class DrivingSchedule extends Component
{
  public  $routes;

    public function mount() {
        $this->routes = $this->generate();
    }
    public function render()
    {
        return view('livewire.user.driving-schedule');
    }

    private function generate() {
        $initRoute = auth()->user()->company->routes->random(1)[0];
        $modes = ["Round Trip","Loop"];
        $buses = ["Citaro K","Citaro G","MAN Lion's City","Iveco Urbanway 12"];
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
                    "mode"=>$modes[rand(0,1)],
                    "bus"=>$buses[rand(0,count($buses)-1)]
                ));
                $i++;
            }

        }
        return $generatedRoutes;
    }
}
