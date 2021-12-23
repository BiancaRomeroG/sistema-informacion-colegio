<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            'nivel' => 'required',
            'cupos_max' => 'required|numeric|between:10,40'
        ];
    }

    public function attributes()
    {
        return[
            'nivel' => '',
            'cupos_max' => '',
        ];
    }
}
