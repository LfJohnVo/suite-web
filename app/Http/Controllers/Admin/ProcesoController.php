<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Documento;
use App\Models\EvaluacionIndicador;
use App\Models\Grupo;
use App\Models\HistorialVersionesDocumento;
use App\Models\IndicadoresSgsi;
use App\Models\Macroproceso;
use App\Models\MatrizRiesgo;
use App\Models\Proceso;
use App\Models\RevisionDocumento;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Laracasts\Flash\Flash;
use Yajra\DataTables\Facades\DataTables;

class ProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        abort_if(Gate::denies('configuracion_procesos_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if ($request->ajax()) {
            $query = Proceso::get();
            $table = DataTables::of($query);

            $table->addColumn('actions', '&nbsp;');
            $table->addIndexColumn();
            $table->editColumn('actions', function ($row) {
                $viewGate = 'recurso_show';
                $editGate = 'recurso_edit';
                $deleteGate = 'recurso_delete';
                $crudRoutePart = 'procesos';

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
            $table->editColumn('codigo', function ($row) {
                return $row->codigo ? $row->codigo : '';
            });
            $table->editColumn('nombre', function ($row) {
                return $row->nombre ? $row->nombre : '';
            });
            $table->editColumn('macroproceso', function ($row) {
                return $row->macroproceso->nombre ? $row->macroproceso->nombre : '';
            });
            $table->editColumn('descripcion', function ($row) {
                return $row->descripcion ? $row->descripcion : '';
            });

            // $table->rawColumns(['actions']);

            return $table->make(true);
        }

        return view('admin.procesos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('configuracion_procesos_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $macroproceso = DB::table('macroprocesos')->select('id', 'codigo', 'nombre')->get();

        return view('admin.procesos.create')->with('macroprocesos', $macroproceso);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'codigo' => 'required|string',
                'nombre' => 'required|string',
                'id_macroproceso' => 'required|integer',
                'descripcion' => 'required|string',
            ],
        );
        $procesos = proceso::create($request->all());
        Flash::success('<h5 class="text-center">Proceso agregado satisfactoriamente</h5>');

        return redirect()->route('admin.procesos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function show(Proceso $proceso)
    {
        abort_if(Gate::denies('configuracion_procesos_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.procesos.show', compact('proceso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function edit(Proceso $proceso)
    {
        abort_if(Gate::denies('configuracion_procesos_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $macroproceso = DB::table('macroprocesos')->select('id', 'codigo', 'nombre')->get();

        return view('admin.procesos.edit', compact('proceso'))->with('macroprocesos', $macroproceso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proceso $proceso)
    {
        $request->validate(
            [
                'codigo' => 'required|string',
                'nombre' => 'required|string',
                'id_macroproceso' => 'required|integer',
                'descripcion' => 'required|string',
            ],
        );
        $proceso->update($request->all());
        Flash::success('<h5 class="text-center">Proceso actualizado satisfactoriamente</h5>');

        return redirect()->route('admin.procesos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proceso $proceso)
    {
        abort_if(Gate::denies('configuracion_procesos_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $proceso->delete();
        Flash::success('<h5 class="text-center">Proceso eliminado satisfactoriamente</h5>');

        return redirect()->route('admin.procesos.index');
    }

    public function mapaProcesos()
    {
        abort_if(Gate::denies('mapa_procesos_organizacion_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $grupos_mapa = Grupo::with(['macroprocesos' => function ($q) {
            $q->with('procesosWithDocumento');
        }])->get();

        $macros_mapa = Macroproceso::get();
        $procesos_mapa = Proceso::get();
        $exist_no_publicado = Proceso::select('estatus')->where('estatus', Proceso::NO_ACTIVO)->exists();

        return view('admin.procesos.mapa_procesos', compact('grupos_mapa', 'macros_mapa', 'procesos_mapa', 'exist_no_publicado'));
    }

    public function obtenerDocumentoProcesos($documento)
    {
        $documento = Documento::with('elaborador', 'revisor', 'aprobador', 'responsable', 'macroproceso')->find($documento);

        $proceso = Proceso::where('documento_id', $documento->id)->first();
        $documentos_relacionados = Documento::with('elaborador', 'revisor', 'aprobador', 'responsable', 'macroproceso')->where('proceso_id', $proceso->id)->get();
        $revisiones = RevisionDocumento::with('documento', 'empleado')->where('documento_id', $documento->id)->get();
        // dd($revisiones);
        $versiones = HistorialVersionesDocumento::with('revisor', 'elaborador', 'aprobador', 'responsable')->where('documento_id', $documento->id)->get();
        $indicadores = IndicadoresSgsi::where('id_proceso',$proceso->id)->get();
        // dd($indicadores);
        $riesgos = MatrizRiesgo::with(['analisis_de_riesgo'=>function ($q) {
            $q->select('id', 'nombre');
        }])->where('id_proceso', $proceso->id)->get();
        $analisis_collect = collect();
        foreach ($riesgos as $riesgo) {
            $analisis_collect->push(['id'=>$riesgo->analisis_de_riesgo->id, 'nombre'=>$riesgo->analisis_de_riesgo->nombre]);
        }
        $analisis_collect = $analisis_collect->unique('id');
        $primer_analisis = [];
        if (count($analisis_collect)) {
            $primer_analisis = $analisis_collect->first()['id'];
        }
        // dd($primer_analisis['id']);
        // dd($indicadores::getResultado());

        return view('admin.procesos.vistas', compact('documento', 'revisiones', 'documentos_relacionados', 'versiones', 'indicadores', 'riesgos', 'analisis_collect', 'primer_analisis'));
    }

    public function AjaxRequestIndicador(Request $request)
    {
        $input = $request->all();

        $unidad = IndicadoresSgsi::select('unidadmedida')->where('id', $input['id'])->first();

        $res = '<div id="resultado" width="900" height="750"></div>';

        $barras = '<canvas id="resultadobarra" width="900" height="750"></canvas>';


        $evaluaciones = EvaluacionIndicador::select('fecha', 'resultado')->where('id_indicador', $input['id'])->get();
        foreach ($evaluaciones as $evaluacion) {
            $evaluacion->fecha = Carbon::parse($evaluacion->fecha)->format('d-m-Y');
        }


        $porcentaje = number_format(($input['resultado'] * 100) / $input['meta'], 2);

        return response()->json(['gauge' => $res, 'barraschart' => $barras, 'datosbarra' => $evaluaciones, 'datos' => $input, 'unidad' => $unidad, 'porcentaje' => $porcentaje], 200);
    }

    public function AjaxRequestRiesgos(Request $request)
    {
        $input = $request->all();

        $data = MatrizRiesgo::select('id', 'descripcionriesgo', 'nivelriesgo', 'nivelriesgo_residual', 'meta')->where('id', $input['id'])->first();

        $res = '<div id="resultado_riesgos" width="900" height="750"></div>';

        $barras = '<canvas id="resultadobarra_riesgos" width="900" height="750"></canvas>';

        /*$evaluaciones = EvaluacionIndicador::select('fecha', 'resultado')->where('id_indicador', $input['id'])->get();
        foreach ($evaluaciones as $evaluacion) {
            $evaluacion->fecha = Carbon::parse($evaluacion->fecha)->format('d-m-Y');
        }*/

        return response()->json(['gauge_riesgos' => $res, 'barraschart_riesgos' => $barras, 'datosbarra_riesgos' => $data, 'datos_riesgos' => $data, 'meta_riesgos' => $request->meta], 200);
    }
}
