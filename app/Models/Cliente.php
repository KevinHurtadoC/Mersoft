<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $documento
 * @property $nombre
 * @property $apellido
 * @property $direccion
 * @property $telefono
 * @property $Correo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{

    static $rules = [
		'documento' => 'required|unique:clientes,documento',
		'nombre' => 'required',
		'apellido' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'Correo' => 'required|unique:clientes,Correo',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['documento','nombre','apellido','direccion','telefono','Correo'];



}
