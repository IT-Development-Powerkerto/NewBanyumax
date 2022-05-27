<?php

namespace App\Http\Livewire\Table;

use App\Models\User;
use Livewire\Component;

class Staff extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.table.staff', compact('users'));
    }
}
