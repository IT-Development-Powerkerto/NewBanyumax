<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Lead;
use Carbon\Carbon;
use Livewire\WithPagination;

class LeadTunneling extends Component
{
    use WithPagination;
    public $paginate = 5;
    public $search;
    public function render()
    {
        // dd(date('Y-m-d'));
        $leads = $this->search == null ?
            Lead::with(['operator','product'])->latest()->paginate($this->paginate) :
            // Lead::where('id', 'like', '%'.$this->search.'%')
            //     ->with(['operator','product'])->latest()->paginate($this->paginate);
            Lead::where('id', 'like', '%'.$this->search.'%')
                ->orWhere('advertiser', 'like', '%'.$this->search.'%')
                ->orWhere('client_name', 'like', '%'.$this->search.'%')
                ->orWhere('client_whatsapp', 'like', '%'.$this->search.'%')
                ->orWhereHas('operator', function($q){
                    $q->where('name', 'like', '%'.$this->search.'%');
                })
                ->orWhereHas('product', function($q){
                    $q->where('name', 'like', '%'.$this->search.'%');
                })->latest()->paginate($this->paginate);
        // dd($leads);
        $data['jml_lead'] = Lead::all()->count();
        return view('livewire.table.lead-tunneling', $data, compact('leads'));
    }

    public function store()
    {
        Lead::insert([
            'admin_id'        => auth()->user()->admin_id,
            'user_id'         => auth()->user()->id,
            // 'advertiser'      => $advertiser,
            // 'operator_id'     => $operator_id,
            'campaign_id'     => $this->campaign_id,
            'client_name'     => $this->customer_name,
            'client_whatsapp' => $this->customer_number,
            // 'product_id'      => $product_id,
            // 'price'           => Product::where('id', $product_id)->value('price'),
            'status_id'       => 3,
            'created_at'      => Carbon::now()->toDateTimeString(),
            'updated_at'      => Carbon::now()->toDateTimeString(),
        ]);
    }
    public function setPaginate($int)
    {
        // dd($int);
        $this->paginate = $int;
        $this->render();
    }
}
