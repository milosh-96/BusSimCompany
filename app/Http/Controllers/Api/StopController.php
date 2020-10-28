<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stop;
class StopController extends Controller
{
    public function index() {
        return Stop::all();
    }
}
