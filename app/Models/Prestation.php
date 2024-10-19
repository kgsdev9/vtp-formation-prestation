<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'prix',
        'is_published',
        'prestaire_id',
        'duree_estimee'
    ];

}
