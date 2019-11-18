<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressStoreRequest extends FormRequest
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
            'zipcode' => 'required',
            'state' => 'required',
            'town' => 'required',
            'suburb' => 'required',
            'street' => 'required',
            'phone' => 'required',
            'additional_directions' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'zipcode.required' => 'El código postal es obligatorio.',
            'state.required' => 'El estado es obligatorio.',
            'town.required' => 'El municipio es obligatorio.',
            'suburb.required' => 'La colonia es obligatoria.',
            'street.required' => 'La calle es obligatoria.',
            'phone.required' => 'El numero telefonico es obligatorio.',
        ];
    }
}
