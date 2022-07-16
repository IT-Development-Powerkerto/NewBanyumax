<?php

namespace App\Http\Livewire\Modal;
use App\Models\Product;
use Livewire\Component;
use File;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;

class EditProduct extends Component
{

    use WithFileUploads;
    public $name, $sku, $price, $product_link, $productId, $image_temp;
    public $image = '';
    public $listeners = [
        'getProduct' => 'showProduct',
        'updateProduct' => 'updateProduct',
    ];

    protected $rules = [
        'name' => 'required',
        'image_temp' => 'image|nullable',
        'price' => 'required',
        'sku' => 'required|min:3',
        'product_link' => 'nullable'
    ];
    public function updated()
    {
        $this->validate();
    }
    public function render()
    {
        // $products = Product::all();
        return view('livewire.modal.edit-product');
    }
    public function showProduct($id)
    {
        // dd($id);
        $this->reset('image_temp');
        $product = Product::find($id);
        $this->productId = $product->id;
        $this->name = $product->name;
        $this->sku = $product->sku;
        $this->price = $product->price;
        $this->product_link = $product->product_link;
        $this->image = url( $product->image != null ? 'storage/'.str_replace('public/', '',$product->image) : 'assets/img/icon-foto.png');
        // $this->image = '';
        // $this->render();
        // dd($this->image);
    }
    // public function productImage()
    // {
    //     return $this->image ? url('storage/'.str_replace('public', '',$this->image)) : url('assets/img/icon-foto.png');
    // }
    public function updateProduct($productId)
    {
        $product = Product::where('id', $productId)->first();
        $validated = $this->validate();
        if($this->image_temp){
            // if
            // Storage::disk('public')->delete($product->image);
            $path = $this->image_temp->store('public/image');
        }else{
            $path = $product->image;
        }
        $validated['image'] = $path;
        $product->update($validated);
        $this->emit('productUpdated');
    }
}
