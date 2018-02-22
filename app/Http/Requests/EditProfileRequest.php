<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
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
            'email' => 'email',
            'phone' => 'nullable|regex:/\+\d{1}\(\d{3}\)\d{7}/',
            'birthdate' => 'nullable|regex:/\d{4}\-\d{2}\-\d{2}/'
        ];
    }
}
