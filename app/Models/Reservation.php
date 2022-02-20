<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['state'];
    public function copie(){
        return $this->belongsTo(Copie::class,'copy_id');
       }
       public function etudiant(){
        return $this->belongsTo(Etudiant::class,'etudiant_id');
       }
}
