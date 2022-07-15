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

    // use WithFileUploads;
    public $name, $sku, $price, $product_link;
    public $image = '';
    public $listeners = [
        'getProduct' => 'showProduct'
    ];

    // public function mount($id)
    // {
    //     $product = Product::where('admin_id', auth()->user()->admin_id)->findOrFail($id);
    // }

    // public function update(Product $product)
    // {
    //     DB::table('products')->where('id', $product->id)->update([
    //         'admin_id'     => auth()->user()->admin_id,
    //         'name'         => $this->name,
    //         'price'        => $this->price,
    //         'sku'          => $this->sku,
    //         // 'discount'  => $this->discount,
    //         // 'image'     => $this->image->storeAs('assets/img/product', 'product-'),
    //         'product_link' => $this->product_link,
    //         'updated_at'   => Carbon::now()->toDateTimeString(),
    //     ]);
    // }
    public function render()
    {
        // $products = Product::all();
        return view('livewire.modal.edit-product');
    }
    public function showProduct($id)
    {
        // dd($id);
        $product = Product::find($id);
        $this->name = $product->name;
        $this->sku = $product->sku;
        $this->price = $product->price;
        $this->product_link = $product->product_link;
        $this->image = url( $product->image != null ? 'storage/'.str_replace('public/', '',$product->image) : 'assets/img/icon-foto.png');
        // $this->image = '';
        $this->render();
        // dd($this->image);
    }
    // public function productImage()
    // {
    //     return $this->image ? url('storage/'.str_replace('public', '',$this->image)) : url('assets/img/icon-foto.png');
    // }
}
