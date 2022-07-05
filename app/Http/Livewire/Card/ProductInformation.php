<?php

namespace App\Http\Livewire\Card;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductInformation extends Component
{
    use WithFileUploads;
    public $name, $sku, $price, $product_link, $image, $admin_id;

    public $isOpenEdit = 0;
    public $isOpenDelete = 0;

    public function openModalEdit()
    {
        $this->isOpenEdit = true;
    }

    public function closeModalEdit()
    {
        $this->isOpenEdit = false;
    }

    public function openModalDelete()
    {
        $this->isOpenDelete = true;
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
