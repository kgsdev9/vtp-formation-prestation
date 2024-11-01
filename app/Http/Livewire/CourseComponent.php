<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Entreprise;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Services\CategoryService;
use App\Services\LevelService;
use Livewire\WithFileUploads;
use App\Services\CourseService;
use Str;

class CourseComponent extends Component
{
    use WithFileUploads;

    public $showForm = false;

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }


    public $sequences = [];
    public $keyPoints = [];
    public $currentStep = 1;
    public $categories;
    public $levels;
    public $courses;
    public $title, $prix, $category_id, $level_id, $exercicescours, $supportcours, $url_video, $duration, $image, $description;
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

    protected $rules = [
        'title' => 'required|string|max:255',
        'prix' => 'required|numeric|min:0',
        'category_id' => 'required|exists:categories,id',
        'level_id' => 'required|exists:levels,id',
        'exercicescours' => 'required|string|in:oui,non',
        'supportcours' => 'required|string|in:oui,non',
        'url_video' => 'nullable|url',
        'duration' => 'required|numeric|min:1',
        'image' => 'nullable|image|max:1024',
        'description' => 'required|string|min:10',
    ];

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


    public function saveCourse()
    {
        $this->validate();



        $iduser = Auth::user()->id;
        $entreprise = Entreprise::where('user_id', $iduser)->first();
        $course = new Course();
        $course->title = $this->title;
        $course->slug = Str::slug($this->title);
        $course->prix = $this->prix;
        $course->category_id = $this->category_id;
        $course->level_id = $this->level_id;
        $course->exercicescours = $this->exercicescours;
        $course->supportcourrs = $this->supportcours;
        $course->url_video = $this->url_video;
        $course->duration = $this->duration;
        $course->description = $this->description;
        // $course->typecourse_id =1;
        $course->entreprise_id = $entreprise->id;

        $image = md5($this->image . microtime()).'.'.$this->image->extension();
        $this->image->storeAs('formation', $image);

        $course->image = $image;

        $course->save();

        // Sauvegarder les séquences et les points clés associés
        foreach ($this->sequences as $sequence) {
            $course->sequences()->create($sequence);
        }

        foreach ($this->keyPoints as $point) {
            $course->keyPoints()->create($point);
        }

        // Réinitialiser le formulaire après enregistrement
        $this->resetForm();

        session()->flash('message', 'Formation enregistrée avec succès.');
    }

    public function resetForm()
    {
        $this->reset(['title', 'prix', 'category_id', 'level_id', 'exercicescours', 'supportcours', 'url_video', 'duration', 'image', 'description', 'sequences', 'keyPoints']);
        $this->currentStep = 1;

    }


    public function removeKeyPoint($index)
    {
        unset($this->keyPoints[$index]);
        $this->keyPoints = array_values($this->keyPoints); // Re-index array
    }

    public function render()
    {
        $iduser = Auth::user()->id;
        $entreprise = Entreprise::where('user_id', $iduser)->first();
        $listeformation = Course::where('entreprise_id', $entreprise->id)->paginate(10);
        return view('livewire.course-component', compact('listeformation'))->extends('layout.layout');
    }
}
