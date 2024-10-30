<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Prestataire;
use Livewire\WithFileUploads;
use App\Models\TypePrestation;
use Illuminate\Support\Facades\Auth;

class EditionProfilePrestataire extends Component
{
    use WithFileUploads;

    public $nom_prestataire, $prenom_prestataire, $adresse, $ville, $typepresatation_id;
    public $pays, $telephone, $email, $site_web, $description, $photo, $identifiant;
    public $active_at, $user_id;

    public function mount()
    {
        // Récupération du prestataire de l'utilisateur connecté
        $iduser = Auth::user()->id;
        $prestataire = Prestataire::where('user_id', $iduser)->first();

        // Vérifier si le prestataire existe avant de remplir les données
        if ($prestataire) {
            $this->fill($prestataire->toArray());
        } else {
            // Optionnel : gérer le cas où le prestataire n'existe pas
            // Par exemple, initialiser des valeurs par défaut ou afficher un message
        }
    }

    public function updateProfile()
    {

        // $this->validate([
        //     'nom_prestataire' => 'required|string',
        //     'prenom_prestataire' => 'required|string',
        //     'adresse' => 'required|string',
        //     'ville' => 'required|string',
        //     'pays' => 'required|string',
        //     'telephone' => 'required|string',
        //     'email' => 'required|email',
        //     'description' => 'nullable|string',
        //     'site_web' => 'nullable|url',
        //     'photo' => 'nullable|image|max:2048', // Ajouter la validation pour la photo si nécessaire
        // ]);
        // dd('ss');
        // Mettre à jour le prestataire
        $prestataire = Prestataire::where('user_id', Auth::user()->id)->first();
        if ($prestataire) {
            $prestataire->update([
                'nom_prestataire' => $this->nom_prestataire,
                'prenom_prestataire' => $this->prenom_prestataire,
                'adresse' => $this->adresse,
                'ville' => $this->ville,
                'pays' => $this->pays,
                'telephone' => $this->telephone,
                'email' => $this->email,
                'description' => $this->description,
                'site_web' => $this->site_web,
                'typepresatation_id' => $this->typepresatation_id
                // 'active_at' => $this->active_at,
                // Gérer le champ photo si vous le souhaitez
                // 'photo' => $this->photo ? $this->photo->store('photos') : $prestataire->photo,
            ]);

            session()->flash('message', 'Profil mis à jour avec succès.');
        } else {
            session()->flash('error', 'Le prestataire n\'existe pas.');
        }
    }

    public function render()
    {

        $listetypeprestation = TypePrestation::all();
        return view('livewire.edition-profile-prestataire', compact('listetypeprestation'))->extends('layout.layout');
    }
}
