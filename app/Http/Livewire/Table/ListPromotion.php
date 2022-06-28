<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Product;
use App\Models\Promotion;

class ListPromotion extends Component
{
    public function render()
    {
        $product = Product::where('admin_id', auth()->user()->admin_id)->get();
        $promotion_cs = Promotion::where('admin_id', auth()->user()->admin_id)->where('user_id', auth()->user()->id)->get();
        $data['jml_promotion'] = Promotion::all()->count();
        if(auth()->user()->role_id==5 || auth()->user()->role_id==13){
            return view('livewire.table.list-promotion',$data )->with('product', $product)->with('promotion', $promotion_cs);
        }
    }
}
