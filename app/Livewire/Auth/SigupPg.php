<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Title;
use Livewire\Component;

class SigupPg extends Component
{
    public bool $check = false;

    public $name = '';

    public $email = '';

    public $password = '';

    #[Title('Signup')]
    public function render()
    {
        return view('livewire.auth.sigup-pg');
    }

    public function HandleSignup()
    {
        $cred = $this->validate([
            'name' => 'required|max:200|lowercase',
            'email' => 'required|unique:users,email',
            'password' => [
                'required',
                'string',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols(),
            ],
        ]);

        User::create($cred);

        return $this->redirect(route('auth.login'), navigate: true);
    }
}
