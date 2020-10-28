<?php

namespace App\Http\Requests;

use App\Models\AlcanceSgsi;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAlcanceSgsiRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('alcance_sgsi_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:alcance_sgsis,id',
        ];
    }
}
