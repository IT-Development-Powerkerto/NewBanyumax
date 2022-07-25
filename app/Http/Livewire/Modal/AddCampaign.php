<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Product;
use App\Models\FacebookEvent;
use App\Models\FacebookWa;
use App\Models\TiktokEvent;
use Carbon\Carbon;
use App\Models\Campaign;

class AddCampaign extends Component
{
    public $admin_id;
    public $user_id;
    public $campaign_name;
    public $facebook_event_id;
    public $facebook_wa_id;
    public $tiktok_event_id;
    public $customer_cs;
    public $cs_customer;
    public $facebook_pixel;
    public $tiktok_pixel;
    public $product_id;
    public $rotation_type;
    public $thanks_page = null;

    public function render()
    {
        $facebook_event = FacebookEvent::all();
        $facebook_wa    = FacebookWa::all();
        $tiktok_event   = TiktokEvent::all();
        $products       = Product::all();
        // $products       = Product::where('admin_id', auth()->user()->admin_id)->get();
        return view('livewire.modal.add-campaign', compact('facebook_event', 'facebook_wa', 'tiktok_event', 'products'));
    }

    protected $rules = [
        'campaign_name'     =>'required',
        'product_id'        =>'required',
        'facebook_pixel'    =>'required',
        'tiktok_pixel'      =>'required',
        'facebook_event_id' =>'required',
        'facebook_wa_id'    =>'required',
        'tiktok_event_id'   =>'required',
        'customer_cs'       =>'required',
        'cs_customer'       =>'required',
        'rotation_type'     =>'required',
        'thanks_page'       =>'nullable'
    ];

    // public function updated()
    // {
    //     $this->validate();
    // }

    public function store(){

        $validated = $this->validate();

        $validated['admin_id'] = auth()->user()->admin_id;
        $validated['user_id'] = auth()->user()->id;
        $validated['created_at']= Carbon::now()->toDateTimeString();
        $validated['updated_at']= Carbon::now()->toDateTimeString();

        // dd($this->all());

        Campaign::create($validated);

        // $this->emit('campaignCreated');
    }
}
