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
		'documento' => 'required|unique:clientes|min:7|max:15',
		'nombre' => 'required|min:4|max:15',
		'apellido' => 'required|min:4|max:15',
		'direccion' => 'required|min:7|max:25',
		'telefono' => 'required|min:5|max:15',
		'Correo' => 'required|unique:clientes,Correo|min:8|max:15'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['documento','nombre','apellido','direccion','telefono','Correo'];



}
