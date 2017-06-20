<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Mail\TeacherRegistered;
use App\Repositories\TeacherRepository;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

/**
 * Class RegisterController
 *
 * @package App\Http\Controllers\Auth
 */
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
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show Create Form
	 *
	 * @return \Illuminate\View\View
	 */
	public function create()
	{
		return view('auth.register');
	}

	/**
	 * Store User
	 *
	 * @param  RegisterRequest       $request
	 * @param  TeacherRepository $teacher
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(RegisterRequest $request, TeacherRepository $teacher)
	{
		$teacher = $teacher->register($request);

        \Mail::to('contact@iat.com')->send(new TeacherRegistered($teacher));

		return redirect()
			->to('/')
			->with('success', 'You have been registered. We will be sending you a confirmation email soon.');
	}
}
