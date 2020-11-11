<?php

namespace App\Http\Requests;

use App\Models\InformacionDocumetada;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInformacionDocumetadaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('informacion_documetada_edit');
    }

    public function rules()
    {
        return [
            'titulodocumento' => [
                'string',
                'required',
            ],
            'identificador'   => [
                'string',
                'nullable',
            ],
            'version'         => [
                'numeric',
                'min:1',
                'max:99',
            ],
            'politicas.*'     => [
                'integer',
            ],
            'politicas'       => [
                'array',
            ],
        ];
    }
}
