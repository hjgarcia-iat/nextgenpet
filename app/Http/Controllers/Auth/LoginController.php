<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Lang;

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
    protected $redirectTo = '/login';

    /**
     * Show login form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        if (\Auth::attempt($request->only(['email', 'password']))) {

        	if(\Auth::user()->account_status == 'pending') {
        		auth()->logout();

        		return redirect()->route('login.create')->with('error','We are in the process of activating your account we will be contacting you shortly.');
	        }

            return redirect()->intended('/')->with('success', 'You have been logged in!');
        }

        return redirect()->back()
            ->with('error', 'Please see errors below!')
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                $this->username() => Lang::get('auth.failed'),
            ]);
    }

    /**
     * Log the user out of the application.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        auth()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/login')->with('success', 'You have been logged out!');
    }
}
