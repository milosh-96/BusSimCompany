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

}
