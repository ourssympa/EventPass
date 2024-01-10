<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EvenementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'nom'=>$this->nom,
            'agelimite'=>$this->agelimite,
            'lieu'=>$this->lieu,
            'date'=>$this->date,
            'categorie'=>new CategorieResource($this->categorie)
        ];
    }
}
