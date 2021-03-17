<?php

namespace Modules\Coupons\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Coupons\Entities\Coupon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
    
        return view('coupons::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('coupons::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
 
 $request->validate([
    'total_price' => 'min:100',
    'price_per' => 'min:5',
]);           
        $coupon=new Coupon;
        $coupon->name=$request->input('name');
        $coupon->coupon_for=$request->input('social');
        $coupon->no_of_coupons="storffy".rand(50000 , 99999);
        $coupon->total_price=$request->input('total_price');
        $coupon->price_per_coupon=$request->input('price_per');
        $coupon->created_by=$request->input('created_by');
        $coupon->save();

        return redirect('coupons/')->with('success','coupon created');


    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('coupons::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('coupons::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
