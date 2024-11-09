<?php

namespace App\Http\Livewire;

use App\Models\PerfomancePrestataire;
use App\Models\Prestataire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class SkillsPrestataireComponent extends Component
{
    public $showForm = false;
    public $libelleperfomance;
    public $performanceId;

    protected $rules = [
        'libelleperfomance' => 'required|string|max:255',
    ];

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
        $this->reset(['libelleperfomance', 'performanceId']);
    }

    public function editPerformance($id)
    {
        $performance = PerfomancePrestataire::findOrFail($id);
        $this->performanceId = $performance->id;
        $this->libelleperfomance = $performance->libelleperfomance;
        $this->showForm = true;
    }

    public function savePerformance()
    {
        $this->validate();

        $iduser = Auth::user()->id;
        $prestataire = Prestataire::where('user_id', $iduser)->first();

        if ($this->performanceId) {
            // Mettre à jour la performance existante
            $performance = PerfomancePrestataire::findOrFail($this->performanceId);
            $performance->update([
                'libelleperfomance' => $this->libelleperfomance,
            ]);
            session()->flash('message', 'Performance mise à jour avec succès.');
        } else {
            // Créer une nouvelle performance
            PerfomancePrestataire::create([
                'libelleperfomance' => $this->libelleperfomance,
                'prestataire_id' =>$prestataire->id,
            ]);
            session()->flash('message', 'Performance créée avec succès.');
        }

        $this->reset(['libelleperfomance', 'performanceId']);
        $this->showForm = false;
        $this->emit('performanceUpdated');
    }

    public function deletePerformance($id)
    {
        $performance = PerfomancePrestataire::findOrFail($id);
        $performance->delete();

        session()->flash('message', 'Performance supprimée avec succès.');
        $this->emit('performanceDeleted');
    }

    public function render()
    {
        $iduser = Auth::user()->id;
        $prestataire = Prestataire::where('user_id', $iduser)->first();
        $listePerformances = PerfomancePrestataire::where('prestataire_id', $prestataire->id)->get();
        return view('livewire.skills-prestataire-component', compact('listePerformances'));
    }
}
