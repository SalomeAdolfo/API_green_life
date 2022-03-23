<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expedientes_vendedores extends Model
{
    protected $table = 'expedientes_vendedores';
    public $timestamps = false;

    protected $fillable = [
        'rfc'
        ,'curp'
        ,'clave_elector'
    ];
}
