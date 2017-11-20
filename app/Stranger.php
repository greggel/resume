<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stranger extends Model
{
    protected $table = 'stranger';
    protected $fillable = ['ip', 'updated_at', 'created_at', 'browser', 'http_referer', 'location', 'lat', 'lng', 'city', 'regionName', 'browser', 'hits'];
}
