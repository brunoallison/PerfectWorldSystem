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
    public function rules()
    {
        return [
            'g-recaptcha-response' => 'required|recaptcha',
            'name' => [
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
            'qq' => 'required|max:32',
            'answer' => 'required|max:32',
            'gender' => 'required',
            'birthday' => 'required|date_format:"d/m/Y"|before:tomorrow'
        ];
    }

    public function messages()
    {
        return [
            'g-recaptcha-response.required' => 'É necessário marcar a opção Não sou um robô.',
            'g-recaptcha-response.recaptcha' => 'Confirmação do reCaptcha incorreta. Tente novamente.',
            'name.required' => 'Campo login é obrigatório.',
            'name.max' => 'Tamanho do login muito grande.',
            'name.unique' => 'Login inválido, tente outro diferente.',
            'passwd.required' => 'Campos de senha é obrigatório.',
            'passwd.max' => 'Tamanho da senha muito grande.',
            'passwd.min' => 'Tamanho da senha muito pequeno, deve haver no mínimo 6 caracteres.',
            'password_confirmation.required' => 'Campos de confirmação de senha é obrigatório.',
            'password_confirmation.max' => 'Tamanho da confirmação de senha muito grande.',
            'password_confirmation.min' => 'Tamanho da confirmação de senha muito pequeno, deve ter no mínimo 6 caracteres.',
            'password_confirmation.same' => 'Senha e Confirmação de senha não conferem.',
            'truename.required' => 'Campo nome é obrigatório.',
            'truename.max' => 'Tamanho do nome muito grande.',
            'email.required' => 'Campo email é obrigatório.',
            'email.max' => 'Tamanho do email muito grande.',
            'email.unique' => 'E-mail já cadastrado no sistema.',
            'email.email' => 'Por favor, o formato de e-mail está inválido.',
            'qq.required' => 'Campo pergunta secreta é obrigatório.',
            'qq.max' => 'Tamanho da pergunta muito grande.',
            'answer.required' => 'Campo resposta secreta é obrigatório.',
            'answer.max' => 'Tamanho da resposta muito grande.',
            'gender.required' => 'Campo genero é obrigatório.',
            'gender.max' => 'Tamanho do genero muito grande.',
            'birthday.required' => 'Campo data de nascimento é obrigatório.',
            'gender.date_format' => 'Formato de data inválido.',
        ];
    }
}
