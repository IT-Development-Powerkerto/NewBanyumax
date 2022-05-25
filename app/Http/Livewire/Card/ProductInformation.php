<?php

namespace App\Http\Livewire\Card;

use App\Models\Product;
use Livewire\Component;

class ProductInformation extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.card.product-information', compact('products'));
    }
}
