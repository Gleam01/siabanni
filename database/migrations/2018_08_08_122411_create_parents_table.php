<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('profession');
            $table->string('phone');
            $table->unsignedInteger('student_id');
            $table->timestamps();

            $table->foreign('student_id')
              ->references('id')->on('students')
              ->onDelete('restrict')
              ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('parents', function(Blueprint $table){
        $table->dropForeign(['student_id']);
      });
      Schema::dropIfExists('parents');
    }
}
