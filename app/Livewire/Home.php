<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $user;

    public function mount()
    {
        $this->user = session('logged_user');
    }

    public function render()
    {
        return view('livewire.home');
    }
}
