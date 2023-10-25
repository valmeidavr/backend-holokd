<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'urlPerfil' => $this->urlPerfil,
            'urlImagem' => $this->urlImagem,
            'phone' => $this->phone,
            'sex' => $this->sex,
            'brithday' => $this->brithday,
            'document' => $this->document,
            'urlSite' => $this->urlSite,
            'description' => $this->description,
            'coins' => $this->coins,
            'xp' => $this->xp,
            'role' => $this->role
        ];
    }
}
