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
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Request $request)
    {
        if ($view = $this->is_valid_page($request)) {
            return view('pages.' . $view);
        }

        abort(404);
    }

    /**
     * @param Request $request
     * @return string
     */
    private function is_valid_page(Request $request)
    {
        if ($this->is_partial($request->path())) {
            abort(404);
        }

        if ($this->is_main_home_page($request->path())) {
            return 'index';
        }

        if ($this->is_subdir_index($request)) {
            return $request->path() . '.index';
        }

        if($this->is_sudir_view($request)) {
            return $request->path();
        }
    }

    /**
     * Check if the view is a partial
     *
     * @param $path
     * @return bool
     */
    private function is_partial($path)
    {
        return str_contains($path, '_') OR str_contains($path, 'partials');
    }

    /**
     * Load main home page
     *
     * @param $path
     * @return bool
     */
    private function is_main_home_page($path)
    {
        return $path == '/';
    }

    /**
     * Check if the request is subdirectory home page
     *
     * @param Request $request
     * @return bool
     */
    private function is_subdir_index(Request $request)
    {
        return \File::isDirectory(resource_path() . '/views/pages/' . $request->path()) and \File::exists(resource_path() . '/views/pages/' . $request->path() . '/index.blade.php');
    }

    /**
     * Check if the requested view is subpage and not an index page
     *
     * @param Request $request
     * @return bool
     */
    private function is_sudir_view(Request $request)
    {
        return \File::exists(resource_path() . '/views/pages/' . $request->path() . '.blade.php');
    }
}
