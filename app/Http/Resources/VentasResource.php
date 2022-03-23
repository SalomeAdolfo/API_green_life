<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VentasResource extends JsonResource
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
            'vendedor_id' => $this->vendedor_id, 
            'categoria_id' => $this->categoria_id, 
            'total' => $this->total, 
            'fecha' => $this->fecha
        ];
    }
}
