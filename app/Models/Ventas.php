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
}
