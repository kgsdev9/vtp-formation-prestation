<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\TypePrestation; // Assurez-vous que le modèle TypePrestation existe.

class SpecialiteComponentIndex extends Component
{
    use WithPagination;
    
    public $libelletypeprestation; // Champ pour le libellé du type de prestation
    public $typePrestationId; // ID de la prestation en cours de modification
    public $showForm = false; // Affichage du formulaire
    public $isEdit = false; // Indicateur pour savoir si c'est un mode édition
    protected $paginationTheme = 'bootstrap';
    protected $rules = [
        'libelletypeprestation' => 'required|string|max:255',
    ];

    public function toggleForm()
    {
        $this->resetInput();
        $this->showForm = !$this->showForm;
    }

    public function resetInput()
    {
        $this->libelletypeprestation = '';
        $this->typePrestationId = null;
        $this->isEdit = false;
    }

    public function createSpecialite()
    {
        $this->validate();
        TypePrestation::create(['libelletypeprestation' => $this->libelletypeprestation]);

        session()->flash('message', 'Spécialité créée avec succès.');
        $this->resetInput();
        $this->showForm = false;
    }

    public function editSpecialite($id)
    {
        $typePrestation = TypePrestation::findOrFail($id);
        $this->typePrestationId = $typePrestation->id;
        $this->libelletypeprestation = $typePrestation->libelletypeprestation;
        $this->isEdit = true;
        $this->showForm = true;
    }

    public function updateSpecialite()
    {
        $this->validate();
        $typePrestation = TypePrestation::findOrFail($this->typePrestationId);
        $typePrestation->update(['libelletypeprestation' => $this->libelletypeprestation]);

        session()->flash('message', 'Spécialité mise à jour avec succès.');
        $this->resetInput();
        $this->showForm = false;
    }

    public function deleteSpecialite($id)
    {
        $typePrestation = TypePrestation::findOrFail($id);
        $typePrestation->delete();

        session()->flash('message', 'Spécialité supprimée avec succès.');
    }

    public function render()
    {
        $typesPrestation = TypePrestation::paginate(10);
        return view('livewire.specialite-component-index', compact('typesPrestation'))->extends('layout.layout');
    }
}
