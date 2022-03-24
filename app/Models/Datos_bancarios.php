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
        ,'numero'
        , 'ccv'
        , 'banco'
        ,'usuario_id'
    ];
    public static function reglasValidacion(){
        return[
        'fecha_expiracion' => 'required|date'
        ,'numero' => 'required'
        , 'ccv' => 'required'
        , 'banco' => 'required'
        ,'usuario_id' => 'required'
    ];
    }

    public static function etiquetas(){
        return[
            'fecha_expiracion'=> 'fecha_expiracion'
            ,'numero' => 'numero'
            ,'ccv'=> 'ccv'
            ,'banco'=> 'banco'
            ,'usuario_id'=> 'usuario_id'
        ];
    }

}
