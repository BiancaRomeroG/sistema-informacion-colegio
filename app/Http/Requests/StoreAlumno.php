<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumno extends FormRequest
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
            'nombre'        => 'required',
            'apellido_pat'  => 'required',
            'apellido_mat'  => 'required',
            'ci'            => 'required',
            'fecha_nac'     => 'required',
            'sexo'          => 'required',
            'email'         => 'required',
            'direccion'     => 'required',
            'telefono'      => 'required',
            'codrude'       => 'required',
            'tutor_id'      => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'nombre'        => '',
            'apellido_pat'  => '',
            'apellido_mat'  => '',
            'ci'            => '',
            'fecha_nac'     => '',
            'email'         => '',
            'direccion'     => '',
            'telefono'      => '',
            'codrude'       => '',
        ];
    }

    public function messages()
    {
        return [
            'sexo.required'     => 'Eliga una opción.',
            'tutor_id.required' => 'Seleccione un tutor.'
        ];
    }
}
