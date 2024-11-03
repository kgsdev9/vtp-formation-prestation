<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class UserComponentIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $users = User::with('role')->paginate(10);
        return view('livewire.user-component-index', compact('users'))->extends('layout.layout');
    }

    public function confirmDelete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'L\'utilisateur a été supprimé avec succès.');
    }
}
