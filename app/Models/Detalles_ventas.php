<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles_ventas extends Model
{
    protected $table = 'detalles_venta';
    public $timestamps = false;

    protected $fillable =[
        'venta_id'
        , 'producto_id'
        , 'cantidad'
         ,'total'
    ];
    public static function reglasValidacion(){
        return[
        'venta_id' => 'required'
        , 'producto_id' => 'required'
        , 'cantidad' => 'required'
         ,'total' => 'required'
        ];
    }
    public static function etiquetas(){
        return[
        'venta_id'=> 'venta_id'
        , 'producto_id'=> 'producto_id'
        , 'cantidad'=> 'cantidad'
         ,'total'=> 'total'
        ];
    }
}
