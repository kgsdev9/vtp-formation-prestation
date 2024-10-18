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
        'type_prestation',
        'adresse',
        'ville',
        'pays',
        'telephone',
        'email',
        'site_web',
        'description',
        'photo',
        'identifiant',
        'active_at'
    ];

}
