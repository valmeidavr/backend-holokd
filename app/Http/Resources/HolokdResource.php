<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HolokdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'language' => $this->language, //Chave Estrangeira
            'user_id' => $this->user_id,   //Chave Estrangeira
            'name' => $this->name,
            'description' => $this->description,
            'type_card' => $this->type_card,
            'category' => $this->category,
            'urlImage' => $this->urlImage,
            'urlAnimation' => $this->urlAnimation,
            'coins' => $this->coins,
            'xp' => $this->xp,
            'nivel' => $this->nivel,
            'strengh' => $this->strengh,
            'speed' => $this->speed,
            'energy' => $this->energy
        ];
    }
}
