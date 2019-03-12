<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->date('expirityDate');
            $table->integer('validity');
            $table->boolean('delivery');
            $table->timestamps();
            $table->unsignedInteger('student_id');

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
        Schema::table('student_cards', function(Blueprint $table){
          $table->dropForeign(['student_id']);
        });
        Schema::dropIfExists('student_cards');
    }
}
