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
    public static function reglasValidacion(){
        return[
        'rfc' => 'required'
        ,'curp' => 'required'
        ,'clave_elector' => 'required'
        ];
    }
    public static function etiquetas(){
        return[
            'rfc' => 'rfc'
            ,'curp' => 'curp'
            ,'clave_elector' => 'clave_elector'
        ];
    }
}
