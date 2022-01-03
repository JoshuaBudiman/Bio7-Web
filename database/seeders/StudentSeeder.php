<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'email' => 'jokoanwar@gmail.com',
            'password' => Hash::make('murid1'),
            'username' => 'jokoanwar',
            'name' => 'Joko Anwar',
            'school' => 'SMAN 1 Surabaya',
            'city' => 'Surabaya',
            'birthyear' => '25 Agustus 1999'
        ]);
        DB::table('students')->insert([
            'email' => 'mawarindah@gmail.com',
            'password' => Hash::make('murid2'),
            'username' => 'mawarindah',
            'name' => 'Mawar Indah',
            'school' => 'SMAN 5 Surabaya',
            'city' => 'Surabaya',
            'birthyear' => '31 Desember 2001'
        ]);
    }
}
