<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

public function user(){//praticamente laravel genera del codice sql facendo un inner join
    //definizione della relazione tra le due tabelle
    return $this->belongsTo(User::class);//(User::class,'user_id),laravel fa in automatico la ricerca dello user_id
    //se lo chiamo user_id laravel fa in automatico
    //se voglio chiamarlo con un altro nome devo esplicitarlo
}
    public function hotel() {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

}
