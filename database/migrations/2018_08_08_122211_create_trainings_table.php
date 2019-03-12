<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->string('description');
            $table->double('fees');
            $table->double('admissionFees');
            $table->string('avatar');
            $table->unsignedInteger('school_id');
            $table->timestamps();

            $table->foreign('school_id')->references('id')->on('schools')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('trainings', function(Blueprint $table) {
        $table->dropForeign('trainings_school_id_foreign');
      });
      Schema::dropIfExists('trainings');
    }
}
