<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'calories' => $this->calories,
            'squirrels' => $this->squirrels,
            'fats' => $this->fats,
            'carbohydrates' => $this->carbohydrates,
            'portion' => $this->portion,
            'meal' => json_decode($this->meal)
        ];
    }
}
