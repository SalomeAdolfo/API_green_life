<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos_bancarios extends Model
{
    protected $table = 'datos_bancarios';
    public $timestamps = false;

    protected $fillable = [
        'fecha_expiracion'
        , 'ccv'
        , 'banco'
        ,'usuario_id'
    ];
}
