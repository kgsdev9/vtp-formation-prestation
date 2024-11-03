<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Prestataire;

class PrestataireComponentIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    // Méthode pour supprimer un prestataire
    public function deletePrestataire($id)
    {
        $prestataire = Prestataire::findOrFail($id);
        $prestataire->delete();

        session()->flash('message', 'Prestataire supprimé avec succès.');
    }

    public function render()
    {
        $prestataires = Prestataire::with('typeprestation')->paginate(10); // Récupère les prestataires avec leurs types de prestation
        return view('livewire.prestataire-component-index', compact('prestataires'))->extends('layout.layout');
    }
}
