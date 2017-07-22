<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class emailsDB extends Model
{
    protected $table = 'emails';
    protected $fillable = ['id','email','created_at','updated_at'];
}

