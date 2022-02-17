<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $Nit_Empresa
 * @property $Nombre
 * @property $Apellido
 * @property $Empresa
 * @property $Categoria
 * @property $Dirreccion
 * @property $Telefono
 * @property $Correo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
		'Nit_Empresa' => 'required|unique:proveedores,Nit_Empresa',
		'Nombre' => 'required',
		'Apellido' => 'required',
		'Empresa' => 'required',
		'Categoria' => 'required',
		'Dirreccion' => 'required',
		'Telefono' => 'required',
		'Correo' => 'required|unique:proveedores,Correo',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nit_Empresa','Nombre','Apellido','Empresa','Categoria','Dirreccion','Telefono','Correo'];



}
