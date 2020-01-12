<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class freeSeminarModel extends Model
{
   protected $table = 'free_course_student';
   protected $fillable=['status'];
}
