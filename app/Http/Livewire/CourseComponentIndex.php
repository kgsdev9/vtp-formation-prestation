<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Course;

class CourseComponentIndex extends Component
{
    use WithPagination;

    public $courseId; // Pour stocker l'ID du cours à supprimer

    public function render()
    {
        // Récupérer les cours avec pagination
        $courses = Course::with(['entreprise', 'category', 'level'])->paginate(10);
        return view('livewire.course-component-index', compact('courses'))->extends('layout.layout');
    }

    public function deleteCourse($id)
    {
        $this->courseId = $id; // Stocker l'ID du cours à supprimer
        Course::find($id)->delete();
        session()->flash('message', 'Le cours a été supprimé avec succès.');
    }
}
