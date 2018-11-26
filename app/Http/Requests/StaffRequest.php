<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
          'login' => 'required|string|max:255|unique:users',
          'email' => 'required|email|unique:users',
          'lastName' => 'required|string|between:3,255',
          'firstName' => 'required|string|between:3,255',
          'phone' => 'required|string|digits:8',
          'office' => 'required|string|max:255',
          'rank' => 'required|numeric',
          'school_id' => 'required|numeric',
        ];
    }
}
