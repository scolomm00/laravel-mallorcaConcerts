<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required|min:9|max:9|regex:/^[0-9]+$/i',
            'email' => ['required','email','max:255', Rule::unique('customers')->ignore($this->id)],
            'city' => 'required',
            'postal_code' => 'required|min:5|max:5|regex:/^[0-9]+$/i',
            'address' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'surname.required' => 'El apellido es obligatorio',
            'phone.required' => 'El teléfono es obligatorio',
            'phone.min' => 'El mínimo de caracteres permitidos para el teléfono son 9',
            'phone.max' => 'El máximo de caracteres permitidos para el teléfono son 9',
            'phone.regex' => 'Sólo se aceptan números para el teléfono',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El formato de email es incorrecto',
            'email.max' => 'El máximo de caracteres permitidos para el email son 255',
            'email.unique' => 'El email ya existe',
            'city.required' => 'La ciudad es obligatoria',
            'city.regex' => 'Sólo se aceptan letras para la ciudad',
            'postal_code.required' => 'El código postal es obligatorio',
            'postal_code.min' => 'El mínimo de caracteres permitidos para el código postal son 5',
            'postal_code.max' => 'El máximo de caracteres permitidos para el código postal son 5',
            'postal_code.regex' => 'Sólo se aceptan números para el código postal',
            'address.required' => 'La dirección es obligatoria'
        ];
    }
}
