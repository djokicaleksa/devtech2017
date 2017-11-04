<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Barcode extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'barcode_id' => $this->id,
            'barcode' => $this->barcode,
            'material' => [
                'id' => $this->material->id,
                'name' => $this->material->name,
                'price' => $this->material->price * ($this->weight/1000),
                ],
            'name' => $this->name,
            'manufacturer' => $this->manufacturer,
            'weight' => $this->weight,
            'country' => $this->country,               
        ];
    }
}
