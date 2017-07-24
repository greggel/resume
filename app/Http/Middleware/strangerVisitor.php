<?php

namespace App\Http\Middleware;

use Eloquent;
use Validator;
use App\User;

class Stranger extends Eloquent
{

    protected $table = 'stranger';

    public $attributes = ['hits' => 0];

    protected $fillable = ['ip', 'updated_at', 'created_at'];

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
                     ->where('updated_at', date('Y-m-d H:i:s'));
    }

    public static function hit() {
        static::firstOrCreate([
                  'ip'   => $_SERVER['REMOTE_ADDR'],
                  'created_at' => date('Y-m-d'),
              ])->save();
    }

}