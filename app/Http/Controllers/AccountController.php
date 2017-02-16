<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class HelpController
 *
 * @package App\Http\Controllers
 */
class AccountController extends Controller
{

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
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(Request $request)
	{
		auth()->user()->update($request->all());

		\Session::flash('success', 'Account has been updated!');

		return redirect()->back();
	}
}
