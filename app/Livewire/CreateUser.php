<?php

namespace App\Livewire;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateUser extends Component
{
    public UserForm $form;

    public function save()
    {
        $this->form->store();
        return $this->redirect('/');
    }


    public function mount(User $user)
    {
        $this->form->setUser($user);
    }


    public function render()
    {
        return view('livewire.create-user');
    }
}
