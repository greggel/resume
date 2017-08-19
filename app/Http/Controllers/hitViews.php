<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hits;
use DB;
use View;

class hitViews extends Controller
{

	public function ipHits()
	{
	    $data = DB::table('stranger')->where('ip','!=','192.168.1.17')->where('ip','!=','68.199.250.114')->get();
	    return view('pages.hits', compact('data'));
	}
	/*public function ipHits()
	{
	    $data = DB::table('stranger')->pluck('ip');
	    return View::make('pages.hits')->with('ipHits', $data);
	    
	    $data = DB::table('stranger')->pluck('hits');
	    return View::make('pages.hits')->with('hits1', $data);
	    
	    $data = DB::table('stranger')->pluck('updated_at');
	    return View::make('pages.hits')->with('data', $data);
	    
	    $data = DB::table('stranger')->pluck('created_at');
	    return View::make('pages.hits')->with('data', $data);
	    
	    $data = DB::table('stranger')->pluck('browser');
	    return View::make('pages.hits')->with('data', $data);
	    
	    $data = DB::table('stranger')->pluck('http_referer');
	    return View::make('pages.hits')->with('data', $data);

	}*/


}
