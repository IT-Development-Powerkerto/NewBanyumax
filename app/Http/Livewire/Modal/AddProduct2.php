<?php

namespace App\Http\Livewire\Modal;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProduct2 extends Component
{
    use WithFileUploads;
    public $name, $sku, $price, $product_link, $image, $admin_id;

    public function store()
    {
        // $namaFile =  'product-'.time().'.'.$this->image->getClientOriginalExtension();
        // $this->image->storeAs('public/assets/img/product', $nameFile);
        $product = Product::create([
            'name' => $this->name,
            'admin_id' => auth()->user()->admin_id,
            'sku' => $this->sku,
            'price' => $this->price,
            'product_link' => $this->product_link,
            // 'image' => $nameFile
        ]);
    }
    public function render()
    {
        return view('livewire.modal.add-product2');
    }
}
