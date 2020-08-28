<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ["name","user_id","logo_url","primary_color","secondary_color"];
}
