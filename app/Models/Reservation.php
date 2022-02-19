<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;


    protected $fillable = ['state'];

    public function etudiants(){

        return $this->belongsTo(Etudiant::class);
    }
    public function copy(){

        return $this->belongsTo(Copy::class);
    }
}
