<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stranger;
use DB;

class StrangerController extends Controller
{
    public function index( ) {

    	
    	$strangers = Stranger::select(DB::raw('count(*) as hits, ip, MAX(lat) as lat, MAX(lng) as lng, MAX(city) as city, MAX(updated_at) as updated_at, MAX(regionName) as regionName, MAX(browser) as browser'))->where('lat', '!=', 0)->groupBy('ip')->get();
    	//dd($strangers[0]->ip);

    	return response()->json(compact('strangers'));
    }
}
