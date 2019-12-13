<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TripCoordinator;
use Auth;

class TripCoordinatorLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:tripCoordinator');
    }

    public function showLoginForm()
    {
        return view('auth.tripCoordinatorLogin');
    }

    public function login(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log trip coordinator in
        if (Auth::guard('tripCoordinator')->attempt(['email' => $request->email, 'password' => $request->password] , $request->remember)) 
        {
            // If successful, redirect to inteded location
            return redirect()->intended(route('tripcoordinators.dashboard'));
        };
        
        // If unsuccessful, redirect back to login with form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}