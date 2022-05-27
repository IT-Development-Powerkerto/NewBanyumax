<?php

namespace App\Http\Livewire\Modal;

use App\Models\Product;
use Livewire\Component;

class AddProduct extends Component
{
    public $name, $sku, $price, $link;
    public function render()
    {
        return view('livewire.modal.add-product');
    }
    public function store()
    {
        $product = Product::create([
            'name' => $this->name,
            'admin_id' => 1,
            'sku' => $this->sku,
            'price' => $this->price,
            'link' => $this->link,
        ]);
        $this->emit('productStored', $product);
    }
}
