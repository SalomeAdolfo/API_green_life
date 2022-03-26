<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Datos_bancariosResource extends JsonResource
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
            'id' => $this->id
            , 'fecha_expiracion' => $this->fecha_expiracion
            , 'ccv' => $this->ccv
            , 'banco' => $this->banco
            ,'numero' => $this->numero
            ,'usuario_id' => $this->usuario_id
        ];
    }
}
