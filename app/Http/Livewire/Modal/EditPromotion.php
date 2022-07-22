<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;

// use LivewireUI\Modal\ModalComponent;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\TypePromotion;
use Carbon\Carbon;

class EditPromotion extends Component
{
    public $promotion_name, $product_id, $promotion_product_price, $promotion_product_percent, $total_promotion, $admin_id, $user_id, $promotion_type_id;

    public $promotionId;
    public function render()
    {
        $promotions = Promotion::all();
        // $products = Product::where('admin_id', auth()->user()->admin_id)->get();
        $products = Product::all();
        $type_promotions = TypePromotion::all();
        return view('livewire.modal.edit-promotion', compact('products', 'promotions', 'type_promotions'));
    }

    public $listeners = [
        'getPromotion'  => 'showPromotion',
        'updatePromotion' => 'updatePromotion'
    ];

    protected $rules = [
        'promotion_name'    => 'required',
        'product_id'        => 'required',
        'promotion_type_id'     => 'required',
        'promotion_product_price'   => 'required',
        'promotion_product_percent'  => 'nullable',
    ];

    // public function updated()
    // {
    //     $this->validate();
    // }

    public function showPromotion($id)
    {
        $promotion = Promotion::find($id);
        $this->promotionId      = $promotion->id;
        $this->product_id       = $promotion->product_id;
        $this->promotion_name   = $promotion->promotion_name;
        $this->promotion_type_id = $promotion->promotion_type_id;
        $this->total_promotion  = $promotion->total_promotion;
        $this->promotion_product_price = $promotion->promotion_product_price;
        $this->promotion_product_percent = $promotion->promotion_product_percent;
    }

    public function updatePromotion($promotionId)
    {
        $promotion = Promotion::where('id', $promotionId)->first();
        $validated = $this->validate();
        $total_promotion = $this->promotion_product_price;

        $validated['total_promotion'] = $total_promotion;
        $validated['created_at']= Carbon::now()->toDateTimeString();
        $validated['updated_at']= Carbon::now()->toDateTimeString();

        $promotion->update($validated);
        $this->emit('promotionUpdated');
    }
}
