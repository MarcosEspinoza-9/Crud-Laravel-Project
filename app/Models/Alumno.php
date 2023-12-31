<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    public function nivel(){
        return $this ->BelongsTo(Nivel::class, 'nivels_id','id');//relacionando el modelo con la tabla 
    } 
}
