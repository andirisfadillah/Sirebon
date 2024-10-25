<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name' => 'Admin Aplikasi',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('qwerty'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Karyawan',
            'level' => 'karyawan',
            'email' => 'karyawan@gmail.com',
            'password' => bcrypt('qwerty'),
            'remember_token' => Str::random(60),
        ]);
    }
}