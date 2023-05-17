<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    use HasFactory;

    public function categorias(){
        return $this->belongsTo(Categoria::class,'id_categoria');
    }

    public function requisitos(){
        return $this->hasMany(Requisito::class,'id');
    }

    public function descargables(){
        return $this->hasMany(Descarga::class,'id');
    }

    public function visitasareas(){
        return $this->hasMany(Visitasarea::class,'id');
    }


}
