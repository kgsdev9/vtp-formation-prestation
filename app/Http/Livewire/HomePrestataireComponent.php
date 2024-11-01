<?php

namespace App\Http\Livewire;

use App\Models\Prestataire;
use App\Models\Specialite;
use App\Models\TypePrestation;
use Livewire\Component;

class HomePrestataireComponent extends Component
{
    public $selectedTags = []; // Pour stocker les tags sélectionnés

    public function render()
    {
        $allFormateurs = Prestataire::when($this->selectedTags, function($query) {
            return $query->whereIn('typepresatation_id', $this->selectedTags);
        })->paginate(20);

        return view('livewire.home-prestataire-component', [
            'allFormateurs' => $allFormateurs,
            'allTags' => TypePrestation::all(),
        ])->extends('layout.layout');
    }

    public function updatedSelectedTags($value)
    {
        $this->selectedTags = array_unique($value);
    }

    public function resetFilters()
    {
        $this->selectedTags = [];
    }
}
