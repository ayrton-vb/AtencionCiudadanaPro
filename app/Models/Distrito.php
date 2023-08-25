<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;

    public function distritos(){
        return $this->hasMany(Distrito::class,'id');
    }
    
}
