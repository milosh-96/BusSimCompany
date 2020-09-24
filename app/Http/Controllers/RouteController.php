<?php

namespace App\Http\Controllers;

use App\Route;
use App\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Services\RouteService;


class RouteController extends Controller
{
    private $routeService;
    public function __construct(RouteService $routeService) {
        $this->routeService = $routeService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        return view('routes.details');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route,$hash_id)
    {
        $route = $route->where('hash_id',$hash_id)->first();
        $vars = [
            "route"=>$route,
            "areas"=>Area::all(),
            "title"=>"Edit Route"

        ];
        return view('routes.edit')->with($vars);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route,$hash_id)
    {
        $route = Route::where('hash_id',$hash_id)->updateOrCreate($request->except(['_token','stops']));
        $i = 1;
        $route->stops()->sync([]);
        foreach($request->stops as $stop) {
            $route->stops()->attach($stop,['position'=>$i,'direction'=>1]);
            $i++;
        }
      return redirect()->route('routes.details',$route->permalink(true));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        //
    }


    public function quickShare(Request $request) {

        $request->validate([
            "stops"=>"required|array|min:4",
            "number"=>"required|max:25"
        ]);
        $annon = true;
        if(auth()->user() && auth()->user()->company) {
            $annon = false;
        }
        $route = $this->routeService->saveNewRoute($request->all(),$annon);


        return redirect()->route('routes.details', ['hash_id' => $route->hash_id]);
    }
}
