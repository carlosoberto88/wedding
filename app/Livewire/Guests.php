<?php

namespace App\Livewire;

use App\Models\Guest;
use Livewire\Component;
use Livewire\WithPagination;

class Guests extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $guests = Guest::where('first_name', 'like', '%' . $this->search . '%')
            ->orWhere('last_name', 'like', '%' . $this->search . '%')
            ->with('extra')
            ->paginate(10);

        return view('livewire.guests', ['guests' => $guests])->layout('layouts.app');
    }
}
