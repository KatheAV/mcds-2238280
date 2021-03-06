<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'fullname'  => 'required',
            'email'     => 'required|email|unique:users',
            'phone'     => 'required|numeric',
            'birthdate' => 'required|date',
            'gender'    => 'required',
            'address'   => 'required',
            'photo'     => 'required|image|max:2000',
            'role'      => 'required',
            'password'  => 'required|min:4|confirmed',
        ];
    }

    public function message() {
        return [
            'fullname.required' => 'The ":attribute" field is requeried',
        ];
    }

    public function attributes() {
        return [
            'fullname' => 'Full Name',
        ];
    }
}
