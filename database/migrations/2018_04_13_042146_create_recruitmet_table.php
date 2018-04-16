<?php
/*創建指令 php artisan make:migration create_recruitmet_table --create=recruitment*/
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitmetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_name',50);
            $table->integer('salary_min'); //薪水
            $table->integer('salary_max'); //薪水
            // $table->string('conditions',100); //工作條件
            $table->string('job_locol',50); //工作地點
            $table->string('job_content',255); //工作內容
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
        Schema::dropIfExists('recruitment');
    }
}
