<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Product;
use App\Models\Promotion;

class AddPromotion extends Component
{
    public function render()
    {
        $promotions = Promotion::all();
        $products = Product::all();
        return view('livewire.modal.add-promotion', compact('products', 'promotions'));
    }
}
