<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        return [
            'first_name'     => 'required|max:255',
            'last_name'      => 'required|max:255',
            'institution'    => 'required|max:255',
            'zip'            => 'required|min:5|exists:zip_code_US,zip_code',
            'register_email' => 'required|email|max:255|unique:users,email',
        ];
    }
}