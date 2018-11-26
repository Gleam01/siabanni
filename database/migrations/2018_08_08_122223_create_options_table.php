<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->string('description');
            $table->unsignedInteger('training_id');
            $table->timestamps();

            $table->foreign('training_id')
              ->references('id')->on('trainings')
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
      Schema::table('options', function(Blueprint $table) {
        $table->dropForeign(['training_id']);
      });
      Schema::dropIfExists('options');
    }
}
