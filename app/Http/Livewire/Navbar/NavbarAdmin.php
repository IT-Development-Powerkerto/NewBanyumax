<?php

namespace App\Http\Livewire\Navbar;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavbarAdmin extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.navbar.navbar-admin', compact('user'));
    }
}
