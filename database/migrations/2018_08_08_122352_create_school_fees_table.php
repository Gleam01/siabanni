<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_fees', function (Blueprint $table) {
            $table->increments('id');
            $table->double('pay');
            $table->double('letToPay');
            $table->string('type');
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
      Schema::table('school_fees', function(Blueprint $table){
        $table->dropForeign(['student_id']);
      });
      Schema::dropIfExists('school_fees');
    }
}
