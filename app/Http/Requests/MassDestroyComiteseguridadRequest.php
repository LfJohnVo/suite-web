<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyComiteseguridadRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('comiteseguridad_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids' => 'required|array',
            'ids.*' => 'exists:comiteseguridads,id',
        ];
    }
}
