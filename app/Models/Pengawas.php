<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengawas extends Authenticatable
{
    protected $table = 'pengawas';
    protected $fillable = ['email', 'password'];
    protected $hidden = ['password'];
}
