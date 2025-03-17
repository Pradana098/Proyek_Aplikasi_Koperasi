<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengawas;

class PengawasSeeder extends Seeder
{
    public function run()
    {
        Pengawas::create([
            'nama' => 'Admin Koperasi',
            'email' => 'admin123@gmail.com',
            'password' => Hash::make('admin123'), // Password harus di-hash!
        ]);
    }
}

