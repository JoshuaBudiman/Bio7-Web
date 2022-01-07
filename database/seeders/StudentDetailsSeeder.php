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
            'student_profpic' => 'jacob',
            'student_id' => '1'
        ]);

        DB::table('student_details')->insert([
            'student_profpic' => 'jacob',
            'student_id' => '2'
        ]);
        //
    }
}
