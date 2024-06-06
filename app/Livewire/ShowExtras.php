<?php

namespace App\Livewire;

use App\Models\Extra;
use App\Models\Guest;
use Livewire\Component;
use Livewire\WithPagination;

class ShowExtras extends Component
{
    use WithPagination;
    public $extras;
    public $guest;

    public function mount(Guest $guest)
    {
        $this->guest = $guest;
        $this->extras = $guest->extras()->get()->toArray();
    }
    public function render()
    {
        return view('livewire.show-extras')
            ->layout('layouts.app');
    }
}
