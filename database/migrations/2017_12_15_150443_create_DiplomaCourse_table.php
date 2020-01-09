<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiplomaCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diploam_student', function (Blueprint $table) {
            $table->increments('id');
             $table->string('student_name',150);
            $table->string('father',150);
            $table->string('email',150);
            $table->string('mobile',50);
            $table->string('date_of_birth',50);
            $table->string('nationality',150);
            $table->string('religion',100);
            $table->string('blood_group',50);
            $table->longText('present_address');
            $table->longText('pramanent_address');
            $table->string('gender',150);
            $table->string('marital',100);
            $table->string('image',200);
            $table->string('institute_name',250);
            $table->string('department',200);
            $table->string('year',50);
            $table->string('session_time',150);      
            $table->string('course_name',150);
            $table->string('class_days',250);
            $table->string('class_time',150);
            $table->string('know_us',150);
            $table->string('serialize_number');
            $table->string('active');
            $table->string('disable');
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
        Schema::dropIfExists('diploam_student');
    }
}
