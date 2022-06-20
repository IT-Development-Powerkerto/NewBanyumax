<?php

namespace App\Http\Livewire\Modal;
use App\Models\Product;
use Livewire\Component;

class EditProduct extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.modal.edit-product', compact('products'));
    }
}
