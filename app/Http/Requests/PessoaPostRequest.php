<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaPostRequest extends FormRequest
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
            'cpf' => ['required', 'unique:pessoas', 'max:255'],
            'email' => ['nullable', 'unique:pessoas', 'max:255'],
            
        ];
    }

    public function messages()
    {
        return [
            'cpf.unique' => 'Este CPF já existe',
            'email.unique' => 'Este e-mail já existe'
        ];
    }
}
