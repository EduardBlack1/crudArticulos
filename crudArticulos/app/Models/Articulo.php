<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Articulo
 *
 * @property $id
 * @property $nombre
 * @property $precio
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Articulo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'precio' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','precio','cantidad'];



}
