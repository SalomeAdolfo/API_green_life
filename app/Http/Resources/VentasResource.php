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
            'Producto' => $this->Producto, 
            'cantidad' => $this->cantidad, 
            'Precio' => $this->Precio, 
            'total' => $this->total
        ];
    }
}
