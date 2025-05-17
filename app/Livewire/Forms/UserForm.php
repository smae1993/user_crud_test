<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    public ?User $user;

    #[Validate]
    public $name = '';
    #[Validate]
    public $family = '';
    #[Validate]
    public $mobile = '';

    protected function rules()
    {
        return [
            'mobile' => [
                'required',
                 isset($this->user) ? Rule::unique('users')->ignore($this->user) : Rule::unique('users'),
            ],
            'name' => 'required',
            'family' => 'required',
        ];
    }


    public function setUser(User $user)
    {
        $this->user = $user;

        $this->name = $user->name;
        $this->family = $user->family;
        $this->mobile = $user->mobile;
    }

    public function store()
    {
        $this->validate();
        User::create($this->all());
        $this->reset();
    }

    public function update()
    {
        $this->validate();
        $this->user->update(
            $this->all()
        );
    }
}
