<?php

namespace App\Http\Livewire\Modal;

use App\Events\LeadEvent;
use Livewire\WithFileUploads;
use App\Models\Product;
use Livewire\Component;

class AddProduct2 extends Component
{
    use WithFileUploads;
    public $name, $sku, $price, $product_link = null, $image, $admin_id, $isUploaded = false;
    protected $rules = [
        'name' => 'required',
        'image' => 'image|nullable',
        'price' => 'required',
        'sku' => 'required|min:3',
        'product_link' => 'nullable'
    ];
    public function updated()
    {
        $this->validate();
    }
    public function store()
    {
        // dd($this->all());
        $validated = $this->validate();
        // $this->isUploaded = true;
        // dd($this->all());
        // $namaFile =  $this->image->getClientOriginalName();
        // dd($namaFile);
        if(!$this->image){
            $path = null;
        }else{
            $path = $this->image->store('public/image');
        }
        $validated['admin_id'] = auth()->user()->admin_id;
        $validated['image'] = $path;
        // dd($path);
        // dd($validated);
        Product::create($validated);
        // return redirect('/dashboard');
        event(new LeadEvent('test'));
        $this->emit('productCreated');
    }
    public function render()
    {
        return view('livewire.modal.add-product2');
    }
}
