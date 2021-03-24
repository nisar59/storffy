<?php

namespace Modules\Coupons\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Coupons\Entities\Coupon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Modules\CouponFor\Entities\CouponFor;


class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data = Coupon::all();
       
        return view('coupons::index' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
       $couponfor = CouponFor::all();
        return view('coupons::create' ,compact('couponfor'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {

 $request->validate([
     'name' => 'required',
     'coupon_for' => 'required',
     'total_price' => 'numeric|min:100',
    'price_per_coupon' => 'numeric|min:5',
]);           
        $coupon=new Coupon;
        $coupon->name=$request->input('name');
        $coupon->coupon_for=$request->input('coupon_for');
        $coupon->coupon_code=couponcode();
        $coupon->total_price=$request->input('total_price');
        $coupon->price_per_coupon=$request->input('price_per_coupon');
        $coupon->total_coupon=$request->input('total_coupon');
        $coupon->created_by=Auth::user()->id;
        $coupon->status='1';
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
        $data = Coupon::find($id);

        return view('coupons::edit' , compact('data'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function statusupdate($id)
    {
       $data = Coupon::find($id);
        $status = $data->status; 
        if($status == '1'){
            $data->status = 0;
           $data->save();
           return redirect()->back()->with('message','Status Updated Succesfully');
        }
else{

     $data->status = '1';
     $data->save();
           return  redirect()->back()->with('message','Status Updated Succesfully');

}
        
    }

    public function update(Request $request, $id)
    {
        
 $request->validate([
     'name' => 'required',
     'coupon_for' => 'required',
     'total_price' => 'numeric|min:100',
    'price_per_coupon' => 'numeric|min:5',
]);           
        $coupon = Coupon::find($id);
        $coupon->name=$request->input('name');
        $coupon->coupon_for=$request->input('coupon_for');
        $coupon->total_price=$request->input('total_price');
        $coupon->price_per_coupon=$request->input('price_per_coupon');
        $coupon->total_coupon=$request->input('total_coupon');
        $coupon->created_by=Auth::user()->id;
        $coupon->status='1';
        $coupon->save();

        return redirect('coupons/')->with('success','coupon updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function delete($id)
    {
         Coupon::find($id)->delete();
               return  redirect()->back()->withSuccess('deleted Succesfully');

    }
   

}
