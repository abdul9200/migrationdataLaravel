<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    public function reservations(){
        return $this->hasMany('App\Reservation','etudiant_id');
    }

}
