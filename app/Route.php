<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ["hash_id","number","name"];

    public function stops() {
        return $this->belongsToMany('App\Stop');
    }

    public function autoName()
    {
        $startStop = str_replace("- ","/",$this->stops->first()->name);
        $lastStop = str_replace("- ","/",$this->stops->last()->name);
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
