<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
        'id' => $this->id,
        'nombre' => $this -> nombre,
        'primer_apellido' => $this -> primer_apellido,
        'segundo_apellido' => $this -> segundo_apellido,
        'sexo' => $this -> sexo,
        'email' => $this -> email,
        'perfil' => $this -> perfil,
        'password'  => $this -> password,
        'estatus'  => $this -> estatus
        ];
    }
}
