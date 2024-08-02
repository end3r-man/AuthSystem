<?php

namespace App\Livewire\Component;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.component.navbar');
    }

    public function HandleLogout()
    {
        auth()->logout();

        return $this->redirect(route('auth.login'), navigate: true);
    }
}
