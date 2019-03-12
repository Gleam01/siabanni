<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
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
            'firstName' => 'required|string|between:3,255',
            'lastName' => 'required|string|between:3,255',
            'birthday' => 'required|date|before:01 January 2003',
            'placeOfBirth' => 'required|string|max:255',
            'phone' => 'required|string|digits:8',
            'sex' => 'required|string|max:10',
            'country' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'training_id' => 'required|numeric',
            'cycle' => 'required|string'
        ];
    }
}
