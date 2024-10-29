<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Prestataire;
use Illuminate\Support\Facades\Auth;

class EditionProfilePrestataire extends Component
{
    use WithFileUploads;

    public $nom_prestataire, $prenom_prestataire, $adresse, $ville, $typepresatation_id;
    public $pays, $telephone, $email, $site_web, $description, $photo, $identifiant;
    public $active_at, $user_id;

    public function mount()
    {
        $user = Auth::user()->prestataire;
        $this->fill($user->toArray());
    }

    public function updateProfile()
    {
        $this->validate([
            'nom_prestataire' => 'required|string',
            'prenom_prestataire' => 'required|string',
            'adresse' => 'required|string',
            'ville' => 'required|string',
            'pays' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|email',
            'description' => 'nullable|string',
            'site_web' => 'nullable|url',
        ]);

        Auth::user()->prestataire->update([
            'nom_prestataire' => $this->nom_prestataire,
            'prenom_prestataire' => $this->prenom_prestataire,
            'adresse' => $this->adresse,
            'ville' => $this->ville,
            'pays' => $this->pays,
            'telephone' => $this->telephone,
            'email' => $this->email,
            'description' => $this->description,
            'site_web' => $this->site_web,
            'active_at' => $this->active_at,
        ]);

        session()->flash('message', 'Profil mis à jour avec succès.');
    }





    public function render()
    {
        return view('livewire.edition-profile-prestataire');
    }
}
