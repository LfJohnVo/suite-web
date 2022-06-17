<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanificacionControlRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('planificacion_y_control_editar');
    }

    public function rules()
    {
        return [
            'activo'           => [
                'string',
                'required',
            ],
            'vulnerabilidad'   => [
                'string',
                'nullable',
            ],
            'amenaza'          => [
                'string',
                'nullable',
            ],
            'confidencialidad' => [
                'string',
                'nullable',
            ],
            'integridad'       => [
                'string',
                'nullable',
            ],
            'disponibilidad'   => [
                'string',
                'nullable',
            ],
            'probabilidad'     => [
                'string',
                'nullable',
            ],
            'impacto'          => [
                'string',
                'nullable',
            ],
            'nivelriesgo'      => [
                'string',
                'nullable',
            ],
        ];
    }
}
