<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'categoria_id',
        'producto',
        'costo_unitario',
        'precio_unitario',
        'existencias',
        'descripcion',
        'imagen',
        'estatus'
    ];
    public static function reglasValidacion(){
        return[
        'categoria_id' => 'required',
        'producto' => 'required',
        'costo_unitario' => 'required',
        'precio_unitario' => 'required',
        'existencias' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required',
        'estatus' => 'required|in'.implode(',', self::opcionesEstatus())
        ];
    }
    public static function etiquetas(){
        return[
        'id' => 'id',
        'categoria_id' => 'categoria_id',
        'producto' => 'producto',
        'costo_unitario' => 'costo_unitario',
        'precio_unitario' => 'precio_unitario',
        'existencias' => 'existencias',
        'descripcion' => 'descripcion',
        'imagen' => 'imagen',
        'estatus' => 'estatus'
        ];
    }
    public static function opcionesEstatus(){
        return[
            'activo' => 'activo'
            , 'inactivo' => 'inactivo'
        ];
    }
}
