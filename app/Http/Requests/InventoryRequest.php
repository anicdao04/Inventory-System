<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventoryRequest extends FormRequest
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
            'or_no' => 'required|min:3|max:25|unique:inventories',
            'serial_no' => 'unique:inventories|nullable',
        ];
    }

    public function messages()
    {
        return [
            'or_no.min' => 'OR No. must be at least 3 characters.',
            'or_no.max' => 'OR No. must not be greater than 25 characters.',
            'or_no.unique' => 'OR No. has already been taken.',

            'serial_no.unique' => 'Serial No. has already been taken.',

            
        ];
    }
}

