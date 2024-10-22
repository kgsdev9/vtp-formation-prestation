<?php

namespace App\Http\Livewire;

use App\Models\PerfomancePrestataire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
class SkillsPrestataireComponent extends Component
{
    public $showForm = false;
    public $libelleperfomance;

    protected $rules = [
        'libelleperfomance' => 'required|string|max:255',
    ];

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function savePerfomance()
    {
        $this->validate();

        PerfomancePrestataire::create([
            'libelleperfomance'=> $this->libelleperfomance,
            'prestataire_id'=>Auth::user()->id,
        ]);

        $this->reset(['libelleperfomance']);

        $this->showForm = false;

        Session::flash('message', 'spécialité créée avec succès.');

        $this->emit('prestationAdded');
    }

    public function deletePrestation($id)
    {
        // Trouver la prestation par son ID
        $prestation = PerfomancePrestataire::findOrFail($id);

        // Supprimer la prestation
        $prestation->delete();

        // Ajouter un message flash pour la confirmation de la suppression
        session()->flash('message', 'Prestation supprimée avec succès.');

        // Émettre un événement pour actualiser la liste des prestations
        $this->emit('prestationDeleted');
    }
    public function render()
    {   $listeprestation  =PerfomancePrestataire::where('prestataire_id', Auth::user()->id)->get();
      
        return view('livewire.skills-prestataire-component', compact('listeprestation'));
    }
}
