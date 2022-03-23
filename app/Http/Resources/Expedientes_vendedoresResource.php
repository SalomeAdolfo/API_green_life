<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Expedientes_vendedoresResource extends JsonResource
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
            , 'rfc' => $this->rfc
            , 'curp' => $this->curp
            ,'clave_elector' => $this->clave_elector
        ];
    }
}
