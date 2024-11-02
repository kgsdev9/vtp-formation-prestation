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
use Intervention\Image\Facades\Image;
use Str;

class CourseComponent extends Component
{
    use WithFileUploads;

    public $showForm = false;

    public $isLoading = false;

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }


    public $sequences = [];
    public $keyPoints = [];
    public $currentStep = 1;
    public $courseId;
    public $categories;
    public $levels;
    public $courses;
    public $title, $prix, $category_id, $level_id, $exercicescours, $supportcours, $url_video, $duration, $image, $description;
    protected $categoryService;
    protected $levelService;
    protected $courseService;

    public function mount(CategoryService $categoryService, LevelService $levelService, CourseService $courseService)
    {
        $this->categoryService = $categoryService;
        $this->levelService = $levelService;
        $this->courseService = $courseService;
        $this->loadData();
    }

    public function loadData()
    {
        $this->categories = $this->categoryService->all();
        $this->levels = $this->levelService->all();
        $this->courses = $this->courseService->all();
    }

    protected function rules()
    {

        $rules = [
            'title' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'level_id' => 'required|exists:levels,id',
            'exercicescours' => 'required|in:oui,non',
            'supportcours' => 'required|in:oui,non',
            'url_video' => 'nullable|url',
            'duration' => 'required|numeric',
            'description' => 'required|string',
        ];


        if ($this->courseId) {
            $rules['image'] = 'nullable';
        } else {
            $rules['image'] = 'required';
        }

        return $rules;
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

    public function saveCourse()
    {
        $this->validate();

        $this->isLoading = true;

        // Vérifie si on est en mode création ou édition
        $course = $this->courseId ? Course::find($this->courseId) : new Course();
        $iduser = Auth::user()->id;
        $entreprise = Entreprise::where('user_id', $iduser)->first();

        // Mise à jour des données du modèle
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
        $course->entreprise_id = $entreprise->id;

        // Gestion de l'image
        if ($this->image && is_object($this->image)) { // Vérifiez si c'est un objet
            $imageName = md5($this->image->getClientOriginalName() . microtime()) . '.' . $this->image->getClientOriginalExtension();
            $img = Image::make($this->image->getRealPath())->resize(800, 600);
            $img->save(public_path('formation/' . $imageName));
            $course->image = $imageName;
        }

        $course->save();

        // Met à jour les séquences et points clés
        $course->sequences()->delete();
        $course->keyPoints()->delete();
        foreach ($this->sequences as $sequence) {
            $course->sequences()->create($sequence);
        }
        foreach ($this->keyPoints as $point) {
            $course->keyPoints()->create($point);
        }

        $this->resetForm();
        $this->isLoading = false;
        session()->flash('message', $this->courseId ? 'Formation mise à jour avec succès.' : 'Formation enregistrée avec succès.');

        return redirect()->route('formation.index');
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

    public function deleteCourse($courseId)
    {
        $course = Course::find($courseId);
        $course->delete();

        session()->flash('message', 'Cours supprimé avec succès.');
    }

    public function editCourse($id)
    {
        $course = Course::with(['sequences', 'keyPoints'])->findOrFail($id);

        $this->showForm = true;
        $this->title = $course->title;
        $this->prix = $course->prix;
        $this->courseId = $course->id;
        $this->category_id = $course->category_id;
        $this->level_id = $course->level_id;
        $this->exercicescours = $course->exercicescours;
        $this->supportcours = $course->supportcourrs;
        $this->url_video = $course->url_video;
        $this->duration = $course->duration;
        $this->description = $course->description;
        $this->image = $course->image;

        $this->sequences = $course->sequences->toArray();
        $this->keyPoints = $course->keyPoints->toArray();
    }

    public function render()
    {
        $iduser = Auth::user()->id;
        $entreprise = Entreprise::where('user_id', $iduser)->first();
        $listeformation = Course::where('entreprise_id', $entreprise->id)->paginate(10);
        return view('livewire.course-component', compact('listeformation'))->extends('layout.layout');
    }
}
