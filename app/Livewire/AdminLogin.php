<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AdminLogin extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email'    => 'required|email',
        'password' => 'required|min:6',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('admin.dashboard'); // Change this to your desired route
        } else {
            session()->flash('error', 'Invalid email or password');
        }
    }

    public function render()
    {
        return view('livewire.admin-login')->layout('layouts.app');
    }
}

