<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'marca'=>$this->marca,
            'modelo'=>$this->modelo,
            'year'=>$this->year,
            'combustible'=>$this->combustible,
            'img'=>$this->img,
            'categoria'=>$this->categoria,
            'asientos'=>$this->when($request->routeIs('car.show','car.update'),$this->asientos),
            'description'=>$this->when($request->routeIs('car.show','car.update'),$this->description),
            'price'=>$this->when($request->routeIs('car.show','car.update'),$this->price)
        ];
    }
}
