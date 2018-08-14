<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InviteUser extends Model
{
    protected $table = 'invite_users';
    protected $fillable = [
        'name','email','token'
    ];
}
