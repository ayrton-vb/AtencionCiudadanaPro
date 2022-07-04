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
}
