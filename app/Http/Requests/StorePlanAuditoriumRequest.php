<?php

namespace App\Http\Requests;

use App\Models\PlanAuditorium;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePlanAuditoriumRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('plan_auditorium_create');
    }

    public function rules()
    {
        return [
            'equipoauditor' => [
                'string',
                'nullable',
            ],
            'auditados.*'   => [
                'integer',
            ],
            'auditados'     => [
                'array',
            ],
        ];
    }
}
