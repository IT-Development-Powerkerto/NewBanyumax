<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Product;
use App\Models\Promotion;
use Livewire\WithPagination;

class CreatePromotionCs extends Component
{
    use WithPagination;
    public $paginate = 5;
    public $search;

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
        $promotion_cs = $this->search == null ?
            Promotion::with(['product', 'type_promotion'])->latest()->paginate($this->paginate) :
            Promotion::where('id', 'like', '%'.$this->search.'%')
                    ->orWhere('promotion_name', 'like', '%'.$this->search.'%')
                    ->orWhere('promotion_product_price', 'like', '%'.$this->search.'%')
                    ->orWhere('promotion_product_percent', 'like', '%'.$this->search.'%')
                    ->orWhere('total_promotion', 'like', '%'.$this->search.'%')
                    ->orWhereHas('type_promotion', function($q){
                        $q->where('name', 'like', '%'.$this->search.'%');
                    })
                    ->orWhereHas('product', function($q){
                        $q->where('name', 'like', '%'.$this->search.'%');
                    })->latest()->paginate($this->paginate);
            Promotion::where('admin_id', auth()->user()->admin_id)->where('user_id', auth()->user()->id)->get();
        $data['jml_promotion'] = Promotion::all()->count();
        return view('livewire.table.create-promotion-cs',$data )->with('products', $products)->with('promotions', $promotion_cs);
    }

    public function setPaginate($int)
    {
        // dd($int);
        $this->paginate = $int;
        $this->render();
    }
}
