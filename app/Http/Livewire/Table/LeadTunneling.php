<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Lead;
use Carbon\Carbon;
use Livewire\WithPagination;

class LeadTunneling extends Component
{
    use WithPagination;
    public function render()
    {
        // dd(date('Y-m-d'));
        $leads = Lead::with([
            'operator',
            'product'
        ])->get()->take(5);
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
}
