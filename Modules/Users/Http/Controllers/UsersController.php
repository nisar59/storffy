<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Users\Entities\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $data = User::all();
        return view('users::index' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('users::create');
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
         'email' => 'required | email',
        ]);

        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->name);
        $user->user_type = $request->user_type;
        $user->term = 'agree';
        $user->save();
          return redirect('users/');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('users::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
       
        $data = User::find($id);

        return view('users::edit' , compact('data'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
        public function statusupdate($id)
    {
       $data = User::find($id);
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
     'email' => 'required | email',
   
]);           
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->name);
        $user->user_type = $request->user_type;
        $user->term = 'agree';
        $user->save();

        return redirect('users/')->with('success','coupon updated successfully');

    
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function delete($id)
    {
         User::find($id)->delete();
               return  redirect()->back()->withSuccess('deleted Succesfully');
    }
}
