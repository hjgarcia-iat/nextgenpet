<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class HelpController
 *
 * @package App\Http\Controllers
 */
class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
	 * Show Help Form
	 *
	 * @return View;
	 */
	public function edit()
	{
		return view('account.edit')
			->with('user', auth()->user());
	}

	/**
	 * Post Help Form
	 *
	 * @param AccountRequest $request
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(AccountRequest $request)
	{
		auth()->user()->update($request->all());

		if($request->has('password')) {
			auth()->user()->password = $request->get('password');
			auth()->user()->save();
		}

		return redirect()->route('my-account')->with('success', 'Account has been updated!');
	}
}
