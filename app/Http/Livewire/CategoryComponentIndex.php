<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class CategoryComponentIndex extends Component
{
    use WithPagination;

    public $name;
    public $categoryId;
    public $showForm = false;
    public $isEdit = false;

    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function toggleForm()
    {
        $this->resetInput();
        $this->showForm = !$this->showForm;
    }

    public function resetInput()
    {
        $this->name = '';
        $this->categoryId = null;
        $this->isEdit = false;
    }

    public function createCategory()
    {
        $this->validate();
        Category::create(['name' => $this->name]);

        session()->flash('message', 'Catégorie créée avec succès.');
        $this->resetInput();
        $this->showForm = false;
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        $this->categoryId = $category->id;
        $this->name = $category->name;
        $this->isEdit = true;
        $this->showForm = true;
    }

    public function updateCategory()
    {
        $this->validate();
        $category = Category::findOrFail($this->categoryId);
        $category->update(['name' => $this->name]);

        session()->flash('message', 'Catégorie mise à jour avec succès.');
        $this->resetInput();
        $this->showForm = false;
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        session()->flash('message', 'Catégorie supprimée avec succès.');
    }

    public function render()
    {
        $categories = Category::paginate(10);
            return view('livewire.category-component-index', compact('categories'))->extends('layout.layout');
    }
}
