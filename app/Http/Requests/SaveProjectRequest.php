<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() // Se usa para saber Si el usuario esta autorizado
    {
        return true;//$this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()//Reglas de validacion
    {
        return [
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
        'title.required' => 'El proyecto necesita un titulo' //__(para traducir)
        ];
    }

}
