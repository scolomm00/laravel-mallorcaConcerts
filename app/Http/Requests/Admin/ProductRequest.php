<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'title' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'features' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'title.required' => 'El título es obligatorio',
            'price.required' => 'El precio es obligatorio',
            'price.numeric' => 'El precio no es válido',
            'description.required' => 'La descripción es obligatoria',
            'features.required' => 'Las características son obligatorias',
        ];
    }
}
