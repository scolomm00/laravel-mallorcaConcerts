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
            'tax_id' => 'required|numeric',
            'description' => 'required',
            'features' => 'required',
            'day' => 'required',
            'hour' => 'required',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'title.required' => 'El título es obligatorio',
            'price.required' => 'El precio es obligatorio',
            'price.numeric' => 'El precio no es válido',
            'tax_id.required' => 'El iva es obligatorio',
            'tax_id.numeric' => 'El iva no es válido',
            'description.required' => 'La descripción es obligatoria',
            'features.required' => 'Las características son obligatorias',
            'day.required' => 'El día es obligatorio',
            'hour.required' => 'La hora es obligatoria',
            'address.required' => 'La dirección es obligatoria',
        ];
    }
}
