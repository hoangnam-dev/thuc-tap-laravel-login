<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => ['required', 'max:45'],
            'password' => ['required', 'max:255']
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Trường Username không được để trống',
            'username.max' => 'Độ dài trường Username không được vượt quá :max',
            'password.required' => 'Username không được để trống',
            'password.max' => 'Độ dài trường Password không được vượt quá :max',
        ];
    }
}
