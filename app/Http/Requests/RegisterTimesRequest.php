<?php

namespace App\Http\Requests;

class RegisterTimesRequest extends BaseRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'timesheet.*.proyecto' => 'required',
            'timesheet.*.tarea' => 'required',
            'fecha_dia' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'timesheet.*.proyecto.required' => 'Selecciona proyecto',
            'timesheet.*.tarea.required' => 'Selecciona tarea',
            'fecha_dia.required' => 'Selecciona fecha',
        ];
    }
}
