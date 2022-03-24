<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table = 'ventas';
    public $timestamps = false;
    protected $fillable = [
        'vendedor_id',
        'categoria_id',
        'total',
        'fecha'
    ];
    public static function reglasValidacion(){
        return[
        'vendedor_id' => 'required',
        'categoria_id' => 'required',
        'total' => 'required',
        'fecha' => 'required',
        ];
    }
    public static function etiquetas(){
        return[
        'vendedor_id' => 'vendedor_id',
        'categoria_id' => 'categoria_id',
        'total' => 'total',
        'fecha' => 'fecha'
        ];
    } 
}
