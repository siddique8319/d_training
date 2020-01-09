<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';

    public function subCategories(){
        return $this->hasMany('App\category');
    }

}
