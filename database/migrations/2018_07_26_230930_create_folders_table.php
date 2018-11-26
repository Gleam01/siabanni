<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('birthCertificate');
            $table->string('nationalityCertificate');
            $table->string('attestation');
            $table->string('bulletin');
            $table->string('NICReference');
            $table->string('picture');
            $table->unsignedInteger('validateByStaffLevelTwo')->default(0);
            $table->unsignedInteger('validateByStaffLevelThree')->default(0);
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
      Schema::table('folders', function(Blueprint $table){
        $table->dropForeign(['student_id']);
      });
      Schema::dropIfExists('folders');
    }
}
