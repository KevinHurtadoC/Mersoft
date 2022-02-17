<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $Código
 * @property $Nombre
 * @property $Categoría
 * @property $Stock
 * @property $Precio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'Código' => 'required',
		'Nombre' => 'required',
		'Categoría' => 'required',
		'Stock' => 'required',
		'Precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Código','Nombre','Categoría','Stock','Precio'];



}
