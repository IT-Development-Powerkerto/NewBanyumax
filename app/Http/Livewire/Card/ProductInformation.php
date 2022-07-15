<?php

namespace App\Http\Livewire\Card;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductInformation extends Component
{
    use WithFileUploads;
    public $product, $name, $sku, $price, $product_link, $image, $admin_id, $image_temp, $productId;
    // public $deletedId = '';
    public $listeners = [
        'productDeleted' => '$refresh',
        'productCreated' => '$refresh',
        'productUpdated' => '$refresh',
        'updateProduct' => 'updateProduct',
        'getProduct' => 'showProduct'
    ];
    public $isOpenEdit = false;
    public $isOpenDelete = 0;

    public function openModalEdit($id)
    {
        // return response()->json($id);
        // ddd($id);
        // $this->isOpenEdit = true;
        // $product = Product::find($id);
        // dd($product);

        $this->emit('getProduct', $id);
    }

    public function closeModalEdit()
    {
        $this->isOpenEdit = false;
    }

    public function openModalDelete($id)
    {
        $this->isOpenDelete = true;
        $this->emit('deleteId', $id);
    }

    public function closeModalDelete()
    {
        $this->isOpenDelete = false;
    }

    public function render()
    {
        $products = Product::all();
        return view('livewire.card.product-information', compact('products'));
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
    public function updateProduct($productId)
    {
        $product = Product::where('id', $productId)->first();
        if($this->image_temp){
            // if
            // Storage::disk('public')->delete($product->image);
            $path = $this->image_temp->store('public/image');
        }else{
            $path = $product->image;
        }
        $product->update([
            'admin_id'     => auth()->user()->admin_id,
            'name'         => $this->name,
            'price'        => $this->price,
            'sku'          => $this->sku,
            // 'discount'     => $request->discount,
            'image'        => $path,
            'product_link' => $this->product_link,
        ]);
        $this->emit('productUpdated');
    }
}
