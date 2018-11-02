<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecoverPasswordRequest;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

/**
 * Class ForgotPasswordController
 * @package App\Http\Controllers\Auth
 */
class ForgotPasswordController extends Controller
{

	/*
	|--------------------------------------------------------------------------
	| Password Reset Controller
	|--------------------------------------------------------------------------
	|
	| This controller is responsible for handling password reset emails and
	| includes a trait which assists in sending these notifications from
	| your application to your users. Feel free to explore this trait.
	|
	*/

	use SendsPasswordResetEmails;

	/**
	 * ForgotPasswordController constructor.
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show Password Recover Email Form
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		return view('auth.passwords.email');
	}

	/**
	 * Send recover password email
	 *
	 * @param RecoverPasswordRequest $request
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(RecoverPasswordRequest $request)
	{
		\Password::broker()->sendResetLink(
			['email' => $request->get('reset_email')]
		);

		return redirect()->route('login.create')
		                 ->with('success', 'The recover password email was sent to the provided email address.');
	}
}
