<?php

namespace App\Http\Controllers\Auth;

use App\Repositories\CollegeRepository;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

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
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array $data
	 *
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'first_name'  => 'required|max:255',
			'last_name'   => 'required|max:255',
			'institution' => 'required|max:255',
			'zip'         => 'required|integer|min:5',
			'email'       => 'required|email|max:255|unique:users',
		]);
	}

	/**
	 * Handle a registration request for the application.
	 *
	 * @param CollegeRepository         $college
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function register(CollegeRepository $college, Request $request)
	{
		$this->validator($request->all())->validate();

		$this->create($college, $request->all());

		return redirect()->to('/')->with('success', 'You have been registered. We will be sending you a confirmation with your information soon.');
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param CollegeRepository $college
	 * @param  array            $data
	 *
	 * @return User
	 */
	protected function create(CollegeRepository $college, array $data)
	{
		$college = $college->create($data);
		$user    = User::create($data);

		$user->colleges()->attach($college->id);

		return $user;
	}
}
