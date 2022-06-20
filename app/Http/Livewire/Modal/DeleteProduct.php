<?php

namespace App\Http\Livewire\Modal;
use App\Models\Product;
use Livewire\Component;

class DeleteProduct extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.modal.delete-product', compact('products'));
    }
}
