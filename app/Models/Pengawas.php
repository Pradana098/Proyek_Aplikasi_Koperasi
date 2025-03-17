<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengawas extends Model
{
    use HasFactory;

    protected $table = 'pengawas'; // Sesuai dengan tabel di database

    protected $fillable = ['nama', 'email', 'password'];
}
