<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelpRequest;
use App\Http\Requests\OnlineLearningRequest;
use App\Mail\Help;
use App\Mail\OnlineLearning;
use Illuminate\Http\Request;
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
        return view('help.create')->with('pageTitle', 'Help');
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

	/**
	 * Process form
	 *
	 * @param OnlineLearningRequest $request
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
    public function storeOnlineLearning(OnlineLearningRequest $request)
    {
//	    \Mail::to('contact@iat.com')->send(new OnlineLearning($request));

	    return response()->json([
	    	'status' => 'success',
	        'message' => 'Your message was sent, we will get back to your shortly!'
	    ]);
    }
}
