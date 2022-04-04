<?php

namespace App\Http\Controllers\admin;

use App\Models\Empleado;
use Illuminate\Http\Request;
use App\Models\CartaAceptacion;
use App\Mail\CartaAceptacionEmail;
use App\Models\MatrizOctaveProceso;
use App\Http\Controllers\Controller;
use App\Models\CartaAceptacionPivot;
use Illuminate\Support\Facades\Mail;
use App\Models\DeclaracionAplicabilidad;
use Yajra\DataTables\Facades\DataTables;
use App\Models\CartaAceptacionAprobacione;

class CartaAceptacionRiesgosController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = CartaAceptacion::get();
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'analisis_de_riesgos_vulnerabilidades_edit';
                $editGate = 'analisis_de_riesgos_vulnerabilidades_show';
                $deleteGate = 'analisis_de_riesgos_vulnerabilidades_delete';
                $crudRoutePart = 'carta-aceptacion';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            // $table->editColumn('id', function ($row) {
            //     return $row->id ? $row->id : '';
            // });
            $table->editColumn('riesgo', function ($row) {
                return $row->folio_riesgo ? $row->folio_riesgo : '';
            });
            $table->editColumn('fecharegistro', function ($row) {
                return $row->fecharegistro ? $row->fecharegistro : '';
            });

            $table->editColumn('fechaaprobacion', function ($row) {
                return $row->fechaaprobacion ? $row->fechaaprobacion : '';
            });

            $table->editColumn('responsables', function ($row) {
                return $row->responsables ? $row->responsables->name : '';
            });

            $table->editColumn('activo_folio', function ($row) {
                return $row->activo_folio ? $row->activo_folio : '';
            });

            $table->editColumn('nombre_activo', function ($row) {
                return $row->nombre_activo ? $row->nombre_activo : '';
            });

            $table->editColumn('criticidad_activo', function ($row) {
                return $row->criticidad_activo ? $row->criticidad_activo : '';
            });

            $table->editColumn('confidencialidad', function ($row) {
                return $row->confidencialidad ? $row->confidencialidad : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.CartaAceptacionRiesgos.index');
    }

    public function create(Request $request)
    {
        $responsables = Empleado::get();
        $directoresRiesgo = Empleado::get();
        $presidencias = Empleado::get();
        $vicepresidentesOperaciones = Empleado::get();
        $vicepresidentes = Empleado::get();
        $controles = DeclaracionAplicabilidad::select('id', 'anexo_indice', 'anexo_politica')->get();

        return view('admin.CartaAceptacionRiesgos.create', compact('controles', 'vicepresidentes', 'vicepresidentesOperaciones', 'presidencias', 'directoresRiesgo', 'responsables'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'responsable_id' => 'required',
            'director_resp_id' => 'required',
            'vp_responsable_id' => 'required',
            'vice_operaciones_id' => 'required',
            'presidencia_id' => 'required',
            'folio_riesgo'=> 'required',
            'fecharegistro'=> 'required',
            'proceso_id'=> 'required',
            'descripcion_negocio'=> 'required',
            'descripcion_riesgo'=> 'required',
            'descripcion_tecnologico'=> 'required',
            'aceptacion_riesgo'=> 'required',

        ]);

        $cartaAceptacion = CartaAceptacion::create([
            'folio_riesgo'=> $request->folio_riesgo,
            'fecharegistro'=> $request->fecharegistro,
            'fechaaprobacion'=> $request->fechaaprobacion,
            'responsable_id'=> $request->responsable_id,
            'activo_folio'=> $request->activo_folio,
            'nombre_activo'=> $request->nombre_activo,
            'criticidad_activo'=> $request->criticidad_activo,
            'confidencialidad'=> $request->confidencialidad,
            'descripcion_negocio'=> $request->descripcion_negocio,
            'descripcion_riesgo'=> $request->descripcion_riesgo,
            'descripcion_tecnologico'=> $request->descripcion_tecnologico,
            'legal'=> $request->legal,
            'cumplimiento'=> $request->cumplimiento,
            'reputacional'=> $request->reputacional,
            'operacional'=> $request->operacional,
            'financiero'=> $request->financiero,
            'tecnologico'=> $request->tecnologico,
            'aceptacion_riesgo'=> $request->aceptacion_riesgo,
            'hallazgo'=> $request->hallazgo,
            'controles_compensatorios'=> $request->controles_compensatorios,
            'recomendaciones'=> $request->recomendaciones,
            'controles_id'=> $request->controles_id,
            'director_resp_id'=> $request->director_resp_id,
            'fecha_aut_direct'=> $request->fecha_aut_direct,
            'vp_responsable_id'=> $request->vp_responsable_id,
            'fecha_vp_aut'=> $request->fecha_vp_aut,
            'presidencia_id'=> $request->presidencia_id,
            'fecha_aut_presidencia'=> $request->fecha_aut_presidencia,
            'vice_operaciones_id'=> $request->vice_operaciones_id,
            'fecha_aut_viceoperaciones'=> $request->fecha_aut_viceoperaciones,
            'proceso_id'=> $request->proceso_id,
            'hallazgos_auditoria'=> $request->hallazgos_auditoria,
        ]);

        foreach ($request->controles_id as $item) {
            $control = new CartaAceptacionPivot();
            $control->carta_id = $cartaAceptacion->id;
            $control->controles_id = $item;
            $control->save();
        }

       $this->enviarCorreos($request, $cartaAceptacion);
        // // dd($request->all());
        return redirect(route('admin.carta-aceptacion.index'));
    }

    public function update(Request $request, CartaAceptacion $cartaAceptacion)
    {
        $cartaAceptacion->update($request->all());
        // $cartaAceptacion = CartaAceptacion::create($request->all());

        return redirect(route('admin.carta-aceptacion.index'));
    }

    public function edit($cartaAceptacion)
    {
        $cartaAceptacion = CartaAceptacion::find($cartaAceptacion);
        $responsables = Empleado::get();
        $directoresRiesgo = Empleado::get();
        $presidencias = Empleado::get();
        $vicepresidentesOperaciones = Empleado::get();
        $vicepresidentes = Empleado::get();
        $controles = DeclaracionAplicabilidad::select('id', 'anexo_indice', 'anexo_politica')->get();

        return view('admin.CartaAceptacionRiesgos.edit', compact('cartaAceptacion', 'controles', 'vicepresidentes', 'vicepresidentesOperaciones', 'presidencias', 'directoresRiesgo', 'responsables'));
    }

    public function show($cartaAceptacion)
    {

        // $controles =DeclaracionAplicabilidad::where('carta_id','=',$cartaAceptacion->id)->get();
        $cartaAceptacion = CartaAceptacion::find($cartaAceptacion);
        // dd($cartaAceptacion->controles);
        $responsables = Empleado::get();
        $directoresRiesgo = Empleado::get();
        $presidencias = Empleado::get();
        $vicepresidentesOperaciones = Empleado::get();
        $vicepresidentes = Empleado::get();
        $controles = CartaAceptacionPivot::with('declaracion_aplicabilidad')->where('carta_id', $cartaAceptacion->id)->get();
        // dd($controles);
        $aprobadores=CartaAceptacionAprobacione::where('carta_id',$cartaAceptacion->id)->pluck('aprobador_id')->toArray();
        // dd($aprobadores);
        $esAprobador=in_array(auth()->user()->empleado->id,$aprobadores);
        // dd($esAprobador);
        return view('admin.CartaAceptacionRiesgos.show', compact('esAprobador','aprobadores','cartaAceptacion', 'controles', 'vicepresidentes', 'vicepresidentesOperaciones', 'presidencias', 'directoresRiesgo', 'responsables'));
    }

    public function destroy(CartaAceptacion $cartaAceptacion)
    {
        $cartaAceptacion->delete();

        return back();
    }

    public function enviarCorreos($request, $cartaAceptacion)
    {
        CartaAceptacionAprobacione::create([
            'autoridad'=>'Dueño del Proceso',
            'aprobador_id'=>$request->responsable_id,
            'carta_id'=>$cartaAceptacion->id

        ]);
        $dueno=Empleado::select('id','name','email','genero','foto')->find($request->responsable_id);
        Mail::to($dueno->email)->send(new CartaAceptacionEmail($dueno,$cartaAceptacion));


        CartaAceptacionAprobacione::create([
            'autoridad'=>'Director Responsable del Proceso',
            'aprobador_id'=>$request->director_resp_id,
            'carta_id'=>$cartaAceptacion->id
        ]);

        $director=Empleado::select('id','name','email','genero','foto')->find($request->director_resp_id);
        Mail::to($director->email)->send(new CartaAceptacionEmail($director,$cartaAceptacion));

        CartaAceptacionAprobacione::create([
            'autoridad'=>'VP Responsable del Riesgo',
            'aprobador_id'=>$request->vp_responsable_id,
            'carta_id'=>$cartaAceptacion->id
        ]);

        $vpResponsable=Empleado::select('id','name','email','genero','foto')->find($request->vp_responsable_id);
        Mail::to($vpResponsable->email)->send(new CartaAceptacionEmail($vpResponsable,$cartaAceptacion));

        CartaAceptacionAprobacione::create([
            'autoridad'=>'VP de Operaciones',
            'aprobador_id'=>$request->vice_operaciones_id,
            'carta_id'=>$cartaAceptacion->id
        ]);

        $vpOperaciones=Empleado::select('id','name','email','genero','foto')->find($request->vice_operaciones_id);
        Mail::to($vpOperaciones->email)->send(new CartaAceptacionEmail($vpOperaciones,$cartaAceptacion));

        CartaAceptacionAprobacione::create([
            'autoridad'=>'Presidencia',
            'aprobador_id'=>$request->presidencia_id,
            'carta_id'=>$cartaAceptacion->id
        ]);

        $presidencia=Empleado::select('id','name','email','genero','foto')->find($request->presidencia_id);
        Mail::to($presidencia->email)->send(new CartaAceptacionEmail($presidencia,$cartaAceptacion));

    }
}
