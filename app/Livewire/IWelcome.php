<?php

namespace App\Livewire;

use App\Models\LocalUser;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class IWelcome extends Component
{
    #VARIABLES
    public $users, $inputPin;
    public $selectedUser = null;


    #Función al cargar página
    public function mount()
    {
        $this->users = LocalUser::get();
    }

    public function render()
    {
        return view('livewire.i-welcome');
    }


    #iFUNCIONES PROPIAS
    public function selectUser($id)
    {
        $this->selectedUser = LocalUser::find($id);

    }

    public function checkPin()
    {
        if ($this->selectedUser) {

            if (Hash::check($this->inputPin, $this->selectedUser->pin)) {
                session()->flash('message', 'Pin Correcto');
                session(['logged_user' => $this->selectedUser]);
                return redirect()->route('home');

            } else {
                session()->flash('message', 'Pin incorrecto');

            }
        }
    }
}
