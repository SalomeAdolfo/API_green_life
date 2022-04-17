<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table = 'ventas';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'Producto',
        'cantidad',
        'Precio',
        'total'
    ];
    public static function reglasValidacion(){
        return[
        'Producto' => 'required',
        'cantidad' => 'required',
        'Precio' => 'required',
        'total' => 'required',
        ];
    }
    public static function etiquetas(){
        return[
        'Producto' => 'Producto',
        'cantidad' => 'Cantidad',
        'Precio' => 'Precio',
        'total' => 'Total'
        ];
    } 
}
