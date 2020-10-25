<?php
namespace App\Services;
use \Illuminate\Support\Str;
use App\Route;

class RouteService {

    public function saveNewRoute($data,$anon = false) {
        //$data->{'hash_id'} = Str::uuid();
        $data["hash_id"]=Str::uuid();
        $data["anonymous"]=true;

        if(!$anon) {
            $data["anonymous"]=false;
            $data["company_id"]=auth()->user()->company->id;
        }
        $route = Route::create($data);
        $i = 1;
       // return $data["stops"];

        $newStops = array();

        foreach($data['stops'] as $stop) {
            $newStops[] = str_replace("_","",$stop);
        }

        foreach($newStops as $stop) {
            $stop = str_replace("_","",$stop);
            $route->stops()->attach($stop,['position'=>$i,'direction'=>1]);
            $i++;
        }

        return $route;
    }

    public function deleteRoute(\App\Route $route) {
        $route->stops()->detach();
        $route->delete();
    }

}
