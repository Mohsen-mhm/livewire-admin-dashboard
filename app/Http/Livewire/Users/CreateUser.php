<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;

class CreateUser extends ModalComponent
{
    public User $user;


    public function mount(): void
    {
        $this->user = new User();
    }

    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    protected array $rules = [
        'user.name' => ['required', 'string', 'min:3'],
        'user.email' => ['required', 'email', 'unique:users,email'],
        'user.password' => ['required', 'min:8'],
        'user.password_confirmation' => ['required', 'same:user.password'],
    ];

    public function store()
    {
        $this->validate();

        unset($this->user->password_confirmation);
        $this->user->password = Hash::make($this->user->password);

        $this->user->save();

        $this->emit('refreshComponent');
        $this->emit('closeModal');
    }

    public function render()
    {
        return view('livewire.users.create-user');
    }
}
