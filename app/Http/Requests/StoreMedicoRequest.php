<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicoRequest extends FormRequest
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
                'especialidad' => 'required', 'string', 'max:50',
                'horarios' => 'required', 'string', 'max:15',
                // 'lunes' => 'required' ,
                // 'martes' => 'required',
                // 'miercoles' => 'required',
                // 'jueves' => 'required',
                // 'viernes' => 'required',
                // 'sabado' => 'required',
                'atiende' => 'required', 'string', 'max:2',
                'matricula' => 'required', 'string', 'max:50',
                'cada' => 'required', 'string', 'max:2',
    
        ];
    }
}
