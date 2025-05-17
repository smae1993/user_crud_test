<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class UserManager extends Component
{
    use WithPagination, WithoutUrlPagination;
    public function removeUser(int $id){
        User::find($id)->delete();
        return $this->redirect('/');
    }
    public function render()
    {
        return view('livewire.user-manager',[
            'users' => User::paginate(24)
        ]);
    }
}
