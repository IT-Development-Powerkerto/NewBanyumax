<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;

// use LivewireUI\Modal\ModalComponent;
use App\Models\Product;
use App\Models\Promotion;

class EditPromotion extends Component
{
    public function render()
    {
        $promotions = Promotion::all();
        $products = Product::where('admin_id', auth()->user()->admin_id)->get();
        return view('livewire.modal.edit-promotion', compact('products', 'promotions'));
    }
}
