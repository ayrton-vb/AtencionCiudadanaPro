<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recorrido extends Model
{
    use HasFactory;

    public function direccions(){
        return $this->belongsTo(Distrito::class,'id_distrito');
    }

}
