<?php

namespace App\Http\Controllers\Frontend;

use App\Functions\GeneratePdf;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPartesInteresadaRequest;
use App\Http\Requests\StorePartesInteresadaRequest;
use App\Http\Requests\UpdatePartesInteresadaRequest;
use App\Models\Clausula;
use App\Models\PartesInteresada;
use App\Models\Team;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PartesInteresadasController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('partes_interesada_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = PartesInteresada::with(['team', 'clausulas'])->select(sprintf('%s.*', (new PartesInteresada)->table))->orderByDesc('id');
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'partes_interesada_show';
                $editGate = 'partes_interesada_edit';
                $deleteGate = 'partes_interesada_delete';
                $crudRoutePart = 'partes-interesadas';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('parteinteresada', function ($row) {
                return $row->parteinteresada ? $row->parteinteresada : '';
            });
            $table->editColumn('requisitos', function ($row) {
                return $row->requisitos ? $row->requisitos : '';
            });
            $table->editColumn('clausala', function ($row) {
                return $row->clausulas ? $row->clausulas : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        $teams = Team::get();

        return view('frontend.partesInteresadas.index', compact('teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('partes_interesada_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $clausulas = Clausula::all();

        return view('frontend.partesInteresadas.create', compact('clausulas'));
    }

    public function store(StorePartesInteresadaRequest $request)
    {
        $partesInteresada = PartesInteresada::create($request->all());
        $partesInteresada->clausulas()->sync($request->clausulas);
        //dd($request['pdf-value'], $request->all());
        //  $generar = new GeneratePdf();
        //$generar->Generate($request['pdf-value'], $request);
        //  $generar->Generate($request['pdf-value'], $partesInteresada);
        return redirect()->route('partes-interesadas.index')->with('success', 'Guardado con éxito');
    }

    public function edit(PartesInteresada $partesInteresada)
    {
        abort_if(Gate::denies('partes_interesada_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $clausulas = Clausula::all();
        $partesInteresada->load('team');

        return view('frontend.partesInteresadas.edit', compact('partesInteresada', 'clausulas'));
    }

    public function update(UpdatePartesInteresadaRequest $request, PartesInteresada $partesInteresada)
    {
        $partesInteresada->update($request->all());
        $clausulas = Clausula::all();

        return redirect()->route('partes-interesadas.index')->with('success', 'Editado con éxito');
    }

    public function show(PartesInteresada $partesInteresada)
    {
        abort_if(Gate::denies('partes_interesada_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partesInteresada->load('team');

        return view('frontend.partesInteresadas.show', compact('partesInteresada'));
    }

    public function destroy(PartesInteresada $partesInteresada)
    {
        abort_if(Gate::denies('partes_interesada_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partesInteresada->delete();

        return back()->with('deleted', 'Registro eliminado con éxito');
    }

    public function massDestroy(MassDestroyPartesInteresadaRequest $request)
    {
        PartesInteresada::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
