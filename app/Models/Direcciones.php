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
    public static function reglasValidacion(){
        return[
            'municipio_id' => 'required'
        , 'usuario_id' => 'required'
        , 'localidad' => 'required'
        , 'calle' => 'required'
        , 'numero_interior' => 'required'
        , 'numero_exterior' => 'required'
        , 'codigo_postal' => 'required'
        , 'referencias' => 'required'
        ];
    }
    public function etiquetas(){
        return[
            'municipio_id' => 'municipio_id'
        , 'usuario_id' => 'usuario_id'
        , 'localidad' => 'localidad'
        , 'calle' => 'calle'
        , 'numero_interior' => 'numero_interior'
        , 'numero_exterior' => 'numero_exterior'
        , 'codigo_postal' => 'codigo_postal' 
        , 'referencias'  => 'referencias'
        ];
    }
}
