<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactJiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_jies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',32);
            $table->string('sex',2);
            $table->string('phone',16);
            $table->string('mail',255);
            $table->string('title',32);
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_jies');
    }
}
