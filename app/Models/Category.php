<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';
    use HasFactory;
    public function books(){
        return $this->hasMany('App\Book','category_id');
    }

}
