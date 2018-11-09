<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $this->middleware('auth');
    }

    /**
     * Show a private file from AWS
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function show(Request $request)
    {
        $this->doesExist($request);

        return response()->stream(function () use ($request) {
            $stream = Storage::readStream($request->get('file'));
            fpassthru($stream);
            if (is_resource($stream)) {
                fclose($stream);
            }
        }, 200, [
            "Content-Type"        => Storage::mimeType($request->get('file')),
            "Content-Length"      => Storage::size($request->get('file')),
            "Content-disposition" => "inline; filename=\"" . basename($request->get('file')) . "\"",
        ]);
    }

    /**
     * Check if file exists
     * @param Request $request
     */
    protected function doesExist(Request $request)
    {
        if (!$request->has('file') or !Storage::exists($request->get('file'))) {
            abort('404');
        }
    }
}

