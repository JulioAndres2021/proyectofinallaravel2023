<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
                'nombre' => 'required', 'string', 'max:50',
                'apellido' => 'required', 'string', 'max:50',
                'dni' => 'required', 'integer', 'max:8',
                'direccion' => 'string', 'max:100' ,
                'localidad' => 'string', 'max:100' ,
                'provincia' => 'string', 'max:100',
                'telefono' => 'string', 'max:50',
                'mail' => 'string', 'max:100',
                'obrasocial' => 'string', 'max:50',
                'ocupacion' => 'string', 'max:100',
        ];
    }
}
