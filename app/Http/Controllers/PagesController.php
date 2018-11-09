<?php

namespace App\Http\Controllers;

use App\Page;

/**
 * Class PagesController
 *
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{
    /**
     * PagesController constructor.
     */
    public function __construct()
    {
        $this->middleware('pageAuthChecker');
    }

    /**
     * Show a Single Page based on path
     *
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        if ($view = Page::getValidPage()) {
            return view('pages.' . $view);
        }

        abort(404);
    }
}
