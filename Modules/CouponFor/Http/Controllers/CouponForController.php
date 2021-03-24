<?php

namespace Modules\CouponFor\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\CouponFor\Entities\CouponFor;

class CouponForController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data = CouponFor::all();
        // dd($data);
        return view('couponfor::index' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('couponfor::create');
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
    
]);           
        $couponfor=new CouponFor;
        $couponfor->name=$request->input('name');
        $couponfor->created_by=Auth::user()->id;
        $couponfor->save();

        return redirect('coupons_for/')->with('success','coupon for created');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('couponfor::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data = CouponFor:: find($id);   
        return view('couponfor::edit' , compact('data'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
       $request->validate([
     'name' => 'required',
    ]);           
        $couponfor = CouponFor:: find($id); 
        $couponfor->name=$request->input('name');
        $couponfor->created_by=Auth::user()->id;
        $couponfor->save();

        return redirect('coupons_for/')->with('success','coupon for Updated');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function delete($id)
    {
        CouponFor::find($id)->delete();
 return redirect('coupons_for/')->with('success','deleted succcesfully');
    }
}
