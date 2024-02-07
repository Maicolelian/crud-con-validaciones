<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id
 * @property $mascota
 * @property $alergias
 * @property $edad
 * @property $propietario
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    static $rules = [
		'mascota' => 'required',
		'alergias' => 'required',
		'edad' => 'required',
		'propietario' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['mascota','fecha_de_nacimiento','genero','alergias','edad','propietario','telefono','correo'];



}
