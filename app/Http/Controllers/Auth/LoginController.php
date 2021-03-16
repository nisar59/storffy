<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

   // protected $redirectTo = '/admin';

    use AuthenticatesUsers;


    public function __construct(Request $request)
    {

    }
    public function showLoginForm() {
        return view('auth.login');
    }
    public function login(Request $request) {
        $this->guard='user';
        $this->middleware('guest')->except('logout');
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::guard($this->guard)->attempt($credentials, $request->remember)) {
            return redirect('viewer');
        }

        Session::flash('Error', 'Username or password invalid.');
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    public function loginAdmin(Request $request) {
        $this->guard='admin';
        $this->middleware('guest')->except('logout');

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::guard($this->guard)->attempt($credentials, $request->remember)) {
            return redirect('admin');
        }

        Session::flash('Error', 'Username or password invalid.');
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    
        public function loginCreator(Request $request) {
        $this->guard='creator';
        $this->middleware('guest')->except('logout');
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::guard($this->guard)->attempt($credentials, $request->remember)) {
            return redirect('creator');
        }

        Session::flash('Error', 'Username or password invalid.');
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    






    public function adminlogout(Request $request) {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('admin/login');
    }
   public function creatorlogout(Request $request) {
        Auth::guard('creator')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('creator/login');
    }
        public function logout(Request $request) {
        Auth::guard('user')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('login');
    }

}
