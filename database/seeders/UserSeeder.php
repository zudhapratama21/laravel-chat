<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
   
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'), // password
            'remember_token' => Str::random(10),
        ]);


        User::create([
            'name' => 'dokter',
            'email' => 'dokter@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('dokter'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}
