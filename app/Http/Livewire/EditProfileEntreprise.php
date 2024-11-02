<?php

namespace App\Http\Livewire;

use App\Models\Entreprise;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditProfileEntreprise extends Component
{
    public $nom_entreprise;
    public $successMessage;
    public $siren;
    public $numero_tva;
    public $type_entreprise;
    public $adresse;
    public $ville;
    public $code_postal;
    public $pays;
    public $telephone;
    public $email;
    public $site_web;
    public $description;
    public $nombre_employes;
    public $chiffre_affaires;

    public function mount()
    {
        $iduser = Auth::user()->id;
        $entreprise = Entreprise::where('user_id', $iduser)->first();

        if ($entreprise) {
            $this->fill($entreprise->toArray());
        }
    }

    public function updateProfile()
    {
        $iduser = Auth::user()->id;
        $entreprise = Entreprise::where('user_id', $iduser)->first();
        $user = Auth::user();

        // Validation des données de l'entreprise
        $validatedData = $this->validate([
            'nom_entreprise' => 'required|string|max:255',
            'siren' => 'required|string|max:255',
            'numero_tva' => 'nullable|string|max:255',
            'type_entreprise' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'code_postal' => 'required|string|max:10',
            'pays' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'site_web' => 'nullable|url|max:255',
            'description' => 'nullable|string|max:500',
            'nombre_employes' => 'nullable|integer',
            'chiffre_affaires' => 'nullable|numeric',
        ]);

    
        if ($entreprise) {
            $entreprise->update($validatedData);
        }


        $user->update([
            'name' => $this->nom_entreprise,
            'email' => $this->email
        ]);

        $this->successMessage = "Les informations de l'entreprise ont été mises à jour avec succès.";
    }


    public function render()
    {
        return view('livewire.edit-profile-entreprise')->extends('layout.layout');
    }
}
