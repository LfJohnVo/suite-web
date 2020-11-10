<?php

namespace App\Http\Requests;

use App\Models\PartesInteresada;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePartesInteresadaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('partes_interesada_edit');
    }

    public function rules()
    {
        return [
            'parteinteresada' => [
                'string',
                'required',
            ],
            'requisitos'      => [
                'string',
                'required',
            ],
        ];
    }
}
