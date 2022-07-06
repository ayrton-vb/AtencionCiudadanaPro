<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    use HasFactory;

    public function tramites(){
        return $this->belongsTo(Tramite::class,'id_tramite');
    }

    public function tipoPersonas(){
        return $this->belongsTo(TipoPersona::class,'id_tipoPersona');
    }
}
