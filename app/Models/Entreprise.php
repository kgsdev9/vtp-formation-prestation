<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_entreprise',
        'siren',
        'numero_tva',
        'type_entreprise',
        'adresse',
        'ville',
        'code_postal',
        'pays',
        'telephone',
        'email',
        'site_web',
        'description',
        'logo',
        'nombre_employes',
        'chiffre_affaires',
        'user_id'
    ];

}
