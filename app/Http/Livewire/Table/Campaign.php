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
        $campaigns = Campaign_model::all();
        $data['jml_campaign'] = Campaign_model::all()->count();
        $facebook_event = FacebookEvent::all();
        $facebook_wa    = FacebookWa::all();
        $user=auth()->user();
        // return view('livewire.table.campaign', ['campaigns'=>$campaigns  ,'facebook_event'=>$facebook_event, 'facebook_wa'=>$facebook_wa]);
        if($user->role_id == 4){
            return view('livewire.table.campaign',$data, ['campaigns'=>$campaigns  ,'facebook_event'=>$facebook_event, 'facebook_wa'=>$facebook_wa]);
        }else{
            abort(404);
        }
    }
}
