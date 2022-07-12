<?php

namespace App\Http\Livewire\Card;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductInformation extends Component
{
    use WithFileUploads;
    public $product, $name, $sku, $price, $product_link, $image, $admin_id;
    // public $deletedId = '';
    public $listeners = [
        'productDeleted' => '$refresh'
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
}
