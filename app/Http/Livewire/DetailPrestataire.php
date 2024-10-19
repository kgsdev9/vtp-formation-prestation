<?php

namespace App\Http\Livewire;

use App\Models\NotePrestataire;
use Livewire\Component;
use App\Models\Prestataire;
use App\Models\PerfomancePrestataire;
use App\Models\Prestation;
use Illuminate\Support\Facades\Auth;

class DetailPrestataire extends Component
{
    public $prestataireId;

    public $rating;
    public $comment;

    // Règles de validation
    protected $rules = [
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'required|string|max:500',
    ];


    public function mount($id)
    {
        // Récupérer l'ID du prestataire depuis la route
        $this->prestataireId = $id;

    }

    public function submitRating()
    {
        // Validation des données
        $this->validate();

        // Enregistrement dans la base de données
        NotePrestataire::create([
            'user_id' => Auth::user()->id,
            'note' => $this->rating,
            'prestataire_id'=> $this->prestataireId,
            'commentaire' => $this->comment,
        ]);

        // Réinitialisation du formulaire
        $this->reset(['rating', 'comment']);

        // Message de succès
        session()->flash('message', 'Merci pour votre évaluation !');
    }

    public function render()
    {
        // Récupérer les données associées au prestataire
        $prestataire = Prestataire::find($this->prestataireId);
        $listeskills = PerfomancePrestataire::where('prestataire_id', $prestataire->id)->get();
        $listeprestations = Prestation::where('prestaire_id', $prestataire->id)->get();
        $evaluations = NotePrestataire::where('prestataire_id', $this->prestataireId)->get();
        // Retourner la vue avec les données
        return view('livewire.detail-prestataire', [
            'prestataire' => $prestataire,
            'listeskills' => $listeskills,
            'listeprestations' => $listeprestations,
            'evaluations' =>$evaluations
        ])->extends('layout.layout');
    }
}
