<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestataire extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_prestataire',
        'prenom_prestataire',
        'adresse',
        'ville',
        'typepresatation_id',
        'pays',
        'telephone',
        'email',
        'site_web',
        'description',
        'photo',
        'identifiant',
        'active_at'
    ];

    public function typeprestation() {
        return $this->belongsTo(TypePrestation::class, 'typepresatation_id');
    }

    public function notePrestations() {
        return $this->hasMany(NotePrestataire::class);
    }

    public function getAverageRatingAttribute()
    {
        // Calculer la moyenne des notes. Si aucune note n'est trouvée, retourner 0
        return $this->notePrestations()->avg('note') ?? 0;
    }


    

}
