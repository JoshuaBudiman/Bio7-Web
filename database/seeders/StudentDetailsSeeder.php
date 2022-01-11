<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudentDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_details')->insert([
            'email' => 'jhon@gmail.com',
            'username' => 'jft',
            'school' => 'SMA 1',
            'city' => 'Surabyaa',
            'birthyear' => '2001',
            'student_id' => '1'
        ]);

        DB::table('student_details')->insert([
            'email' => 'ivan@gmail.com',
            'username' => 'Ivanvc',
            'school' => 'SMA 1',
            'city' => 'Ambon',
            'birthyear' => '2001',
            'student_id' => '2'
        ]);
         //
    }
}
