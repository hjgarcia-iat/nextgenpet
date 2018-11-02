<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

/***
 * Class HelpRequest
 * @package App\Http\Requests
 */
class HelpRequest extends FormRequest
{

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
	    $rules = [
            'name'    => 'required',
            'email'   => 'required|email',
            'subject' => 'required',
            'comment' => 'required',
        ];

	    if(env('APP_ENV') != 'testing') {
	        $rules['my_name'] = 'honeypot';
	        $rules['my_time'] = 'required|honeytime:5';
        }

        return $rules;
	}

	/**
	 * Get the proper failed validation response for the request.
	 *
	 * @param  array $errors
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function response(array $errors)
	{
		if ($this->expectsJson()){
			return new JsonResponse($errors, 422);
		}

		return $this->redirector->to($this->getRedirectUrl())
		                        ->withInput($this->except($this->dontFlash))
		                        ->withErrors($errors, $this->errorBag)
		                        ->with('error', 'There were some errors in your input, please see below.');
	}
}
