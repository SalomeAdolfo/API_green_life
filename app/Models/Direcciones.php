<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direcciones extends Model
{
    protected $table = 'direcciones';
    public $timestamps = false;

    protected $fillable = [
        'municipio_id'
        , 'usuario_id'
        , 'localidad'
        , 'calle'
        , 'numero_interior'
        , 'numero_exterior'
        , 'codigo_postal'
        , 'referencias'
    ];
}
