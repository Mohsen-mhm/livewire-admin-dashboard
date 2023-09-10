<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class DeleteUser extends ModalComponent
{
    public User $user;

    public function destroy($userId): void
    {
        User::destroy($userId);
        $this->emit('refreshComponent');
        $this->emit('closeModal');
    }

    public function render()
    {
        return view('livewire.users.delete-user');
    }
}
