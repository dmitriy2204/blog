<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'name' => 'required|max:255|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:255|min:6',
            'password_confirm' => 'required|same:password',
            'phone' => 'nullable|regex:/\+\d{1}\(\d{3}\)\d{7}/',
            'is_confirmed' => 'accepted',
            'user_id' => 'nullable'
        ];
    }    

}
