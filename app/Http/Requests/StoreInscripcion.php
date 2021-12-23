<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInscripcion extends FormRequest
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
            'curso'     => 'required',
            'id_alumno' => 'required',
        ];
    }
    
    public function attributes()
    {
        return [
            'curso' => '',
        ];
    }

    public function messages()
    {
        return[
            'id_alumno.required' => 'Por favor seleccione un alumno.'
        ];
    }
}
