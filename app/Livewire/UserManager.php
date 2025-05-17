<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserManager extends Component
{

    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.user-manager',[
            'users' => User::paginate(24)
        ]);
    }
}
