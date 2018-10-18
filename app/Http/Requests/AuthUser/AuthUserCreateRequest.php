<?php

namespace App\Http\Requests\AuthUser;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
     * @return array
     */
    public function rules()
    {
        return [
            /*'g-recaptcha-response' => 'required|recaptcha',*/
            'login' => 'required|unique:user_webs,login|max:32',
            'senha' => 'required|min:6|max:64',
            'senha_confirm' => 'required|min:6|max:64|same:senha',
            'nome' => 'required|max:15',
            'sobrenome' => 'required|max:15',
            'email' => 'required|max:64|unique:user_webs,email|email',
            'sexo' => 'required',
            'nascimento' => 'required|date_format:"d/m/Y"|before:tomorrow'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
           /* 'g-recaptcha-response.required' => 'É necessário marcar o campo captcha.',
            'g-recaptcha-response.recaptcha' => 'Por favor, garanta que você é humano',*/
            'login.required' => 'Campo login é obrigatório.',
            'login.max' => 'Tamanho do login muito grande.',
            'login.unique' => 'Login inválido, tente outro diferente.',
            'senha.required' => 'Campos de senha é obrigatório.',
            'senha.max' => 'Tamanho da senha muito grande.',
            'senha.min' => 'Tamanho da senha muito pequeno, deve haver no mínimo 6 caracteres.',
            'senha_confirm.required' => 'Campos de confirmação de senha é obrigatório.',
            'senha_confirm.max' => 'Tamanho da confirmação de senha muito grande.',
            'senha_confirm.min' => 'Tamanho da confirmação de senha muito pequeno, deve ter no mínimo 6 caracteres.',
            'senha_confirm.same' => 'Senha e Confirmação de senha não conferem.',
            'nome.required' => 'Campo nome é obrigatório.',
            'nome.max' => 'Tamanho do nome muito grande.',
            'sobrenome.required' => 'Campo sobrenome é obrigatório.',
            'sobrenome.max' => 'Tamanho do sobrenome muito grande.',
            'email.required' => 'Campo email é obrigatório.',
            'email.max' => 'Tamanho do email muito grande.',
            'email.unique' => 'E-mail já cadastrado no sistema.',
            'email.email' => 'Por favor, o formato de e-mail está inválido.',
            'sexo.required' => 'Campo genero é obrigatório.',
            'sexo.max' => 'Tamanho do genero muito grande.',
            'nascimento.required' => 'Campo data de nascimento é obrigatório.',
            'nascimento.date_format' => 'Formato de data inválido.'
        ];
    }
}
