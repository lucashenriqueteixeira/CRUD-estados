<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cadastroEstadosValidation extends FormRequest
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
            'nome' => 'required',
            'sigla' => 'required| max:2',
            'historico' => 'required | max:2',
        ];
    }
}
