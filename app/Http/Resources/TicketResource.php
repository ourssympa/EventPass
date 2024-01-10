<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
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
            'libelle'=>$this->libelle,
            'image'=>$this->image,
            'type'=>$this->type,
            'quantite'=>$this->quantite
        ];
    }
}
