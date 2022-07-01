<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Promotion;

class DeletePromotion extends Component
{
    public function render()
    {
        $promotions = Promotion::all();
        return view('livewire.modal.delete-promotion', compact('promotions'));
    }
}
