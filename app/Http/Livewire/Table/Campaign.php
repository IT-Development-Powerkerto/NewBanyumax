<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Campaign as Campaign_model;
use App\Models\FacebookEvent;
use App\Models\FacebookWa;

class Campaign extends Component
{
    public $products;

    // public function mount($data) {
    //     $this->products = $data;
    // }

    public function render()
    {
        $campaigns = Campaign::all();
        $facebook_event = FacebookEvent::all();
        $facebook_wa    = FacebookWa::all();
        //$whatsapppixel = WhatsappEventPixel::latest()->get();
        return view('livewire.table.campaign', ['campaigns'=>$campaigns  ,'facebook_event'=>$facebook_event, 'facebook_wa'=>$facebook_wa]);
    }
}
