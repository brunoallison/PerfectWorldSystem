<?php

namespace App\Http\Requests\AuthUser;

use Illuminate\Foundation\Http\FormRequest;

class AuthUserCreateRequest extends FormRequest
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
            'passwd' => 'required|min:6|max:64',
            'truename' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'passwd.min' => 'Senha deve conter no minimo 6 caracteres.',
            'passwd.max' => 'Senha deve conter no máximo 64 caracteres.',
            'truename.required' => 'x'
        ];
    }
}
