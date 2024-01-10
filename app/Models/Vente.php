<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vente extends Model
{
    use HasFactory;

    protected $fillable =[
        'idutilisateur',
        'idevenement',
        'idticket',
        'quantite'
    ];

    /**
     * Get the user that owns the Vente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function utilisateur(): BelongsTo
    {
        return $this->belongsTo(Utilisateur::class, 'idutilisateur', 'id');
    }

    public function evenement(): BelongsTo
    {
        return $this->belongsTo(Evenement::class, 'idevenement', 'id');
    }

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'idticket', 'id');
    }
}
