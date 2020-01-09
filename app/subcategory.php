<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    protected $table = 'subcategories';



    public function Category(){
        return $this->belongsTo('App\category');
    }
}
