<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\TypePromotion;
use Carbon\Carbon;

class AddPromotion extends Component
{
    public $promotion_name, $product_id, $promotion_product_price, $promotion_product_percent, $total_promotion, $admin_id, $user_id;

    protected $rules = [
        'promotion_name'        => 'required',
        'product_id'            => 'required',
        'promotion_product_price'=> 'required',
        'promotion_product_percent'=> 'nullable',
    ];

    public function render()
    {
        $products = Product::where('admin_id', auth()->user()->admin_id)->get();
        $type_promotions = TypePromotion::all();
        return view('livewire.modal.add-promotion', compact('products', 'type_promotions'));
    }

    // public function updated()
    // {
    //     $this->validate();
    // }

    public function store()
    {
        $validated = $this->validate();
        $total_promotion = $this->promotion_product_price;

        $validated['admin_id']          = auth()->user()->admin_id;
        $validated['user_id']           = auth()->user()->id;
        $validated['total_promotion']   = $total_promotion;
        $validated['created_at']= Carbon::now()->toDateTimeString();
        $validated['updated_at']= Carbon::now()->toDateTimeString();

        $this->emit('promotionCreated');

    }
}
