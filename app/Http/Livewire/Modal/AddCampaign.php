<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Product;
use App\Models\FacebookEvent;
use App\Models\FacebookWa;
use Carbon\Carbon;
use App\Models\Campaign;

class AddCampaign extends Component
{
    public $campaign_name;
    public $facebook_event_id;
    public $facebook_wa_id;
    public $customer_cs;
    public $cs_customer;
    public $facebook_pixel;
    public $product;
    public $thanks_page;

    public function render()
    {
        $facebook_event = FacebookEvent::all();
        $facebook_wa    = FacebookWa::all();
        return view('livewire.modal.add-campaign', ['facebook_event'=>$facebook_event, 'facebook_wa'=>$facebook_wa]);
    }

    public function store(){
        // dd($this->all());
        $campaign_id = Campaign::insertGetId([
            'user_id'           => Auth()->user()->id,
            'admin_id'          => auth()->user()->admin_id,
            'campaign_name'     => $this->campaign_name,
            'product'           => $this->product,
            'facebook_pixel'    => $this->facebook_pixel,
            'facebook_event_id' => $this-> facebook_event_id,
            'facebook_wa_id'    => $this-> facebook_wa_id,
            'customer_cs'       => $this->customer_cs,
            'cs_customer'       => $this->cs_customer,
            'thanks_page'       => $this->thanks_page,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
