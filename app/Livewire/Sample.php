<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Sample extends Component
{
    public User $user;

    public string $sql = '';

    public function mount(User $user): void
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.sample');
    }
}
