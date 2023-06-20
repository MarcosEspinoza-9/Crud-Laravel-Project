<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    //use HasFactory;
    //tipo protegido donde se le asigna la tabla al modelo, para que asi estos tengan una relacion
    protected $table='nivels';
}
