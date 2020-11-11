<?php

namespace App\Http\Requests;

use App\Models\ComunicacionSgi;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreComunicacionSgiRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('comunicacion_sgi_create');
    }

    public function rules()
    {
        return [
            'descripcion' => [
                'string',
                'required',
            ],
        ];
    }
}
