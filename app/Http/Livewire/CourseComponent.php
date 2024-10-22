<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Services\CategoryService;
use App\Services\LevelService;
use App\Services\CourseService;

class CourseComponent extends Component
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

    public function mount(CategoryService $categoryService, LevelService $levelService, CourseService $courseService)
    {
        // Initialisation des services
        $this->categoryService = $categoryService;
        $this->levelService = $levelService;
        $this->courseService = $courseService;

        // Charger les données nécessaires au montage du composant
        $this->loadData();
    }

    public function loadData()
    {
        $this->categories = $this->categoryService->all();
        $this->levels = $this->levelService->all();
        $this->courses = $this->courseService->all();
    }

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
        $listeformation = Course::where('entreprise_id', Auth::user()->id)->get();
        return view('livewire.course-component', compact('listeformation'))->extends('layout.layout');
    }
}
