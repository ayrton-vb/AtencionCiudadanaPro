<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitastramites extends Model
{
    use HasFactory;

    public function tramites(){
        return $this->belongsTo(Tramite::class,'id_tramite');
    }

}
