<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

class hits extends Eloquent
{
    public $timestamps = false;
    protected $table = 'stranger';

    public function ipHits() {
    	return $this->select('ip');
    }

    public function Hits() {
    	return $this->select('hits');
    }

    public function updatedAt() {
    	return $this->select('updated_at');
    }

    public function createdAt() {
    	return $this->select('created_at');
    }

    public function browser() {
    	return $this->select('browser');
    }

    public function httpReferer() {
    	return $this->select('http_referer');
    }

    //$data = DB::select('select * from stranger');
    //return View::make('hits')->with('data', $data);

    //$hits = App\hits::table('strangers')->select('*')->get();

}
