<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    /* 
        Fillable autoriza a los campos de la base de datos para que sean rellenables.
    */
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'age',
    ];
    /*
        Relacion(uno a muchos) con el modelo User 
    */
    public function user (){
        return $this->belongsTo(User::class);
    }
}
