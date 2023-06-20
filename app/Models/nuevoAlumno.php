<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NuevoAlumno
 *
 * @property $id
 * @property $matricula
 * @property $nombre
 * @property $fechaNacimiento
 * @property $telefono
 * @property $correoElectronico
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class NuevoAlumno extends Model
{
    
    static $rules = [
		'matricula' => 'required',
		'nombre' => 'required',
		'fechaNacimiento' => 'required',
		'telefono' => 'required',
		'correoElectronico' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['matricula','nombre','fechaNacimiento','telefono','correoElectronico'];



}
