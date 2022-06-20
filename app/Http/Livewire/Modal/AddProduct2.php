<?php

namespace App\Http\Livewire\Modal;
use App\Models\Product;
use Livewire\Component;

class AddProduct2 extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.modal.add-product2', compact('products'));
    }

}
