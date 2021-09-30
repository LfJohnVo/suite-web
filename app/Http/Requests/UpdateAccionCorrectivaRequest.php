<?php

namespace App\Http\Requests;

use App\Models\AccionCorrectiva;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAccionCorrectivaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('accion_correctiva_edit');
    }

    public function rules()
    {
        return [
            'fecharegistro'      => [
                'date',
                'nullable',
            ],
            'fecha_compromiso'   => [
                'date',
                'nullable',
            ],
            'fecha_verificacion' => [
                'date',
                'nullable',
            ],
        ];
    }
}
