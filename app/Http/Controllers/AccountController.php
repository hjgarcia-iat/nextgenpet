<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

/**
 * Class AccountController
 * @package App\Http\Controllers
 */
class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
	 * Show Account Edit View
	 *
	 * @return View;
	 */
	public function edit()
	{
        return view('account.edit')
			->with('user', auth()->user());
	}

    /**
     * Post Account Edit Form
     *
     * @param AccountRequest $request
     * @return RedirectResponse
     */
	public function update(AccountRequest $request): RedirectResponse
    {
		auth()->user()->update($request->all());

		return redirect()->route('my-account')->with('success', 'Account has been updated!');
	}
}
