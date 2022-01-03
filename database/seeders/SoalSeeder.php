<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soal')->insert([
            'soal_text' => 'Udara yang kita lepaskan mengandung banyak karbon dioksida. Karbon dioksida adalah hasil bernafas dalam sel-sel tubuh. Kehadiran karbon dioksida dapat ditunjukkan dengan tes menggunakan...',
            'stage_id' => '1'
        ]);
        DB::table('soal')->insert([
            'soal_text' => 'Makhluk hidup dapat beradaptasi dengan lingkungannya, yang berarti mereka mampu...',
            'stage_id' => '1'
        ]);
        DB::table('soal')->insert([
            'soal_text' => 'Pertumbuhan dan perkembangan fungsi alat-alat tubuh sendiri dan otak manusia berlangsung tercepat dalam hidup selama ini...',
            'stage_id' => '1'
        ]);
        DB::table('soal')->insert([
            'soal_text' => 'Hormon androgen dan estrogen mulai aktif selama...',
            'stage_id' => '1'
        ]);
        DB::table('soal')->insert([
            'soal_text' => 'Perubahan karakteristik fisik pria dan wanita muda adalah...',
            'stage_id' => '1'
        ]);
        DB::table('soal')->insert([
            'soal_text' => 'Pernyataan mana yang salah...',
            'stage_id' => '1'
        ]);
        DB::table('soal')->insert([
            'soal_text' => 'Kerusakan fungsi organ-organ tubuh, yang dirasakan terutama oleh manusia pada waktunya...',
            'stage_id' => '1'
        ]);
        DB::table('soal')->insert([
            'soal_text' => 'Karakteristik yang hanya dimiliki makhluk hidup adalah...',
            'stage_id' => '1'
        ]);
        DB::table('soal')->insert([
            'soal_text' => 'Mampu mengiritasi berarti...',
            'stage_id' => '1'
        ]);
        DB::table('soal')->insert([
            'soal_text' => 'Makanan organisme klorofil berbeda dari makanan organisme non-klorofil karena organisme klorofil...',
            'stage_id' => '1'
        ]);
    }
}
