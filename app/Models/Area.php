<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    public function direccions(){
        return $this->belongsTo(Direccion::class,'id_direccion');
    }
    public function categorias(){
        return $this->hasMany(Categoria::class,'id');
    }

    public function visitasareas(){
        return $this->hasMany(Visitasarea::class,'id');
    }

}
