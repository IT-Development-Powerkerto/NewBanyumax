<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Promotion;

class CreatePromotionCustomerService extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::where('admin_id', auth()->user()->admin_id)->get();
        $promotion = Promotion::where('admin_id', auth()->user()->admin_id)->get();
        $promotion_cs = Promotion::where('admin_id', auth()->user()->admin_id)->where('user_id', auth()->user()->id)->get();

        if(auth()->user()->role_id==5 || auth()->user()->role_id==13){
            return view('admin.cs.PagePromotion');
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
        dd($request);
        $total_promotion = $request->promotion_product_price + $request->promotion_shippment_cost + $request->promotion_admin_cost;
        // dd($request->all());
        Promotion::insert([
            'admin_id'                      => auth()->user()->admin_id,
            'user_id'                       => auth()->user()->id,
            'promotion_name'                => $request->promotion_name,
            'product_id'                    => $request->product_id,
            'promotion_type_id'             => $request->promotion_type_id,
            'promotion_product_price'       => $request->promotion_product_price,
            'promotion_product_percent'     => $request->promotion_product_percent,
            'total_promotion'               => $total_promotion,
            'created_at'                    => Carbon::now()->toDateTimeString(),
            'updated_at'                    => Carbon::now()->toDateTimeString(),
        ]);

        return redirect('/createpromotion-cs-admin')->with('success','Successull! Promotion Added');
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
        //
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
        $total_promotion = $request->promotion_product_price + $request->promotion_shippment_cost + $request->promotion_admin_cost;
        Promotion::where('id', $id)->update([
            'admin_id'                      => auth()->user()->admin_id,
            'user_id'                       => auth()->user()->id,
            'promotion_name'                => $request->promotion_name,
            'product_id'                    => $request->product_id,
            'promotion_type_id'             => $request->promotion_type_id,
            'promotion_product_price'       => $request->promotion_product_price,
            'promotion_product_percent'     => $request->promotion_product_percent,
            'total_promotion'               => $total_promotion,
            'updated_at'                    => Carbon::now()->toDateTimeString(),
        ]);

        return redirect('/createpromotion-cs-admin')->with('success','Successull! Promotion has been Edited!');
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
        return redirect('/createpromotion-cs-admin')->with('success','Successull! Promotion Deleted');
    }
}
