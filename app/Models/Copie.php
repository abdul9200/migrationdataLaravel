<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copie extends Model
{
    use HasFactory;
    protected $fillable = ['state'];
    public function book(){
        return $this->belongsTo(Book::class,'book_id');
       }
    public function reservations(){
        return $this->hasMany('App\Reservation','copy_id');
    }
}
