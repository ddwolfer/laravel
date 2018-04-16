<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jobconditions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recruitmentID');
            $table->string('education',50);
            $table->string('work_experience',100);
            $table->string('subject',50);
            $table->string('Expertise',50);
            $table->string('Note',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Jobconditions');
    }
}
