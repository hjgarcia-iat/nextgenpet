<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelpRequest;
use App\Mail\HelpEmail;
use Illuminate\View\View;

/**
 * Class HelpController
 *
 * @package App\Http\Controllers
 */
class HelpController extends Controller
{

	/**
	 * Post HelpEmail Form
	 *
	 * @param HelpRequest $request
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(HelpRequest $request)
	{
		\Mail::to(env('SUPPORT_EMAIL'))->send(new HelpEmail($request));

		return redirect()->back()->with('success', 'Your message was sent. We will be in contact soon!');
	}
}
