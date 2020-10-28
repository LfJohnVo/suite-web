<?php

namespace App\Http\Requests;

use App\Models\PlanMejora;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePlanMejoraRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('plan_mejora_create');
    }

    public function rules()
    {
        return [
            'fecha_compromiso' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
