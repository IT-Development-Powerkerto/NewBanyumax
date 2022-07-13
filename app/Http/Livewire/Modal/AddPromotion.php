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

    public function render()
    {
        $products = Product::all();
        $type_promotions = TypePromotion::all();
        return view('livewire.modal.add-promotion', compact('products', 'type_promotions'));
    }

    public function store()
    {
        $total_promotion = $this->promotion_product_price;
        Promotion::create([
            'admin_id'                      => auth()->user()->admin_id,
            'user_id'                       => Auth()->user()->id,
            'promotion_name'                => $this->promotion_name,
            'product_id'                    => $this->product_id,
            'promotion_product_price'       => $this->promotion_product_price,
            'promotion_product_percent'     => $this->promotion_product_percent,
            'total_promotion'               => $total_promotion,
            'created_at'                    => Carbon::now()->toDateTimeString(),
            'updated_at'                    => Carbon::now()->toDateTimeString(),
        ]);
    }
}
