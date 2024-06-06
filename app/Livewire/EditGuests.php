<?php

namespace App\Livewire;

use Livewire\Component;

class EditGuests extends Component
{
    public function render()
    {
        return view('livewire.edit-guests')
            ->layout('layouts.app');
    }
}
