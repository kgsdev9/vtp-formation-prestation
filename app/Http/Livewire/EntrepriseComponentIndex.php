<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Entreprise;

class EntrepriseComponentIndex extends Component
{
    use WithPagination;

    // Méthode pour supprimer une entreprise
    public function deleteEntreprise($id)
    {
        $entreprise = Entreprise::findOrFail($id);
        $entreprise->delete();

        session()->flash('message', 'Entreprise supprimée avec succès.');
    }

    public function render()
    {
        $entreprises = Entreprise::paginate(10);
        return view('livewire.entreprise-component-index', compact('entreprises'))->extends('layout.layout');
    }
}
