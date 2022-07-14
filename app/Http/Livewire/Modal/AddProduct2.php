<?php

namespace App\Http\Livewire\Modal;
use Livewire\WithFileUploads;
use App\Models\Product;
use Livewire\Component;

class AddProduct2 extends Component
{
    use WithFileUploads;
    public $name, $sku, $price, $product_link, $image, $admin_id, $isUploaded = false;

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'image' => 'image|nullable', // 1MB Max
            'price' => 'required',
            'sku' => 'required'
        ]);
        $this->isUploaded = true;
        // dd($this->all());
        // $namaFile =  $this->image->getClientOriginalName();
        // dd($namaFile);
        $path = $this->image->store('public/image');
        // dd($path);
        $product = Product::create([
            'name' => $this->name,
            'admin_id' => auth()->user()->admin_id,
            'sku' => $this->sku,
            'price' => $this->price,
            'product_link' => $this->product_link,
            'image' => $path
        ]);
    }
    public function render()
    {
        return view('livewire.modal.add-product2');
    }
}
