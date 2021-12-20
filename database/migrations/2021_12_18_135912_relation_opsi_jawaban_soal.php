<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationOpsiJawabanSoal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('opsi_jawaban', function (Blueprint $table) {
                $table->foreign('soal_id')
                ->references('soal_id')->on('soal')
                ->onDelete('cascade');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('opsi_jawaban', function (Blueprint $table) {
            //
        });
    }
}
