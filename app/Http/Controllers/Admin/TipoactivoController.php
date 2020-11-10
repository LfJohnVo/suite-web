<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyTipoactivoRequest;
use App\Http\Requests\StoreTipoactivoRequest;
use App\Http\Requests\UpdateTipoactivoRequest;
use App\Models\Team;
use App\Models\Tipoactivo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TipoactivoController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('tipoactivo_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Tipoactivo::with(['team'])->select(sprintf('%s.*', (new Tipoactivo)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'tipoactivo_show';
                $editGate      = 'tipoactivo_edit';
                $deleteGate    = 'tipoactivo_delete';
                $crudRoutePart = 'tipoactivos';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('tipo', function ($row) {
                return $row->tipo ? $row->tipo : "";
            });
            $table->editColumn('subtipo', function ($row) {
                return $row->subtipo ? $row->subtipo : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        $teams = Team::get();

        return view('admin.tipoactivos.index', compact('teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('tipoactivo_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tipoactivos.create');
    }

    public function store(StoreTipoactivoRequest $request)
    {
        $tipoactivo = Tipoactivo::create($request->all());

        return redirect()->route('admin.tipoactivos.index');
    }

    public function edit(Tipoactivo $tipoactivo)
    {
        abort_if(Gate::denies('tipoactivo_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tipoactivo->load('team');

        return view('admin.tipoactivos.edit', compact('tipoactivo'));
    }

    public function update(UpdateTipoactivoRequest $request, Tipoactivo $tipoactivo)
    {
        $tipoactivo->update($request->all());

        return redirect()->route('admin.tipoactivos.index');
    }

    public function show(Tipoactivo $tipoactivo)
    {
        abort_if(Gate::denies('tipoactivo_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tipoactivo->load('team');

        return view('admin.tipoactivos.show', compact('tipoactivo'));
    }

    public function destroy(Tipoactivo $tipoactivo)
    {
        abort_if(Gate::denies('tipoactivo_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tipoactivo->delete();

        return back();
    }

    public function massDestroy(MassDestroyTipoactivoRequest $request)
    {
        Tipoactivo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
