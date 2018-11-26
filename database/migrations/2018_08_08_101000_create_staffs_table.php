<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
          $table->increments('id');
          $table->string('lastName');
          $table->string('firstName');
          $table->string('phone');
          $table->string('office');
          $table->unsignedInteger('school_id');
          $table->unsignedInteger('user_id');
          $table->timestamps();

          $table->foreign('school_id')
            ->references('id')->on('schools')
            ->onDelete('restrict')
            ->onUpdate('restrict');

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
      Schema::table('staffs', function(Blueprint $table){
        $table->dropForeign(['school_id', 'user_id']);
      });
      Schema::dropIfExists('staffs');
    }
}
