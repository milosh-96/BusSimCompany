<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Stop extends Model
{
    //
    protected $fillable = ["name","localizations","area"];


    public function area() {
        return $this->belongsTo('App\Area');
    }
    public function routes() {
        return $this->belongsToMany('App\Route','route_id','stop_id');
    }
    public function slug() {
        return Str::of($this->attributes["name"])->slug("-");
    }

    public function permalink($array = false) {
        if($array) {
            return [
                "stop"=>$this->attributes["id"],
                "slug"=>$this->slug()
            ];
        }
        return sprintf("%d/%s",$this->attributes["id"],$this->slug());
    }

}
