<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'address'    => 'required|max:255',
            'city'    => 'required|max:255',
            'state_id'    => 'required|exists:us_states,id',
            'zip'            => 'required|min:5',
            'register_email' => 'required|email|max:255|unique:users,email',
        ];
    }
}
