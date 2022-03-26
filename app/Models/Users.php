<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'sexo',
        'email',
        'perfil',
        'password',
        'estatus'
    ];
    public static function reglasValidacion(){
        return[
        'nombre' => 'required',
        'primer_apellido' => 'required',
        'segundo_apellido' => 'required',
        'sexo' => 'required|in:'. implode(',', self::opcionesSexo()),
        'email' => 'required',
        'perfil' => 'required|in:'.implode(',', self::opcionesPerfil()),
        'password' => 'required',
        'estatus' => 'required|in:'.implode(',',  self::opcionesEstatus()),
        ];
    }
    public static function etiquetas(){
        return[
        'nombre' => 'nombre',
        'primer_apellido' => 'primer_apellido',
        'segundo_apellido' => 'segundo_apellido',
        'sexo' => 'sexo',
        'email' => 'email',
        'perfil' => 'perfil',
        'password' => 'password',
        'estatus' => 'estatus'
        ];
    }
    public static function opcionesSexo(){
        return[
            'femenino' => 'femenino',
            'masculino' => 'masculino',
            'prefiero no decirlo' => 'prefiero no decirlo'
        ];
    }
    public static function opcionesPerfil(){
        return[
            'administrador' => 'administrador',
            'comprador' => 'comprador',
            'vendedor' => 'vendedor',
            'socio' => 'socio'
        ];
    }
    public static function opcionesEstatus(){
        return[
            'activo' => 'activo',
            'inactivo' => 'inactivo'
        ];
    }
}
