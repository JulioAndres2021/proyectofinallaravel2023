<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTurnoRequest extends FormRequest
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
            'medico_id' => 'required', 'string', 'max:1',
            'fecha' => 'required', 'string', 'max:50',
            't800' =>  'string', 'max:50',
            't815' =>  'string', 'max:50',
            't830' =>  'string', 'max:50',
            't845' =>  'string', 'max:50',
            't900' =>  'string', 'max:50',
            't915' =>  'string', 'max:50',
            't930' =>  'string', 'max:50',
            't945' =>  'string', 'max:50',
            't1000' =>  'string', 'max:50',
            't1015' =>  'string', 'max:50',
            't1030' =>  'string', 'max:50',
            't1045' =>  'string', 'max:50',
            't1100' =>  'string', 'max:50',
            't1115' =>  'string', 'max:50',
            't1130' =>  'string', 'max:50',
            't1145' =>  'string', 'max:50',
            't1200' => 'string', 'max:50',
            't1215' => 'string', 'max:50',
            't1230' => 'string', 'max:50',
            't1245' => 'string', 'max:50',
            't1600' => 'string', 'max:50',
            't1615' => 'string', 'max:50',
            't1630' => 'string', 'max:50',
            't1645' => 'string', 'max:50',
            't1700' => 'string', 'max:50',
            't1715' => 'string', 'max:50',
            't1730' => 'string', 'max:50',
            't1745' => 'string', 'max:50',
            't1800' => 'string', 'max:50',
            't1815' => 'string', 'max:50',
            't1830' => 'string', 'max:50',
            't1845' => 'string', 'max:50',
            't1900' => 'string', 'max:50',
            't1915' => 'string', 'max:50',
            't1930' => 'string', 'max:50',
            't1945' => 'string', 'max:50',
            't2000' => 'string', 'max:50',
            't2015' => 'string', 'max:50',
            't2030' => 'string', 'max:50',
            't2045' => 'string', 'max:50',
        ];
    }
}
