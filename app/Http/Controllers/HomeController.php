<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Area;
use App\Route;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $vars = ["routes"=>Route::orderBy("number")->get()];
        return view('index')->with($vars);
    }

    public function share() {
        $vars = [
            "areas"=>Area::all(),
            "title"=>"Quick Share"
        ];
        return view('routes.share')->with($vars);
    }
}
