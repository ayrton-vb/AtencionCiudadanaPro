<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descarga extends Model
{
    use HasFactory;

    public function tramites(){
        return $this->belongsTo(Tramite::class,'id_tramite');
    }

    public function servicios(){
        return $this->belongsTo(Servicio::class,'id_servicio');
    }
    
}
