<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginComponent extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        // 'password' => 'required|min:6',
    ];

    public function login()
    {
        $this->validate();

        if ($user = Auth::attempt(['email' => $this->email, 'password' => $this->password]))
        {

          
            return redirect()->route('home');
        } else {
            session()->flash('error', 'Les identifiants sont incorrects.');
        }
    }


    public function render()
    {
        return view('livewire.login-component');
    }
}
