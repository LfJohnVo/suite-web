<?php

namespace App\Http\Requests;

use App\Models\Recurso;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRecursoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('recurso_edit');
    }

    public function rules()
    {
        return [
            'tipo' => [
                'required'
            ],
            'fecha_curso' => [
                'date',
                'required',
            ],
            'fecha_fin' => [
                'date',
                'required',
            ],
            'instructor' => [
                'string',
                'required',
            ],
            'cursoscapacitaciones' => [
                'string',
                'required',
            ],
        ];
    }
}
