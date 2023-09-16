<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;

class EditUser extends ModalComponent
{
    public User $user;

    protected function rules()
    {
        return [
            'user.name' => ['required', 'string', 'min:3'],
            'user.email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user->id)],
        ];
    }

    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function update()
    {
        $this->validate();

        $this->user->update();

        $this->emit('refreshComponent');
        $this->emit('closeModal');
    }

    public function render()
    {
        return view('livewire.users.edit-user');
    }
}
