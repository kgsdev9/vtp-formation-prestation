<?php

namespace App\Http\Livewire;

use App\Models\Prestataire;
use App\Models\Prestation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class PrestationComponent extends Component
{
    public $showForm = false; // Pour afficher/masquer le formulaire
    public $title, $amount, $description, $duration;
    public $prestationId;

    protected $rules = [
        'title' => 'required|string|max:255',
        'amount' => 'required|numeric',
        'description' => 'required|string|max:500',
        'duration' => 'required|numeric|min:1', // Validation de la durée
    ];

    public function toggleForm()
    {
        $this->resetForm();
        $this->showForm = !$this->showForm;
    }

    public function resetForm()
    {
        $this->reset(['title', 'amount', 'description', 'duration', 'prestationId']);
    }

    public function savePrestation()
    {
        $this->validate();

        $iduser = Auth::user()->id;
        $prestataire = Prestataire::where('user_id', $iduser)->first();

        Prestation::updateOrCreate(
            ['id' => $this->prestationId],
            [
                'title' => $this->title,
                'description' => $this->description,
                'prix' => $this->amount,
                'prestataire_id' => $prestataire->id,
                'duree_estimee' => $this->duration,
            ]
        );

        $this->resetForm();
        $this->showForm = false;
        session()->flash('message', $this->prestationId ? 'Prestation mise à jour avec succès.' : 'Prestation créée avec succès.');
        $this->emit('prestationAdded');
    }

    public function editPrestation($id)
    {
        $prestation = Prestation::findOrFail($id);
        $this->prestationId = $prestation->id;
        $this->title = $prestation->title;
        $this->amount = $prestation->prix;
        $this->description = $prestation->description;
        $this->duration = $prestation->duree_estimee;

        $this->showForm = true;
    }

    public function deletePrestation($id)
    {
        $prestation = Prestation::findOrFail($id);
        $prestation->delete();
        session()->flash('message', 'Prestation supprimée avec succès.');
        $this->emit('prestationDeleted');
    }

    public function render()
    {
        $listeprestation = Prestation::all();
        return view('livewire.prestation-component', compact('listeprestation'));
    }
}
