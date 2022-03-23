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
}
