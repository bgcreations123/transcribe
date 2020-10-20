<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
   // protected $redirectTo = '/home';
   //protected function redirectTo()
   protected function authenticated( $request, $user)
    {
        $app_name = config('app.name');

        if ($user->role == 'Admin') {
            return redirect('/admin');
        } else if ($user->role == 'Customer') {
            return redirect('/client');
        } else if ($user->role == 'Transcriptionist') {
            return redirect('/project');
        }  else if ($user->role == 'Grader') {
            return redirect('/grader');
        } else return redirect('/login')->with('error', 'Role not defined. Contact info@'.$app_name.'.com for more information regarding your login.');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
