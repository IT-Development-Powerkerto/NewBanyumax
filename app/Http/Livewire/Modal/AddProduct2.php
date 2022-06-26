<?php

namespace App\Http\Livewire\Modal;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProduct2 extends Component
{
    use WithFileUploads;
    public $name, $sku, $price, $product_link, $image, $admin_id;

    public function store(){
        $product = Product::create([
            'name' => $this->name,
            'admin_id' => auth()->user()->admin_id,
            'sku' => $this->sku,
            'price' => $this->price,
            'product_link' => $this->product_link,
            // 'image' => $this->image->storeAs('assets/img/product', 'product-'),
        ]);
    }
    public function render()
    {
        $products = Product::all();
        return view('livewire.modal.add-product2', compact('products'));
    }

}
