<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Product;
use App\Models\FacebookEvent;
use App\Models\FacebookWa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = Campaign::all();
        $facebook_event = FacebookEvent::all();
        $facebook_wa    = FacebookWa::all();
        return view('User.Advertiser.PageCampaign', compact('campaigns', 'facebook_event'));

    }

    public function edit($id)
    {
        $products = Product::all();
        $facebookpixel = FacebookEventPixel::all();
        $tiktokpixel = TiktokEventPixel::all();
        $whatsapppixel = WhatsappEventPixel::all();
        $campaigns = Campaign::findOrFail($id);
        // $whatsapppixel = WhatsaapEventPixel::latest()->get();
        return view('User.EditPage.PageCampaign', compact('campaigns', 'products', 'facebookpixel', 'tiktokpixel', 'whatsapppixel'));
    }


    public function addOperator()
    {
        return view('User.Advertiser.PageOperator');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::All();
        $facebookpixel = FacebookEventPixel::all();
        $tiktokpixel = TiktokEventPixel::all();
        $whatsapppixel = WhatsaapEventPixel::all();
        return view('livewire.modal.add-campaign', compact('products', 'facebookpixel', 'tiktokpixel', 'whatsapppixel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'campaign_name'=>['required'],
            'facebook_pixel'=>['required'],
            'tiktok_pixel'=>['required'],
            'product_id'=>['required'],
            'facebook_pixel_id'=>['required'],
            'tiktok_pixel_id'=>['required'],
            'whatsapp_pixel_id'=>['required'],
            'customer_cs'=>['required'],
            'cs_customer'=>['required'],
            'thanks_page'=>[]
        ]);

        // dd($validateData);

        $campaign_id = Campaign::insertGetId([
            'campaign_name' => $validateData['campaign_name'],
            'facebook_pixel' => $validateData['facebook_pixel'],
            'tiktok_pixel' => $validateData['tiktok_pixel'],
            'product_id' => $validateData['product_id'],
            'facebook_pixel_id' => $validateData['facebook_pixel_id'],
            'tiktok_pixel_id' => $validateData['tiktok_pixel_id'],
            'whatsapp_pixel_id' => $validateData['whatsapp_pixel_id'],
            'customer_cs' => $validateData['customer_cs'],
            'cs_customer' => $validateData['cs_customer'],
            'thanks_page' => $validateData['thanks_page'],

            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),

        ]);
        $request->session()->flash('pesan','Data Berhasil di Tambahkan');
        return redirect() ->route('campaign.index');
        // return view('User.Advertiser.PageCampaign');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'campaign_name'=>'',
            'facebook_pixel' =>'',
            'tiktok_pixel' => '',
            'product_id'=>'',
            'facebook_pixel_id'=>'',
            'tiktok_pixel_id'=>'',
            'whatsapp_pixel_id'=>'',
            'customer_cs'=>'',
            'cs_customer'=>'',
            'thanks_page'=>'',
        ]);

        // $campaign_id = $request->id;
        Campaign::findOrFail($id)->update([
            'campaign_name' => $request->campaign_name,
            'facebook_pixel' => $request->facebook_pixel,
            'tiktok_pixel' => $request->tiktok_pixel,
            'product_id' => $request->product_id,
            'facebook_pixel_id' => $request->facebook_pixel_id,
            'tiktok_pixel_id' => $request->tiktok_pixel_id,
            'whatsapp_pixel_id' => $request->whatsapp_pixel_id,
            'customer_cs' => $request->customer_cs,
            'cs_customer' => $request->cs_customer,
            'thanks_page' => $request->thanks_page,

            'updated_at'=> Carbon::now()->toDateTimeString(),
        ]);
        $request->session()->flash('pesan','Data Berhasil di Ubah');
        return redirect() ->route('campaign.index');
        // return view('User.Advertiser.PageCampaign');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Campaign::findOrFail($id)->delete();

        $request->session()->flash('pesan','Data Berhasil di Hapus');
        return redirect()->back();

    }
}
