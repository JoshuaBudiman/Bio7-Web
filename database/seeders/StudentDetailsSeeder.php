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
            'student_profpic' => 'https://cdn.idntimes.com/content-images/community/2020/06/jason-statham-f1a84de2de498740205a83dc81c9a636_600x400.jpg',
            'student_id' => '1'
        ]);

        DB::table('student_details')->insert([
            'student_profpic' => 'https://cdn.idntimes.com/content-images/community/2020/06/jason-statham-f1a84de2de498740205a83dc81c9a636_600x400.jpg',
            'student_id' => '2'
        ]);
        //
    }
}
