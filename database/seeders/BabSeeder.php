<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bab')->insert([
            'bab' => 'Bab 1'
        ]);
        DB::table('bab')->insert([
            'bab' => 'Bab 2'
        ]);
    }
}
