<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function stops() {
        return $this->hasMany("App\Stop");
    }
}
