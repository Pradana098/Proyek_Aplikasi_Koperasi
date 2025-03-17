<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin Koperasi',
            'email' => 'admin@koperasi.com',
            'password' => Hash::make('password123'),
            'role' => 'pengurus'
        ]);

        User::create([
            'name' => 'Supervisor Koperasi',
            'email' => 'pengawas@koperasi.com',
            'password' => Hash::make('password123'),
            'role' => 'pengawas'
        ]);
    }
}
