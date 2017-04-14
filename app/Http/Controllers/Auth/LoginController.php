<?php

namespace App\Http\Controllers\Auth;

use Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\User;
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
	 * LoginController constructor.
	 */
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'logout']);
	}

	/**
	 * Handle a login request to the application.
	 *
	 * @param LoginRequest $request
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
	 */
	public function login(LoginRequest $request)
	{
		if (\Auth::attempt($request->only(['email', 'password']))){
			return redirect()->to('/')->with('success', 'You have been logged in!');
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
	public function logout(Request $request)
	{
		$this->guard()->logout();

		$request->session()->flush();

		$request->session()->regenerate();

		return redirect('/login')->with('success', 'You have been logged out!');
	}
}
