<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        // return [

        //     'id' => $this->id,
        //     'price' => $this->price,
        //     'created_at' => $this->created_at,
        //     'updates_at' => $this->updates_at,
        // ];
    }
}
