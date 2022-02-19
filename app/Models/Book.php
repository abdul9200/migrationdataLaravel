<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table='book';
    use HasFactory;
    public function category(){
     return $this->belongsTo(Category::class);
    }
    public function copies(){
        return $this->hasMany('App\Copy','book_id');
    }


}
