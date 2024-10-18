<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug', 'category_id', 'level_id', 'user_id', 'image', 'description', 'prix', 'url_video', 'typecours','duration', 'supportcourrs', 'exercicescours'];

    public function level() {
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function formateur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');

    }

    public function getSlug() {
        return Str::slug($this->title);
    }

    public function limiteTest($string) {
        return Str::limit($string, 64);
    }


}
