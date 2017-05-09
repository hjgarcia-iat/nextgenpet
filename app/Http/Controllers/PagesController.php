<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class PagesController
 *
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('pageAuthChecker');
    }

    /**
     * Show a Single Page based on path
     *
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Request $request)
    {
        //load the page if the request path is the home page
        if ($request->path() == '/') {
            return view('pages.index');
        }

        //load subdir home page if necessary
        if (\File::isDirectory(resource_path() . '/views/pages/' . $request->path())) {
            return view('pages.' . $request->path() . '.index');
        }

        //load subdir view (not the home page)
        if (\File::exists(resource_path() . '/views/pages/' . $request->path() . '.blade.php')) {
            return view('pages.' . $request->path());
        }

        abort(404);
    }
}
