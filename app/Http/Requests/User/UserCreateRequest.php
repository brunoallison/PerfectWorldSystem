<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserCreateRequest extends FormRequest
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
    /*public function rules()
    {
        return [
            'g-recaptcha-response' => 'required|recaptcha',
            'name' => [
                'alpha_num',
                'required',
                'max:32',
                Rule::unique('users')->ignore($this->ID)->where(function ($query) {
                    $query->where('name', $this->name);
                })
            ],
            'passwd' => 'required|min:6|max:64',
            'password_confirmation' => 'required|min:6|max:64|same:passwd',
            'truename' => 'required|max:32',
            'email' => 'required|max:64|unique:users,email|email',
            'Prompt' => 'required|max:32',
            'answer' => 'required|max:32',
            'gender' => 'required',
            'birthday' => 'required|date_format:"d/m/Y"|before:tomorrow'
        ];
    }*/

    public function rules()
    {
        return [
          'passwd' => 'required|min:6|max:64'
        ];
    }

    public function messages()
    {
        return [
            'passwd.min' => 'Senha deve conter no minimo 6 caracteres.',
            'passwd.max' => 'Senha deve conter no máximo 64 caracteres.'
        ];
    }

    /*public function messages()
    {
        return [
            'g-recaptcha-response.required' => 'É necessário marcar o campo captcha.',
            'g-recaptcha-response.recaptcha' => 'Por favor, garanta que você é humano',
            'name.required' => 'Campo login é obrigatório.',
            'name.alpha_num' => 'O nome do usuário deve ter apenas letras e números.',
            'name.max' => 'O nome de usuário deve ter no máximo 32 caracteres.',
            'name.unique' => 'Login inválido, tente outro diferente.',
            'passwd.required' => 'Campos de senha é obrigatório.',
            'passwd.max' => 'Senha muito grande.',
            'passwd.min' => 'Senha muito pequenoa, deve haver no mínimo 6 caracteres.',
            'password_confirmation.required' => 'Campos de confirmação de senha é obrigatório.',
            'password_confirmation.max' => 'Confirmação de senha muito grande.',
            'password_confirmation.min' => 'Confirmação de senha muito pequeno, deve ter no mínimo 6 caracteres.',
            'password_confirmation.same' => 'Senha e Confirmação de senha não conferem.',
            'truename.required' => 'Campo nome é obrigatório.',
            'truename.max' => 'Nome muito grande.',
            'email.required' => 'Campo email é obrigatório.',
            'email.max' => 'Email muito grande.',
            'email.unique' => 'Este email já está sendo usado.',
            'email.email' => 'Por favor, o formato de e-mail está inválido.',
            'Prompt.required' => 'Campo pergunta secreta é obrigatório.',
            'Prompt.max' => 'Pergunta muito grande.',
            'answer.required' => 'Campo resposta secreta é obrigatório.',
            'answer.max' => 'Tamanho da resposta muito grande.',
            'gender.required' => 'Gênero é obrigatório.',
            'gender.max' => 'Gênero muito grande.',
            'birthday.required' => 'Data de nascimento é obrigatório.',
            'gender.date_format' => 'Formato de data inválido.',
        ];
    }*/
}
