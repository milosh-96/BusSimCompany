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
        return sprintf("%s - %s",$this->stops->first()->name,$this->stops->last()->name);
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
