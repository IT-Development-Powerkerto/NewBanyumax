<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreatePropmotions extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::where('admin_id', auth()->user()->admin_id)->get();
        // $promotion = Promotion::where('admin_id', auth()->user()->admin_id)->get();
        $promotion_cs = Promotion::where('admin_id', auth()->user()->admin_id)->where('user_id', auth()->user()->id)->get();
        if(auth()->user()->role_id==5 || auth()->user()->role_id==13){
            return view('User.Cs.PagePromotion')->with('product', $product)->with('promotion', $promotion_cs);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $total_promotion = $request->promotion_product_price;

        DB::table('promotions')->insert([
            'admin_id'                      => auth()->user()->admin_id,
            'user_id'                       => auth()->user()->id,
            'promotion_name'                => $request->promotion_name,
            'product_id'                    => $request->product_id,
            'promotion_product_price'       => $request->promotion_product_price,
            'promotion_product_percent'     => $request->promotion_product_percent,
            'total_promotion'               => $total_promotion,
            'created_at'                    => Carbon::now()->toDateTimeString(),
            'updated_at'                    => Carbon::now()->toDateTimeString(),
        ]);

        return back();
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
    public function edit($id)
    {
        $product = Prfoduct::where('admin_id', auth()->user()->admin_id)->get();
        $promotion = Promotion::where('admin_id', auth()->user()->admin_id)->whereId($id)->get();
        if(auth()->user()->role_id == 5 || auth()->user()->role_id == 13){
            return view('livewire.modal.edit-promotion', ['promotion' => $promotion])->with('product', $product);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $total_promotion = $request->promotion_product_price;

        DB::table('promotions')->where('id',$id)->update([
            'admin_id'                      => auth()->user()->admin_id,
            'user_id'                       => auth()->user()->id,
            'promotion_name'                => $request->promotion_name,
            'product_id'                    => $request->product_id,
            'promotion_product_price'       => $request->promotion_product_price,
            'promotion_product_percent'     => $request->promotion_product_percent,
            'total_promotion'               => $total_promotion,
            'created_at'                    => Carbon::now()->toDateTimeString(),
            'updated_at'                    => Carbon::now()->toDateTimeString(),
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return back();
    }
}
