<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jon',
            'school' => 'SMA 1',
            'city' => 'Surabyaa',
            'birthyear' => '2001',
            'username' => 'jft',
            'email' => 'jhon@gmail.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password' => Hash::make('user123'),
            'is_login' => '0',
            'is_active' => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Ivan',
            'school' => 'SMA 1',
            'city' => 'Ambon',
            'birthyear' => '2001',
            'username' => 'Ivanvc',
            'email' => 'ivan@gmail.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password' => Hash::make('ivanvincent'),
            'is_login' => '0',
            'is_active' => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
