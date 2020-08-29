<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ["name","user_id","logo_url","primary_color","secondary_color","hash_id"];

    public function permalink($array = false) {
        if($array) {
            return [
                "hash_id"=>$this->attributes["hash_id"],
            ];
        }
        return sprintf("%s",$this->attributes["hash_id"]);
    }
}
