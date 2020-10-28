<?php

namespace App\Http\Requests;

use App\Models\Objetivosseguridad;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateObjetivosseguridadRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('objetivosseguridad_edit');
    }

    public function rules()
    {
        return [
            'objetivoseguridad' => [
                'string',
                'required',
            ],
            'indicador'         => [
                'string',
                'nullable',
            ],
            'anio'              => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
