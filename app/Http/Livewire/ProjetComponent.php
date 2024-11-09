<?php

namespace App\Http\Livewire;

use App\Models\Prestataire;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class ProjetComponent extends Component
{
    public $showForm = false;
    public $title, $slug, $description, $url, $is_published = false;
    public $projectId;
    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'url' => 'nullable|url',
        'is_published' => 'boolean',
    ];

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->reset(['title', 'slug', 'description', 'url', 'is_published', 'projectId']);
    }

    public function updatedTitle($value)
    {
        $this->slug = Str::slug($value);
    }

    public function saveProject()
    {

        $iduser = Auth::user()->id;
        $prestataire = Prestataire::where('user_id', $iduser)->first();


        $this->validate();

        $data = [
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'url' => $this->url,
            // 'is_published' => $this->is_published,
            'prestataire_id' => $prestataire->id,
        ];


        if ($this->projectId) {
            $project = Project::findOrFail($this->projectId);
            $project->update($data);
            session()->flash('message', 'Projet mis à jour avec succès.');
        } else {
            Project::create($data);
            session()->flash('message', 'Projet créé avec succès.');
        }

        $this->resetForm();
        $this->showForm = false;
        $this->emit('projectUpdated');
    }

    public function editProject($id)
    {
        $project = Project::findOrFail($id);
        $this->projectId = $project->id;
        $this->title = $project->title;
        $this->slug = $project->slug;
        $this->description = $project->description;
        $this->url = $project->url;
        // $this->is_published = $project->is_published;
        $this->showForm = true;
    }

    public function deleteProject($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        session()->flash('message', 'Projet supprimé avec succès.');
        $this->emit('projectDeleted');
    }

    public function render()
    {
        $iduser = Auth::user()->id;
        $prestataire = Prestataire::where('user_id', $iduser)->first();
        $projects = Project::where('prestataire_id', $prestataire->id)->get();
        return view('livewire.projet-component', compact('projects'))->extends('layout.layout');
    }
}
