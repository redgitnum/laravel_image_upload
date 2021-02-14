<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class LoginPage extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function render()
    {
        return view('livewire.login-page');
    }

    public function login()
    {
        $this->validate();

        if(!Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            $this->reset('password');
            throw ValidationException::withMessages(['error' => 'incorrect credentials']);
        }
        return redirect('/');
    }
}
