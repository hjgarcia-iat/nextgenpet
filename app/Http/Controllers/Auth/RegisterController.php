<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Mail\TeacherRegistered;
use App\Services\RegistrationService;
use Illuminate\Foundation\Auth\RegistersUsers;
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
     * Store user
     *
     * @param RegistrationRequest $request
     * @param RegistrationService $registrationService
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Throwable
     */
	public function store(RegistrationRequest $request, RegistrationService $registrationService)
    {
        $user = $registrationService->register();

        Mail::to(env('REGISTRATION_SUPPORT_EMAIL'))->send(new TeacherRegistered($user));

		return redirect()
			->to('/')
			->with('success', 'You have been registered. We will be sending you a confirmation email with your password soon.');
	}
}
