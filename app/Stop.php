<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Stop extends Model
{
    //
    protected $fillable = ["name","localizations"];

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
