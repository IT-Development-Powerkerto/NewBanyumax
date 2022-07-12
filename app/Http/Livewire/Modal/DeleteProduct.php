<?php

namespace App\Http\Livewire\Modal;
use App\Models\Product;
use Livewire\Component;

class DeleteProduct extends Component
{
    public $listeners = [
        'deletedId' => 'deletedId'
    ];
    public $deletedId = '';
    public function render()
    {
        $products = Product::all();
        return view('livewire.modal.delete-product', compact('products'));
    }
    public function deletedId($id)
    {
        $this->deletedId = $id;
    }
    public function delete()
    {
        // dd($this->deletedId);
        Product::find($this->deletedId)->delete();
        $this->emit('productDeleted');
    }
}
