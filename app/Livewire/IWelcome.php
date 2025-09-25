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
    public $showUserModal = false;


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
        $this->showUserModal = true;

    }

    public function checkPin()
    {
        if ($this->selectedUser) {

            if (Hash::check($this->inputPin, $this->selectedUser->pin)) {
                session()->flash('success', 'Pin Correcto');
                session(['logged_user' => $this->selectedUser]);
                return redirect()->route('home');

            } else {
                $this->inputPin = null;
                session()->flash('error', 'Pin incorrecto');

            }
        }
    }

    public function closeModal()
    {
        $this->showUserModal = false;
        $this->selectedUser = null;
        $this->inputPin = null;
    }
}
