<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyControlDocumentoRequest;
use App\Http\Requests\StoreControlDocumentoRequest;
use App\Http\Requests\UpdateControlDocumentoRequest;
use App\Models\ControlDocumento;
use App\Models\EstadoDocumento;
use App\Models\Team;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ControlDocumentosController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('control_documento_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $controlDocumentos = ControlDocumento::with(['elaboro', 'reviso', 'estado', 'team'])->get();

        $users = User::get();

        $estado_documentos = EstadoDocumento::get();

        $teams = Team::get();

        return view('admin.controlDocumentos.index', compact('controlDocumentos', 'users', 'estado_documentos', 'teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('control_documento_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $elaboros = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $revisos = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $estados = EstadoDocumento::all()->pluck('estado', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.controlDocumentos.create', compact('elaboros', 'revisos', 'estados'));
    }

    public function store(StoreControlDocumentoRequest $request)
    {
        $controlDocumento = ControlDocumento::create($request->all());

        return redirect()->route('admin.control-documentos.index');
    }

    public function edit(ControlDocumento $controlDocumento)
    {
        abort_if(Gate::denies('control_documento_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $elaboros = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $revisos = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $estados = EstadoDocumento::all()->pluck('estado', 'id')->prepend(trans('global.pleaseSelect'), '');

        $controlDocumento->load('elaboro', 'reviso', 'estado', 'team');

        return view('admin.controlDocumentos.edit', compact('elaboros', 'revisos', 'estados', 'controlDocumento'));
    }

    public function update(UpdateControlDocumentoRequest $request, ControlDocumento $controlDocumento)
    {
        $controlDocumento->update($request->all());

        return redirect()->route('admin.control-documentos.index');
    }

    public function destroy(ControlDocumento $controlDocumento)
    {
        abort_if(Gate::denies('control_documento_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $controlDocumento->delete();

        return back();
    }

    public function massDestroy(MassDestroyControlDocumentoRequest $request)
    {
        ControlDocumento::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
