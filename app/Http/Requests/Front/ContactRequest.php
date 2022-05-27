<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]{9}$/',
            'message' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'surname.required' => 'El apellido es obligatorio',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El email no es válido',
            'phone.required' => 'El teléfono es obligatorio',
            'phone.regex' => 'El teléfono no es válido',
            'message.required' => 'El mensaje es obligatorio',
        ];
    }
}
