<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Features\SupportRedirects\Redirector;

class LoginPg extends Component
{

    public bool $check = false;

    public $email = '';
    
    public $password = '';

    #[Title('Login')]
    public function render()
    {
        return view('livewire.auth.login-pg');
    }

    public function HandleLogin() {
        
        $cred = $this->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        if (Auth::attempt($cred, $this->check)) {

            session(null)->regenerate();
            return $this->redirect(route('user.dash'), navigate: true);
        }

        $this->addError('email', 'Password Not Match');

    }
}
