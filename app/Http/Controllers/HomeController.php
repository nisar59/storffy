<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
/*        $this->middleware(['auth', 'verified']);
*/        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('users.index');
    }
 public function admin()
    {
        return view('admin.index');
    }


     public function creator()
    {
        dd(test());
        return view('users.index');
    }





}