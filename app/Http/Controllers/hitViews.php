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


}
