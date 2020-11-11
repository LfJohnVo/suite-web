<?php

namespace App\Http\Requests;

use App\Models\EvidenciasSgsi;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEvidenciasSgsiRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('evidencias_sgsi_create');
    }

    public function rules()
    {
        return [
            'objetivodocumento' => [
                'string',
                'required',
            ],
            'arearesponsable'   => [
                'string',
                'nullable',
            ],
            'fechadocumento'    => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
