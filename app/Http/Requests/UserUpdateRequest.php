<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
      $id = $this->user;
      return [
        'login' => 'required|string|between:3,255|unique:users,login,'.$id,
        'email' => 'required|string|email|max:255|unique:users,email,'.$id,
      ];
    }
}
