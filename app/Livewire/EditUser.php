<?php

namespace App\Livewire;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{

   public UserForm $form;

    public function save()
    {
        $this->form->update();
        return $this->redirect('/');
    }


    public function mount(int $id)
    {
        $user = User::find($id);
        $this->form->setUser($user);
    }


    public function render()
    {
        return view('livewire.create-user');
    }
}
