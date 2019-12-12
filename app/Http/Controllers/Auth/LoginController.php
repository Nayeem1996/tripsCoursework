<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:coordinator')->except('logout');
        $this->middleware('guest:user')->except('logout');
    }

    // Define login for coordinators
    public function showCoordinatorLoginForm()
    {
        return view('auth.login', ['url' => 'coordinator']);
    }

    // Check the right credentials are supplied
    public function coordinatorLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('coordinator')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/coordinator');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    // Define login for users
    public function showUserLoginForm()
    {
        return view('auth.login', ['url' => 'user']);
    }

    // Check the right credentials are supplied
    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/user');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
