<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\TypePromotion;
use Carbon\Carbon;

class AddPromotion extends Component
{
    public $promotion_name, $product_id, $promotion_product_price, $promotion_product_percent, $total_promotion, $admin_id, $user_id, $promotion_type_id;

    public function render()
    {
        // $products = Product::where('admin_id', auth()->user()->admin_id)->get();
        $products = Product::all();
        $type_promotions = TypePromotion::all();
        return view('livewire.modal.add-promotion', compact('products', 'type_promotions'));
    }
    protected $rules = [
        'promotion_name'        => 'required',
        'product_id'            => 'required',
        'promotion_type_id'     => 'required',
        'promotion_product_price'=> 'required',
        'promotion_product_percent'=> 'nullable',
    ];

    // public function updated()
    // {
    //     $this->validate();
    // }

    public function store()
    {
        // dd($this-all());
        $validated = $this->validate();
        $total_promotion = $this->promotion_product_price;

        $validated['admin_id']          = auth()->user()->admin_id;
        $validated['user_id']           = auth()->user()->id;
        $validated['total_promotion']   = $total_promotion;
        $validated['created_at']= Carbon::now()->toDateTimeString();
        $validated['updated_at']= Carbon::now()->toDateTimeString();

        Promotion::create($validated);
        $this->emit('promotionCreated');

    }
}
