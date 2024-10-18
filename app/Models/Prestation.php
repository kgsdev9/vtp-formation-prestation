<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
<<<<<<< HEAD
        'prix',
        'time',
        'heure',
        'prestataire_id'
        
    ];
=======
        'slug',
        'prix',
        'categorieprestation_id',
        'duree_estimee',
        'is_published',
        'date_debut',
        'date_fin',
    ];


>>>>>>> d25ccf5288023a36f47015f17aaecc0b044ef042
}
