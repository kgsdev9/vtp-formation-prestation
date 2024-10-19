<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfomancePrestataire extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelleperfomance',
        'prestataire_id'
    ];
}
