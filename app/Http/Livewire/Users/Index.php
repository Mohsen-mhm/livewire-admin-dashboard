<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function render()
    {
        return view('livewire.users.index')
            ->layout('layouts.app');
    }
}
