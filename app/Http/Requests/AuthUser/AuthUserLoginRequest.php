<?php

namespace App\Http\Requests\AuthUser;

use Illuminate\Foundation\Http\FormRequest;

class AuthUserLoginRequest extends FormRequest
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
            'login' => 'required',
            'senha' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'login.required' => 'Login Obrigatorio',
            'senha.required' => 'Senha obrigatoria'
        ];
    }
}
