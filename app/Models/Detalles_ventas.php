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
}
