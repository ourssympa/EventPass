<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VenteResource extends JsonResource
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
            'utilisateur'=>$this->utilisateur,
            'evenement'=>$this->evenement,
            'ticket'=>$this->ticket,
            'quantite'=>$this->quantite
        ];
    }
}
