<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ["hash_id","number","name"];

    public function stops() {
        return $this->belongsToMany('App\Stop');
    }
}
