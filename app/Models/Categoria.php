<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public function areas(){
        return $this->belongsTo(Area::class,'id_area');
    }

    public function tramites(){
        return $this->hasMany(Tramite::class,'id');
    }
}
