<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_name',200);
            $table->string('course_title',200);
            $table->double('course_fee');
            $table->string('total_class',200);
            $table->string('class_duration',100);
            $table->longText('course_description');
            $table->longText('career_suport');
            $table->string('course_module',200);
            $table->string('software_module',200);
            $table->string('course_banner',150);
            $table->string('course_image',150);
            $table->string('course_icon',150);
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
        Schema::dropIfExists('course');
    }
}
