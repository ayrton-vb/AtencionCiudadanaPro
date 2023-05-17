<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitasservicios extends Model
{
    use HasFactory;

    public function servicios(){
        return $this->belongsTo(Servicio::class,'id_servicio');
    }
}
