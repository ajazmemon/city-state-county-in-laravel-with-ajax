<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reg extends Model
{
    protected $fillable = [
        'name','email','gender','hobby','city_id','password','date'
    ];
}
