<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelpRequest;
use App\Mail\Help;
use Illuminate\View\View;

/**
 * Class HelpController
 *
 * @package App\Http\Controllers
 */
class HelpController extends Controller
{

    /**
     * Show Help Form
     *
     * @return View;
     */
    public function create()
    {
        return view('pages.help')->with('pageTitle', 'Help');
    }

    /**
     * Post Help Form
     *
     * @param HelpRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HelpRequest $request)
    {
        \Mail::to('contact@iat.com')->send(new Help($request));

        \Session::flash('success', 'Message sent!');

        return redirect()->to('help');
    }
}
