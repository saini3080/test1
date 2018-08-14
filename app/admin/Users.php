<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    const SUPER_USER = 1;
    const USER_AGENT = 2;
    const USER_BUYER = 3;
    const USER_DEFAULT = 3;
    const USER_DISABLED = 0;

    protected $fillable = ['name', 'email', 'password', 'role'];
}
