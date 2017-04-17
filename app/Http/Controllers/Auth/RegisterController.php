<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Repositories\CollegeUserRepository;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

	/*
	|--------------------------------------------------------------------------
	| Register Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users as well as their
	| validation and creation. By default this controller uses a trait to
	| provide this functionality without requiring any additional code.
	|
	 */

	use RegistersUsers;

	/**
	 * Where to redirect users after login / registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show Create Form
	 *
	 * @return Illuminate\View\View
	 */
	public function create()
	{
		return view('auth.register');
	}

	/**
	 * Store User
	 *
	 * @param  RegisterRequest       $request
	 * @param  CollegeUserRepository $collegeUser
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(RegisterRequest $request, CollegeUserRepository $collegeUser)
	{
		$user = $collegeUser->create($request);

		return redirect()
			->to('/')
			->with('success', 'You have been registered. We will be sending you a confirmation email soon.');
	}
}
