<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Product;
use App\Models\FacebookEvent;
use App\Models\FacebookWa;

class AddCampaign extends Component
{
    public function render()
    {
        $facebook_event = FacebookEvent::all();
        $facebook_wa    = FacebookWa::all();
        return view('livewire.modal.add-campaign', ['facebook_event'=>$facebook_event, 'facebook_wa'=>$facebook_wa]);
    }
}
