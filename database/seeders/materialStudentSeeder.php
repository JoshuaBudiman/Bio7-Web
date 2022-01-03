<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class materialStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('material_students')->insert([
            'student_id' => '1',
            'material_id' => '2',
        ]);
        DB::table('material_students')->insert([
            'student_id' => '2',
            'material_id' => '1',
        ]);
    }
}
