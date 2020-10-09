<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ["hash_id","number","name","company_id","anonymous"];

    public function firstStop() {
        return $this->stops->first();
    }
    public function lastStop() {
        return $this->stops->last();
    }

    public function company() {
        return $this->belongsTo('App\Company');

    }

    public function timetable() {
        return $this->hasOne('App\Timetable');
    }
    public function stops() {
        return $this->belongsToMany('App\Stop');
    }

    public function autoName($number = false)
    {
        $startStop = str_replace("- ","/",$this->stops->first()->name);
        $lastStop = str_replace("- ","/",$this->stops->last()->name);
        if($number) {
            return sprintf("%s: %s - %s",$this->attributes['number'],$startStop,$lastStop);
        }
        return sprintf("%s - %s",$startStop,$lastStop);
    }

    public function permalink($array = false) {
        if($array) {
            return [
                "hash_id"=>$this->attributes["hash_id"],
            ];
        }
        return sprintf("%s",$this->attributes["hash_id"]);
    }
}
