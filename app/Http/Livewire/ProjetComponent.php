<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjetComponent extends Component
{

    public $showForm = false;

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public $title, $prix, $category_id, $level_id, $description;
    public $sequences = [];
    public $keyPoints = [];
    public $currentStep = 1;
    public $categories;
    public $levels;
    public $courses;

    protected $categoryService;
    protected $levelService;
    protected $courseService;


  

    public function nextStep()
    {
        $this->currentStep++;
    }

    public function prevStep()
    {
        $this->currentStep--;
    }
    public function addSequence()
    {
        $this->sequences[] = ['title' => '', 'duration' => ''];
    }

    public function removeSequence($index)
    {
        unset($this->sequences[$index]);
        $this->sequences = array_values($this->sequences); // Re-index array
    }

    public function addKeyPoint()
    {
        $this->keyPoints[] = ['point' => ''];
    }

    public function removeKeyPoint($index)
    {
        unset($this->keyPoints[$index]);
        $this->keyPoints = array_values($this->keyPoints); // Re-index array
    }

    public function render()
    {
        $listeprojet = Project::all();
        return view('livewire.projet-component', compact('listeprojet'))->extends('layout.layout');
    }
}
