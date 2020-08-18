<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Area;

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
        return view('index');
    }

    public function share() {
        $vars = [
            "areas"=>Area::all(),
            "title"=>"Quick Share"
        ];
        return view('routes.share')->with($vars);
    }
}
