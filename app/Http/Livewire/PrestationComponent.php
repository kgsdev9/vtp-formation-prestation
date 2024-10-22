<?php

namespace App\Http\Livewire;

use App\Models\Prestation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class PrestationComponent extends Component
{

    public $showForm = false; // Pour afficher/masquer le formulaire
    public $title, $amount, $description, $duration;

    protected $rules = [
        'title' => 'required|string|max:255',
        'amount' => 'required|numeric',
        'description' => 'required|string|max:500',
        'duration' => 'required|numeric|min:1', // Validation de la durée
    ];

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function savePrestation()
    {
        $this->validate();

        Prestation::create([
            'title' => $this->title,
            'description' =>$this->description,
            'prix' => $this->amount ,
            'prestaire_id' => Auth::user()->id,
            'duree_estimee' =>  $this->duration,
        ]);

        $this->reset(['title', 'amount', 'description', 'duration']);

        $this->showForm = false;

        Session::flash('message', 'Prestation créée avec succès.');

        $this->emit('prestationAdded');
    }

    public function deletePrestation($id)
    {
        // Trouver la prestation par son ID
        $prestation = Prestation::findOrFail($id);

        // Supprimer la prestation
        $prestation->delete();

        // Ajouter un message flash pour la confirmation de la suppression
        session()->flash('message', 'Prestation supprimée avec succès.');

        // Émettre un événement pour actualiser la liste des prestations
        $this->emit('prestationDeleted');
    }
    public function render()
    {
        $listeprestation  = Prestation::all();
        return view('livewire.prestation-component', compact('listeprestation'));
    }
}
