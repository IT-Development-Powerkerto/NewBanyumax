<?php

namespace App\Http\Livewire\Card;

use Livewire\Component;
use App\Models\Campaign;

class TotalCampaign extends Component
{
    public function render()
    {
        $data['jml_campaign'] = Campaign::all()->count();
        return view('livewire.card.total-campaign', $data);
    }
}
