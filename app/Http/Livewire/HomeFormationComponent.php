<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Course;
use App\Models\Level;
use Livewire\Component;

class HomeFormationComponent extends Component
{
    public $selectedCategory = [];
    public $selectedLevel;

    public function render()
    {
        $allCourses = Course::when($this->selectedLevel, function ($query) {
                return $query->where('level_id', $this->selectedLevel);
            })
            ->when(count($this->selectedCategory) > 0, function ($query) {
                return $query->whereIn('category_id', $this->selectedCategory);
            })
            ->get();

        $categories = Category::all();
        $level = Level::all();

        return view('livewire.home-formation-component', compact('allCourses', 'categories', 'level'))
            ->extends('layout.layout');
    }
}
