<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class ShowUser extends ModalComponent
{
    public User $user;

    public function render()
    {
        return view('livewire.users.show-user');
    }
}
