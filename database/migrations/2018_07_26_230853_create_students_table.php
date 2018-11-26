<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->date('birthday');
            $table->string('placeOfBirth');
            $table->string('phone', 15);
            $table->string('sex', 10);
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('status',30)->nullable();
            $table->double('reduction')->default(0.0);
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')->on('users')
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
      Schema::table('students', function(Blueprint $table){
        $table->dropForeign(['user_id']);
      });
      Schema::dropIfExists('students');
    }
}
