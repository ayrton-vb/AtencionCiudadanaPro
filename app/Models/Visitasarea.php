<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitasarea extends Model
{
    use HasFactory;

    public function areas(){
        return $this->belongsTo(Area::class,'id_area');
    }

}
