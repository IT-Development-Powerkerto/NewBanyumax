<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Campaign as Campaign_model;
use App\Models\Product;
use App\Models\FacebookEventPixel;
use App\Models\TiktokEventPixel;
use App\Models\WhatsappEventPixel;

class Campaign extends Component
{
    public $products;

    // public function mount($data) {
    //     $this->products = $data;
    // }

    public function render()
    {
        $campaigns = Campaign_model::all();
        $products = Product::all();
        $facebookpixel = FacebookEventPixel::all();
        $tiktokpixel = TiktokEventPixel::all();
        $whatsapppixel = WhatsappEventPixel::all();
        //$whatsapppixel = WhatsappEventPixel::latest()->get();
        return view('livewire.table.campaign', ['campaigns'=>$campaigns  ,'products'=>$products, 'facebookpixel'=>$facebookpixel, 'tiktokpixel'=>$tiktokpixel, 'whatsapppixel'=>$whatsapppixel]);
    }
}
