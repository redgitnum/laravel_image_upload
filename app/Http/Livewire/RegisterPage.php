<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class RegisterPage extends Component
{
    public $name;
    public $email;
    public $password;
    public $confirmPassword;
    public $passwordMatch = false;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'password' => 'required|min:5',
        'confirmPassword' => 'same:password'
    ];

    public function render()
    {
        return view('livewire.register-page');
    }

    public function updatedConfirmPassword()
    {
        $this->passwordMatch = $this->password === $this->confirmPassword;
    }

    public function register()
    {
        $this->validate();
        
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);
        Auth::attempt(['email' => $this->email, 'password' => $this->password]);
        $this->reset();
    }
}
