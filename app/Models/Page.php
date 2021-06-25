<?php

namespace App\Models;

use function abort;
use function request;
use function resource_path;

/**
 * Class Page
 * @package App
 */
class Page
{
    /**
     * Check if the page is valid
     * @return string
     */
    public static function getValidPage()
    {
        if (self::isPartial(request()->path())) {
            abort(404);
        }

        if (self::getHomePage(request()->path())) {
            return 'index';
        }

        if (self::getSubDirectoryIndexView()) {
            return request()->path() . '.index';
        }

        if(self::getSubDirectoryView()) {
            return request()->path();
        }
    }

    /**
     * Check if the view is a partial
     *
     * @param $path
     * @return bool
     */
    private static function isPartial($path)
    {
        return str_contains($path, '_') OR str_contains($path, 'partials');
    }

    /**
     * Load main home page
     *
     * @param $path
     * @return bool
     */
    private static function getHomePage($path)
    {
        return $path == '/';
    }

    /**
     * Check if the request is subdirectory home page
     *
     * @return bool
     */
    private static function getSubDirectoryIndexView()
    {
        return \File::isDirectory(resource_path() . '/views/pages/' . request()->path()) and \File::exists(resource_path() . '/views/pages/' . request()->path() . '/index.blade.php');
    }

    /**
     * Check if the requested view is subpage and not an index page
     *
     * @return bool
     */
    private static function getSubDirectoryView()
    {
        return \File::exists(resource_path() . '/views/pages/' . request()->path() . '.blade.php');
    }
}