<?php namespace App\Http\Controllers;

use Storage;

/**
 * Class FileController
 * @package App\Http\Controllers
 */
class FileController extends Controller
{
    /**
     * FileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth',['show']);
    }

    /**
     * Show a private file from AWS
     *
     * @param $file
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function show($file)
    {
        if(!Storage::exists($file)) {
            abort('404');
        }

        return response()->stream(function () use ($file) {
            $stream = Storage::readStream($file);
            fpassthru($stream);
            if (is_resource($stream)) {
                fclose($stream);
            }
        }, 200, [
            "Content-Type"        => Storage::mimeType($file),
            "Content-Length"      => Storage::size($file),
            "Content-disposition" => "inline; filename=\"" . basename($file) . "\"",
        ]);
    }
}

