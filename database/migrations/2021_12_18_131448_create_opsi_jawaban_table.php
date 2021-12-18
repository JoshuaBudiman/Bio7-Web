<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpsiJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opsi_jawaban', function (Blueprint $table) {
            $table->id('opsiJawaban_id');
            $table->string('opsi_jawaban');
            $table->boolean('opsi_istrue');
            $table->unsignedBigInteger('soal_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opsi_jawaban');
    }
}
