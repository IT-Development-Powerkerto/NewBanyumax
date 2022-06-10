<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Product;
use App\Models\FacebookEventPixel;
use App\Models\TiktokEventPixel;
use App\Models\WhatsappEventPixel;

class AddCampaign extends Component
{
    public function render()
    {
        $products = Product::all();
        $facebookpixel = FacebookEventPixel::all();
        $tiktokpixel = TiktokEventPixel::all();
        $whatsapppixel = WhatsappEventPixel::all();
        //$whatsapppixel = WhatsappEventPixel::latest()->get();
        return view('livewire.modal.add-campaign', ['products'=>$products, 'facebookpixel'=>$facebookpixel, 'tiktokpixel'=>$tiktokpixel, 'whatsapppixel'=>$whatsapppixel]);
    }
}
