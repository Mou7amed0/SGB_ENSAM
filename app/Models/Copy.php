<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    protected $table='copies';
    use HasFactory;
    public function book(){
        return  $this->belongsTo(Book::class);
    }
    public function reservation (){
        return $this->hasMany('App\Reservation','copy_id');
    }
}
