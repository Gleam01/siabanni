<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_training', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('training_id');
            $table->dateTime('dateOfRegistration')->nullable();
            $table->unsignedInteger('semester')->nullable();
            $table->string('cycle');
            $table->boolean('admissionFeesPayement')->default(false);
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('training_id')->references('id')->on('trainings')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('student_training', function(Blueprint $table) {
        $table->dropForeign(['student_id', 'training_id']);
      });
      Schema::dropIfExists('student_training');
    }
}
