<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stage')->insert([
            'stage' => 'Level 1',
            'bab_id' => '1'
        ]);
        DB::table('stage')->insert([
            'stage' => 'Level 2',
            'bab_id' => '1'
        ]);
        DB::table('stage')->insert([
            'stage' => 'Level 1',
            'bab_id' => '2'
        ]);
        DB::table('stage')->insert([
            'stage' => 'Level 2',
            'bab_id' => '2'
        ]);
    }
}
