<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'name' => 'required|min:3|max:25|unique:users',
            'email' => 'required|min:3|max:25|unique:users',
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Name must be at least 3 characters.',
            'name.max' => 'Name must not be greater than 25 characters.',
            'name.unique' => 'Name has already been taken.',

            'email.min' => 'Email must be at least 3 characters.',
            'email.max' => 'Email must not be greater than 25 characters.',
            'email.unique' => 'Email has already been taken.',

            
        ];
    }
}
