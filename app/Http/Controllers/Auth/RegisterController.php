<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Mail\TeacherRegistered;
use App\Repositories\TeacherRepository;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Mail;

/**
 * Class RegisterController
 *
 * @package App\Http\Controllers\Auth
 */
class RegisterController extends Controller
{

	use RegistersUsers;

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
     * Store Next GEN PET User
     *
     * @param RegisterRequest $request
     * @param TeacherRepository $teacher
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Throwable
     */
	public function store(RegisterRequest $request, TeacherRepository $teacher)
	{
		$teacher = $teacher->register($request);

        Mail::to(env('REGISTRATION_SUPPORT_EMAIL'))->send(new TeacherRegistered($teacher));

		return redirect()
			->to('/')
			->with('success', 'You have been registered. We will be sending you a confirmation email with your password soon.');
	}
}
