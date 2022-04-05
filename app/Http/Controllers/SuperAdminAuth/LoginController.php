<?php

namespace App\Http\Controllers\SuperAdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'superadmin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    protected function guard(){

      return auth()->guard('superadmin');

}

  public function showLoginForm(){

    return view('SuperAdminAuth.login');
  }



   public function logout(Request $request)
    {
        auth()->guard('superadmin')->logout();

        $request->session()->invalidate();

        return redirect('superadmin/login');
    }


}
