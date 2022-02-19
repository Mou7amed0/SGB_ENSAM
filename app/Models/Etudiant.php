<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;



    public function reservations(){

        return $this->hasMany(Reservation::class,'user_id');
    }
    public function suggestion(){
        return $this->hasMany(Suggestion::class,'user_id');
    }
}
