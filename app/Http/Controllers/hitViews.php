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
	    $data = DB::table('stranger')->where('ip','!=','192.168.1.17')->where('ip','!=','67.82.67.17')->get();
	    return view('pages.hits', compact('data'));
	}


}
