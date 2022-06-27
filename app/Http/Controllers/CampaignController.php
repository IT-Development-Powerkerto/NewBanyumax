<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Product;
use App\Models\FacebookEvent;
use App\Models\FacebookWa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $campaigns = Campaign::where('admin_id', auth()->user()->admin_id)->get();
        $facebook_event = FacebookEvent::all();
        $facebook_wa    = FacebookWa::all();
        $user=auth()->user();
        if($user->role_id == 4){
            // return view('campaignADV', ['eventWa'=>$eventWa])->with('campaigns', $campaigns)->with('products', $product)->with('events', $events);
            return view('User.Advertiser.PageCampaign', compact('campaigns', 'facebook_event', 'facebook_wa'));
        }else{
            abort(404);
        }
    }

    public function edit($id)
    {
        $campaigns = Campaign::where('admin_id', auth()->user()->admin_id)->findOrFail($id);
        $facebook_event = FacebookEvent::all();
        $facebook_wa    = FacebookWa::all();
        return view('User.EditPage.PageCampaign', compact('campaigns', 'facebook_event', 'facebook_wa'));
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
        $campaigns = Campaign::all();
        $facebook_event = FacebookEvent::all();
        $facebook_wa    = FacebookWa::all();
        return view('livewire.modal.add-campaign', compact('campaigns', 'facebook_event', 'facebook_wa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campaign_id = DB::table('campaigns')->insertGetId([
            'user_id'         => Auth()->user()->id,
            'admin_id'        => auth()->user()->admin_id,
            'campaign_name'   => $request->campaign_name,
            'product'         => $request->product,
            'facebook_pixel'  => $request->facebook_pixel,
            'facebook_event_id' =>$request-> facebook_event_id,
            'facebook_wa_id'    =>$request-> facebook_wa_id,
            'customer_cs'  => $request->cs_customer,
            'cs_customer'  => $request->customer_cs,
            'thanks_page'  => $request->thanks_page,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // dd($validateData);
        // $request->session()->flash('pesan','Data Berhasil di Tambahkan');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($campaign)
    {

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
    public function update(Request $request, $campaign)
    {
        if (auth()->user()->role_id == 1){
            DB::table('campaigns')->where('id', $campaign)->where('admin_id', auth()->user()->admin_id)->update([
                'admin_id'          => auth()->user()->admin_id,
                'campaign_name'     => $request->campaign_name,
                'product'           => $request->product,
                'facebook_pixel'    => $request->facebook_pixel,
                'facebook_event_id' => $request->facebook_event_id,
                'facebook_wa_id'    => $request->facebook_wa_id,
                'thanks_page'       => $request->thanks_page,
                'cs_to_customer'    => $request->cs_to_customer,
                'customer_to_cs'    => $request->customer_to_cs,
                'updated_at'        => Carbon::now()->toDateTimeString(),
            ]);
        }
        else{
            DB::table('campaigns')->where('id', $campaign)->where('admin_id', auth()->user()->admin_id)->update([
                'user_id'           => Auth()->user()->id,
                'admin_id'          => auth()->user()->admin_id,
                'campaign_name'     => $request->campaign_name,
                'product'           => $request->product,
                'facebook_pixel'    => $request->facebook_pixel,
                'facebook_event_id' => $request->facebook_event_id,
                'facebook_wa_id'    => $request->facebook_wa_id,
                'thanks_page'       => $request->thanks_page,
                'cs_to_customer'    => $request->cs_to_customer,
                'customer_to_cs'    => $request->customer_to_cs,
                'updated_at'        => Carbon::now()->toDateTimeString(),
            ]);
        }
        // $request->session()->flash('pesan','Data Berhasil di Ubah');
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

        // $request->session()->flash('pesan','Data Berhasil di Hapus');
        return redirect()->back();

    }
}
