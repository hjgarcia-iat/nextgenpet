<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Mail\TeacherRegistered;
use App\Services\RegistrationService;
use App\State;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
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
	 */
	public function create(): View
    {
	    $states = State::orderBy('name','asc')->get();
		return view('auth.register', ['states' => $states]);
	}

    /**
     * Store user
     */
	public function store(RegistrationRequest $request, RegistrationService $registrationService): RedirectResponse
    {
        $user = $registrationService->register();

        Mail::to(config('mail.to.registration_email_address'))->send(new TeacherRegistered($user));

		return redirect()
			->to('/')
			->with('success', 'You have been registered. We will be sending you a confirmation email with your password soon.');
	}
}
