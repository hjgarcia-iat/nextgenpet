<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class PagesController
 *
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{

    /**
     * Show a Single Page based on path
     *
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Request $request)
    {
        if($request->path() == '/') {
            return view('pages.index')->with('pageTitle','home');
        }

        if(!\File::exists(resource_path() . '/views/pages/' . $request->path() . '.blade.php')) {
            abort(404);
        }

        return view('pages.' . $request->path());
    }
}
