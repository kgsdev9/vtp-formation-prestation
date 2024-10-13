<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Formateur extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'slug', 'telephone', 'whattsapp', 'description', 'status', 'popular', 'avatar', 'poste', 'anneexperience', 'user_id'];


    public static function generateUniqueSlug($fullname)
    {
        // Créer un slug de base à partir du fullname
        $slug = Str::slug($fullname);
        $originalSlug = $slug;

        // Vérifier si le slug existe déjà dans la table
        $count = 1;
        while (self::where('slug', $slug)->exists()) {
            // Ajouter un suffixe pour générer un nouveau slug unique
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        // Retourner le slug unique
        return $slug;
    }


    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function user()
    {
        return $this->hasMany(User::class, 'user_id');
    }



    public function specialites()
    {
        return $this->belongsToMany(Specialite::class, 'formation_specialite', 'formateur_id', 'specialite_id');
    }


}

