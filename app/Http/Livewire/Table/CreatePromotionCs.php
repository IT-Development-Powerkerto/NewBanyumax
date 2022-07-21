<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Product;
use App\Models\Promotion;

class CreatePromotionCs extends Component
{

    public $listeners =[
        'promotionCreated' => '$refresh',
        'promotionUpdated' => '$refresh',
        'promotionDeleted' => '$refresh'
    ];

    public function render()
    {
        // $product = Product::where('admin_id', auth()->user()->admin_id)->get();
        // $promotion_cs = Promotion::where('admin_id', auth()->user()->admin_id)->where('user_id', auth()->user()->id)->get();
        // $data['jml_promotion'] = Promotion::all()->count();
        // if(auth()->user()->role_id==5 || auth()->user()->role_id==13){
        //     return view('livewire.table.create-promotion-cs',$data )->with('product', $product)->with('promotion', $promotion_cs);
        // }

        $products = Product::all();
        $promotion_cs = Promotion::where('admin_id', auth()->user()->admin_id)->where('user_id', auth()->user()->id)->get();
        $data['jml_promotion'] = Promotion::all()->count();
        return view('livewire.table.create-promotion-cs',$data )->with('products', $products)->with('promotions', $promotion_cs);
    }
}
