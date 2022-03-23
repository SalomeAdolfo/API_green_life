<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Detalles_ventaResource extends JsonResource
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
            'venta_id' => $this->venta_id
            , 'producto_id' => $this->producto_id
            , 'cantidad' => $this->cantidad
            ,'total' => $this->total
        ];
    }
}
