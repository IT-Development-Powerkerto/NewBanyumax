<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Product;
use App\Models\Promotion;

class EditPromotion extends Component
{
    public function render()
    {
        $promotions = Promotion::all();
        $products = Product::all();
        return view('livewire.modal.edit-promotion', compact('products', 'promotions'));
    }
}
