<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'agelimite',
        'lieu',
        'date',
        "path",
        "description",
        'categorieid'
    ];


    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'categorieid', 'id');
    }

    public function tickets():HasMany
    {
        return $this->hasMany(Ticket::class);
    }

}
