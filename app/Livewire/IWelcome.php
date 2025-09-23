<?php

namespace App\Livewire;

use App\Models\LocalUser;
use Livewire\Component;

class IWelcome extends Component
{
    public $users;
    public function mount(){
        $this-> users = LocalUser::get();
    }
    public function render()
    {
        return view('livewire.i-welcome');
    }
}
