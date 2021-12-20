<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_students', function (Blueprint $table) {
            $table->id('material_students_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('material_id');
            $table->timestamps();
        });

        Schema::table('material_students', function (Blueprint $table) {
            $table->foreign('student_id')
                ->references('student_id')->on('students')
                ->onDelete('cascade')
                ->onUpdate('cascade');

                $table->foreign('material_id')
                ->references('material_id')->on('material')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_students');
    }
}
