<?php

namespace App;

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

        if (self::isMainHomePage(request()->path())) {
            return 'index';
        }

        if (self::isSubDirectoryIndexView()) {
            return request()->path() . '.index';
        }

        if(self::isSubDirectoryView()) {
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
    private static function isMainHomePage($path)
    {
        return $path == '/';
    }

    /**
     * Check if the request is subdirectory home page
     *
     * @return bool
     */
    private static function isSubDirectoryIndexView()
    {
        return \File::isDirectory(resource_path() . '/views/pages/' . request()->path()) and \File::exists(resource_path() . '/views/pages/' . request()->path() . '/index.blade.php');
    }

    /**
     * Check if the requested view is subpage and not an index page
     *
     * @return bool
     */
    private static function isSubDirectoryView()
    {
        return \File::exists(resource_path() . '/views/pages/' . request()->path() . '.blade.php');
    }
}