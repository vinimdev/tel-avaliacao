<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        $states = implode(',', config('constants.listState'));

        $rules = [
            'name' => 'required',
            'cpf' => 'required|min:14|max:14',
            'rg' => 'required_if:state,SP',
            'birth_date' => 'required|date|after_or_equal:'.now()->addYears(-123)->format("Y-m-d"),
            'phone' => 'required|min:14|max:15',
            'state' => 'required|in:' . $states
        ];

        if(request()->get('state') == 'BA') {
                $rules['birth_date'] = 'required|date|before_or_equal:'.now()->subYears(18)->format("Y-m-d").'|after_or_equal:'.now()->addYears(-123)->format("Y-m-d");
            }

        return $rules;
    }

    public function messages()
    {
        return [
            'birth_date.required' => 'O campo Data de Nascimento é obrigatório.',
            'birth_date.before_or_equal' => 'Você deve possuir idade superior a 18 anos.',
            'birth_date.after_or_equal' => 'Você deve inserir a data de nascimento corretamente.',
            'phone.required' => 'O campo Telefone é obrigatório.',
            'state.required' => 'O campo Estado é obrigatório.',
        ];
    }
}
