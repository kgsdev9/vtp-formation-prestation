<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Course;
use Livewire\Component;

class CategoryFormationComponent extends Component
{
    public $categoeryId;
    public $isLoading ;
    public $courses = [];
    public $category;
    public $search = ''; // Propriété pour la recherche

    public function mount($id)
    {
        $this->categoeryId = $id;
        $this->category = Category::find($this->categoeryId);
        $this->updateCourses(); // Appel de la méthode pour initialiser les cours
    }

    public function updatedSearch()
    {
        // Appeler la mise à jour des cours chaque fois que la recherche change
        $this->updateCourses();
    }

    public function updateCourses()
    {
        $this->courses = Course::where('category_id', $this->categoeryId)
            ->where('title', 'like', '%' . $this->search . '%') // Filtre de recherche par titre
            ->get();
    }

    public function render()
    {
        return view('livewire.category-formation-component')->extends('layout.layout');
    }
}
