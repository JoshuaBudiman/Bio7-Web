<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationStageBab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stage', function (Blueprint $table) {
                $table->foreign('bab_id')
                ->references('bab_id')->on('bab')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stage', function (Blueprint $table) {
            //
        });
    }
}
