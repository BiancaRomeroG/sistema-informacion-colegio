<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePagoSalario extends FormRequest
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
            'monto'    => 'required',
            'pago'    => 'required|numeric|between:1,10',
        ];
    }

    public function attributes()
    {
        return [
            'monto' => '',
            'pago' => '',
        ];
    }
}
