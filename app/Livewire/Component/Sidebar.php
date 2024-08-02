<?php

namespace App\Livewire\Component;

use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.component.sidebar');
    }

    /**
     * HandleLogout
     *
     * @return void
     */
    public function HandleLogout()
    {
        auth()->logout();

        return $this->redirect(route('auth.login'), navigate: true);
    }
}
