<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'duration', 'course_id','previsualiation', 'url'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

}

