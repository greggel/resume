<?php

namespace App\Http\Middleware;
include(app_path().'/ip2locationlite.php');
use Eloquent;
use Validator;
use App\User;
use Request;

class StrangerVisitor extends Eloquent
{

    protected $table = 'stranger';

    public $attributes = ['hits' => 0];

    protected $fillable = ['ip', 'updated_at', 'created_at', 'browser', 'http_referer', 'location'];

    public $timestamps = false;

    

    public static function boot() {
        // When a new instance of this model is created...
        static::creating(function ($tracker) {
            $tracker->hits = 0;
        } );

        // Any time the instance is saved (create OR update)
        static::saving(function ($tracker) {
            $tracker->updated_at = date('Y-m-d H:i:s');
            $tracker->hits++;
        } );
    }

    // Fill in the IP and today's date
    public function scopeCurrent($query) {

      

        return $query->where('ip', $_SERVER['REMOTE_ADDR'])
                     ->where('ip', '!=', '192.168.1.17')
                     ->where('updated_at', date('Y-m-d H:i:s'))
                     ->where('browser', $_SERVER['HTTP_USER_AGENT'])
                     ->where('location', $ipLite->getCity($_SERVER['REMOTE_ADDR']))
                     ->where('http_referer', $_SERVER['HTTP_REFERER']);
    }

    public static function hit() {

        static::firstOrCreate([
                  'ip'   => $_SERVER['REMOTE_ADDR'],
                  'created_at' => date('Y-m-d'),
                  'browser' => $_SERVER['HTTP_USER_AGENT'],
                  'http_referer' => Request::server('HTTP_REFERER')
              ])->save();
    }

}