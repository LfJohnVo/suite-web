<?php

namespace App\Http\Controllers\admin;

use App\Models\Area;
use App\Models\Sede;
use App\Models\Activo;
use App\Models\Quejas;
use App\Models\Mejoras;
use App\Models\Proceso;
use App\Models\Empleado;
use App\Models\Denuncias;
use App\Models\Sugerencias;
use Illuminate\Http\Request;
use App\Models\QuejasCliente;
use Illuminate\Http\Response;
use App\Models\TimesheetCliente;
use App\Models\TimesheetProyecto;
use App\Models\CategoriaIncidente;
use App\Models\RiesgoIdentificado;
use App\Models\IncidentesSeguridad;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Models\SubcategoriaIncidente;
use App\Models\AnalisisQuejasClientes;
use App\Models\EvidenciaQuejasClientes;
use App\Models\EvidenciasQuejasClientesCerrado;
use App\Models\AnalisisSeguridad; //mejora apunta a este modelo

class DeskController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('centro_atencion_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $incidentes_seguridad = IncidentesSeguridad::where('archivado', IncidentesSeguridad::NO_ARCHIVADO)->orderBy('id')->get();
        $riesgos_identificados = RiesgoIdentificado::orderBy('id')->get();
        $quejas = Quejas::orderBy('id')->get();
        $denuncias = Denuncias::orderBy('id')->get();
        $mejoras = Mejoras::orderBy('id')->get();
        $sugerencias = Sugerencias::orderBy('id')->get();

        $total_seguridad = IncidentesSeguridad::get()->count();
        $nuevos_seguridad = IncidentesSeguridad::where('estatus', 'nuevo')->get()->count();
        $en_curso_seguridad = IncidentesSeguridad::where('estatus', 'en curso')->get()->count();
        $en_espera_seguridad = IncidentesSeguridad::where('estatus', 'en espera')->get()->count();
        $cerrados_seguridad = IncidentesSeguridad::where('estatus', 'cerrado')->get()->count();
        $cancelados_seguridad = IncidentesSeguridad::where('estatus', 'cancelado')->get()->count();

        $total_riesgos = RiesgoIdentificado::get()->count();
        $nuevos_riesgos = RiesgoIdentificado::where('estatus', 'nuevo')->get()->count();
        $en_curso_riesgos = RiesgoIdentificado::where('estatus', 'en curso')->get()->count();
        $en_espera_riesgos = RiesgoIdentificado::where('estatus', 'en espera')->get()->count();
        $cerrados_riesgos = RiesgoIdentificado::where('estatus', 'cerrado')->get()->count();
        $cancelados_riesgos = RiesgoIdentificado::where('estatus', 'cancelado')->get()->count();

        $total_quejas = Quejas::get()->count();
        $nuevos_quejas = Quejas::where('estatus', 'nuevo')->get()->count();
        $en_curso_quejas = Quejas::where('estatus', 'en curso')->get()->count();
        $en_espera_quejas = Quejas::where('estatus', 'en espera')->get()->count();
        $cerrados_quejas = Quejas::where('estatus', 'cerrado')->get()->count();
        $cancelados_quejas = Quejas::where('estatus', 'cancelado')->get()->count();

        $total_quejasclientes = QuejasCliente::get()->count();
        $nuevos_quejasclientes = QuejasCliente::where('estatus', 'nuevo')->get()->count();
        $en_curso_quejasclientes = QuejasCliente::where('estatus', 'en curso')->get()->count();
        $en_espera_quejasclientes = QuejasCliente::where('estatus', 'en espera')->get()->count();
        $cerrados_quejasclientes = QuejasCliente::where('estatus', 'cerrado')->get()->count();
        $cancelados_quejasclientes = QuejasCliente::where('estatus', 'cancelado')->get()->count();

        $total_denuncias = Denuncias::get()->count();
        $nuevos_denuncias = Denuncias::where('estatus', 'nuevo')->get()->count();
        $en_curso_denuncias = Denuncias::where('estatus', 'en curso')->get()->count();
        $en_espera_denuncias = Denuncias::where('estatus', 'en espera')->get()->count();
        $cerrados_denuncias = Denuncias::where('estatus', 'cerrado')->get()->count();
        $cancelados_denuncias = Denuncias::where('estatus', 'cancelado')->get()->count();

        $total_mejoras = Mejoras::get()->count();
        $nuevos_mejoras = Mejoras::where('estatus', 'nuevo')->get()->count();
        $en_curso_mejoras = Mejoras::where('estatus', 'en curso')->get()->count();
        $en_espera_mejoras = Mejoras::where('estatus', 'en espera')->get()->count();
        $cerrados_mejoras = Mejoras::where('estatus', 'cerrado')->get()->count();
        $cancelados_mejoras = Mejoras::where('estatus', 'cancelado')->get()->count();

        $total_sugerencias = Sugerencias::get()->count();
        $nuevos_sugerencias = Sugerencias::where('estatus', 'nuevo')->get()->count();
        $en_curso_sugerencias = Sugerencias::where('estatus', 'en curso')->get()->count();
        $en_espera_sugerencias = Sugerencias::where('estatus', 'en espera')->get()->count();
        $cerrados_sugerencias = Sugerencias::where('estatus', 'cerrado')->get()->count();
        $cancelados_sugerencias = Sugerencias::where('estatus', 'cancelado')->get()->count();

        return view('admin.desk.index', compact(
            'incidentes_seguridad',
            'riesgos_identificados',
            'quejas',
            'denuncias',
            'mejoras',
            'sugerencias',
            'total_seguridad',
            'nuevos_seguridad',
            'en_curso_seguridad',
            'en_espera_seguridad',
            'cerrados_seguridad',
            'cancelados_seguridad',
            'total_riesgos',
            'nuevos_riesgos',
            'en_curso_riesgos',
            'en_espera_riesgos',
            'cerrados_riesgos',
            'cancelados_riesgos',
            'total_quejas',
            'nuevos_quejas',
            'en_curso_quejas',
            'en_espera_quejas',
            'cerrados_quejas',
            'cancelados_quejas',
            'total_denuncias',
            'nuevos_denuncias',
            'en_curso_denuncias',
            'en_espera_denuncias',
            'cerrados_denuncias',
            'cancelados_denuncias',
            'total_mejoras',
            'nuevos_mejoras',
            'en_curso_mejoras',
            'en_espera_mejoras',
            'cerrados_mejoras',
            'cancelados_mejoras',
            'total_sugerencias',
            'nuevos_sugerencias',
            'en_curso_sugerencias',
            'en_espera_sugerencias',
            'cerrados_sugerencias',
            'cancelados_sugerencias',
        ));
    }

    public function indexSeguridad()
    {
        $incidentes_seguridad = IncidentesSeguridad::with('asignado', 'reporto')->where('archivado', IncidentesSeguridad::NO_ARCHIVADO)->get();

        return datatables()->of($incidentes_seguridad)->toJson();
    }

    public function editSeguridad(Request $request, $id_incidente)
    {
        $incidentesSeguridad = IncidentesSeguridad::findOrfail(intval($id_incidente))->load('evidencias_seguridad');

        // $incidentesSeguridad = IncidentesSeguridad::findOrfail(intval($id_incidente));

        $analisis = AnalisisSeguridad::where('formulario', '=', 'seguridad')->where('seguridad_id', intval($id_incidente))->first();

        $activos = Activo::get();

        $empleados = Empleado::get();

        $sedes = Sede::get();

        $areas = Area::get();

        $procesos = Proceso::get();

        $subcategorias = SubcategoriaIncidente::get();

        $categorias = CategoriaIncidente::get();

        return view('admin.desk.seguridad.edit', compact('incidentesSeguridad', 'activos', 'empleados', 'sedes', 'areas', 'procesos', 'subcategorias', 'categorias', 'analisis'));
    }

    public function updateSeguridad(Request $request, $id_incidente)
    {
        $incidentesSeguridad = IncidentesSeguridad::findOrfail(intval($id_incidente));
        $incidentesSeguridad->update([
            'titulo' => $request->titulo,
            'estatus' => $request->estatus,
            'fecha' => $request->fecha,
            'empleado_asignado_id' => $request->empleado_asignado_id,
            'categoria' => $request->categoria,
            'subcategoria' => $request->subcategoria,
            'sede' => $request->sede,
            'ubicacion' => $request->ubicacion,
            'descripcion' => $request->descripcion,
            'fecha_cierre'=>$request->fecha_cierre,
            'areas_afectados' => $request->areas_afectados,
            'procesos_afectados' => $request->procesos_afectados,
            'activos_afectados' => $request->activos_afectados,

            'empleado_reporto_id' => $incidentesSeguridad->empleado_reporto_id,

            'urgencia' => $request->urgencia,
            'impacto' => $request->impacto,
            'prioridad' => $request->prioridad,
            'comentarios' => $request->comentarios,
        ]);

        return redirect()->route('admin.desk.index', $id_incidente)->with('success', 'Reporte actualizado');
    }

    public function updateAnalisisSeguridad(Request $request, $id_incidente)
    {
        $analisis_seguridad = AnalisisSeguridad::findOrfail(intval($id_incidente));
        $analisis_seguridad->update([
            'problema_diagrama' => $request->problema_diagrama,
            'problema_porque' => $request->problema_porque,
            'causa_ideas' => $request->causa_ideas,
            'causa_porque' => $request->causa_porque,
            'ideas' => $request->ideas,
            'porque_1' => $request->porque_1,
            'porque_2' => $request->porque_2,
            'porque_3' => $request->porque_3,
            'porque_4' => $request->porque_4,
            'porque_5' => $request->porque_5,
            'control_a' => $request->control_a,
            'control_b' => $request->control_b,
            'proceso_a' => $request->proceso_a,
            'proceso_b' => $request->proceso_b,
            'personas_a' => $request->personas_a,
            'personas_b' => $request->personas_b,
            'tecnologia_a' => $request->tecnologia_a,
            'tecnologia_b' => $request->tecnologia_b,
            'metodos_a' => $request->metodos_a,
            'metodos_b' => $request->metodos_b,
            'ambiente_a' => $request->ambiente_a,
            'ambiente_b' => $request->ambiente_b,
        ]);

        return redirect()->route('admin.desk.seguridad-edit', $analisis_seguridad->seguridad_id)->with('success', 'Reporte actualizado');
    }

    public function archivadoSeguridad(Request $request, $incidente)
    {
        if ($request->ajax()) {
            $incidentesSeguridad = IncidentesSeguridad::findOrfail(intval($incidente));
            $incidentesSeguridad->update([
                'archivado' => IncidentesSeguridad::ARCHIVADO,
            ]);

            return response()->json(['success' => true]);
        }
    }

    public function archivoSeguridad()
    {
        $incidentes_seguridad_archivados = IncidentesSeguridad::where('archivado', IncidentesSeguridad::ARCHIVADO)->get();

        return view('admin.desk.seguridad.archivo', compact('incidentes_seguridad_archivados'));
    }

    public function indexRiesgo()
    {
        $riesgo = RiesgoIdentificado::with('reporto')->where('archivado', false)->get();

        return datatables()->of($riesgo)->toJson();
    }

    public function indexSugerencia()
    {
        $riesgo = Sugerencias::with('sugirio')->where('archivado', false)->get();

        return datatables()->of($riesgo)->toJson();
    }

    public function archivadoSugerencia(Request $request, $incidente)
    {
        if ($request->ajax()) {
            $riesgo = Sugerencias::findOrfail(intval($incidente));
            $riesgo->update([
                'archivado' => Sugerencias::ARCHIVADO,
            ]);

            return response()->json(['success' => true]);
        }
    }

    public function archivoSugerencia()
    {
        $sugerencias = Sugerencias::where('archivado', true)->get();

        return view('admin.desk.sugerencias.archivo', compact('sugerencias'));
    }

    public function recuperarArchivadoSugerencia($id)
    {
        $riesgo = Sugerencias::find($id);
        // dd($recurso);
        $riesgo->update([
            'archivado' =>false,
        ]);

        return redirect()->route('admin.desk.index');
    }

    public function editRiesgos(Request $request, $id_riesgos)
    {
        $riesgos = RiesgoIdentificado::findOrfail(intval($id_riesgos))->load('evidencias_riesgos');

        $analisis = AnalisisSeguridad::where('formulario', '=', 'riesgo')->where('riesgos_id', intval($id_riesgos))->first();

        $procesos = Proceso::get();

        $activos = Activo::get();

        $areas = Area::get();

        $sedes = Sede::get();

        $empleados = Empleado::get();

        return view('admin.desk.riesgos.edit', compact('riesgos', 'procesos', 'empleados', 'areas', 'activos', 'sedes', 'analisis'));
    }

    public function updateRiesgos(Request $request, $id_riesgos)
    {
        $riesgos = RiesgoIdentificado::findOrfail(intval($id_riesgos));
        $riesgos->update([
            'titulo' => $request->titulo,
            'fecha' => $request->fecha,
            'estatus' => $request->estatus,
            'fecha_cierre' => $request->fecha_cierre,
            'sede' => $request->sede,
            'ubicacion' => $request->ubicacion,
            'descripcion' => $request->descripcion,
            'areas_afectados' => $request->areas_afectados,
            'procesos_afectados' => $request->procesos_afectados,
            'activos_afectados' => $request->activos_afectados,
            'comentarios' => $request->comentarios,
        ]);

        return redirect()->route('admin.desk.index')->with('success', 'Reporte actualizado');
    }

    public function updateAnalisisReisgos(Request $request, $id_riesgos)
    {
        $analisis_seguridad = AnalisisSeguridad::findOrfail(intval($id_riesgos));
        $analisis_seguridad->update([
            'problema_diagrama' => $request->problema_diagrama,
            'problema_porque' => $request->problema_porque,
            'causa_ideas' => $request->causa_ideas,
            'causa_porque' => $request->causa_porque,
            'ideas' => $request->ideas,
            'porque_1' => $request->porque_1,
            'porque_2' => $request->porque_2,
            'porque_3' => $request->porque_3,
            'porque_4' => $request->porque_4,
            'porque_5' => $request->porque_5,
            'control_a' => $request->control_a,
            'control_b' => $request->control_b,
            'proceso_a' => $request->proceso_a,
            'proceso_b' => $request->proceso_b,
            'personas_a' => $request->personas_a,
            'personas_b' => $request->personas_b,
            'tecnologia_a' => $request->tecnologia_a,
            'tecnologia_b' => $request->tecnologia_b,
            'metodos_a' => $request->metodos_a,
            'metodos_b' => $request->metodos_b,
            'ambiente_a' => $request->ambiente_a,
            'ambiente_b' => $request->ambiente_b,
        ]);

        return redirect()->route('admin.desk.riesgos-edit', $analisis_seguridad->riesgos_id)->with('success', 'Reporte actualizado');
    }

    public function archivadoRiesgo(Request $request, $incidente)
    {
        if ($request->ajax()) {
            $riesgo = RiesgoIdentificado::findOrfail(intval($incidente));
            $riesgo->update([
                'archivado' => true,
            ]);

            return response()->json(['success' => true]);
        }
    }

    public function archivoRiesgo()
    {
        $riesgos = RiesgoIdentificado::where('archivado', true)->get();

        return view('admin.desk.riesgos.archivo', compact('riesgos'));
    }

    public function recuperarArchivadoRiesgo($id)
    {
        $riesgo = RiesgoIdentificado::find($id);
        // dd($recurso);
        $riesgo->update([
            'archivado' =>false,
        ]);

        return redirect()->route('admin.desk.index');
    }

    public function indexQueja()
    {
        $quejas = Quejas::with('quejo')->where('archivado', false)->get();

        return datatables()->of($quejas)->toJson();
    }

    public function editQuejas(Request $request, $id_quejas)
    {
        $quejas = Quejas::findOrfail(intval($id_quejas))->load('evidencias_quejas');

        $procesos = Proceso::get();

        $activos = Activo::get();

        $analisis = AnalisisSeguridad::where('formulario', '=', 'queja')->where('quejas_id', intval($id_quejas))->first();

        $areas = Area::get();

        $sedes = Sede::get();

        $empleados = Empleado::get();

        return view('admin.desk.quejas.edit', compact('quejas', 'procesos', 'empleados', 'areas', 'activos', 'sedes', 'analisis'));
    }

    public function updateQuejas(Request $request, $id_quejas)
    {
        $quejas = Quejas::findOrfail(intval($id_quejas));
        $quejas->update([
            'titulo' => $request->titulo,
            'estatus' => $request->estatus,
            'fecha' => $request->fecha,
            'sede' => $request->sede,
            'ubicacion' => $request->ubicacion,
            'descripcion' => $request->descripcion,
            'area_quejado' => $request->area_quejado,
            'colaborador_quejado' => $request->colaborador_quejado,
            'proceso_quejado' => $request->proceso_quejado,
            'externo_quejado' => $request->externo_quejado,
            'comentarios' => $request->comentarios,
            'fecha_cierre'=>$request->fecha_cierre,
        ]);

        // return redirect()->route('admin.desk.quejas-edit', $id_quejas)->with('success', 'Reporte actualizado');
        return redirect()->route('admin.desk.index')->with('success', 'Reporte actualizado');
    }

    public function updateAnalisisQuejas(Request $request, $id_quejas)
    {
        $analisis_seguridad = AnalisisSeguridad::findOrfail(intval($id_quejas));
        $analisis_seguridad->update([
            'problema_diagrama' => $request->problema_diagrama,
            'problema_porque' => $request->problema_porque,
            'causa_ideas' => $request->causa_ideas,
            'causa_porque' => $request->causa_porque,
            'ideas' => $request->ideas,
            'porque_1' => $request->porque_1,
            'porque_2' => $request->porque_2,
            'porque_3' => $request->porque_3,
            'porque_4' => $request->porque_4,
            'porque_5' => $request->porque_5,
            'control_a' => $request->control_a,
            'control_b' => $request->control_b,
            'proceso_a' => $request->proceso_a,
            'proceso_b' => $request->proceso_b,
            'personas_a' => $request->personas_a,
            'personas_b' => $request->personas_b,
            'tecnologia_a' => $request->tecnologia_a,
            'tecnologia_b' => $request->tecnologia_b,
            'metodos_a' => $request->metodos_a,
            'metodos_b' => $request->metodos_b,
            'ambiente_a' => $request->ambiente_a,
            'ambiente_b' => $request->ambiente_b,
            'fecha_cierre'=>$request->fecha_cierre,
        ]);

        return redirect()->route('admin.desk.quejas-edit', $analisis_seguridad->quejas_id)->with('success', 'Reporte actualizado');
    }

    public function archivadoQueja(Request $request, $incidente)
    {
        // dd($request);
        if ($request->ajax()) {
            $queja = Quejas::findOrfail(intval($incidente));
            $queja->update([
                'archivado' => true,
            ]);

            return response()->json(['success' => true]);
        }
    }

    public function archivoQueja()
    {
        $quejas = Quejas::where('archivado', true)->get();

        return view('admin.desk.quejas.archivo', compact('quejas'));
    }

    public function recuperarArchivadoQueja($id)
    {
        $queja = Quejas::find($id);
        // dd($recurso);
        $queja->update([
            'archivado' =>false,
        ]);

        return redirect()->route('admin.desk.index');
    }

    public function indexDenuncia()
    {
        $denuncias = Denuncias::with('denuncio', 'denunciado')->where('archivado', false)->get();

        return datatables()->of($denuncias)->toJson();
    }

    public function editDenuncias(Request $request, $id_denuncias)
    {
        $analisis = AnalisisSeguridad::where('formulario', '=', 'denuncia')->where('denuncias_id', intval($id_denuncias))->first();

        $denuncias = Denuncias::findOrfail(intval($id_denuncias));

        $activos = Activo::get();

        $empleados = Empleado::get();

        return view('admin.desk.denuncias.edit', compact('denuncias', 'activos', 'empleados', 'analisis'));
    }

    public function updateDenuncias(Request $request, $id_denuncias)
    {
        $denuncias = Denuncias::findOrfail(intval($id_denuncias));
        $denuncias->update([
            'anonimo' => $request->anonimo,
            'descripcion' => $request->descripcion,
            'evidencia' => $request->evidencia,
            'denunciado' => $request->denunciado,
            'area_denunciado' => $request->area_denunciado,
            'tipo' => $request->tipo,
            'estatus' => $request->estatus,
            'fecha_cierre'=>$request->fecha_cierre,
        ]);

        return redirect()->route('admin.desk.index')->with('success', 'Reporte actualizado');
    }

    public function updateAnalisisDenuncias(Request $request, $id_denuncias)
    {
        $analisis_seguridad = AnalisisSeguridad::findOrfail(intval($id_denuncias));
        $analisis_seguridad->update([
            'problema_diagrama' => $request->problema_diagrama,
            'problema_porque' => $request->problema_porque,
            'causa_ideas' => $request->causa_ideas,
            'causa_porque' => $request->causa_porque,
            'ideas' => $request->ideas,
            'porque_1' => $request->porque_1,
            'porque_2' => $request->porque_2,
            'porque_3' => $request->porque_3,
            'porque_4' => $request->porque_4,
            'porque_5' => $request->porque_5,
            'control_a' => $request->control_a,
            'control_b' => $request->control_b,
            'proceso_a' => $request->proceso_a,
            'proceso_b' => $request->proceso_b,
            'personas_a' => $request->personas_a,
            'personas_b' => $request->personas_b,
            'tecnologia_a' => $request->tecnologia_a,
            'tecnologia_b' => $request->tecnologia_b,
            'metodos_a' => $request->metodos_a,
            'metodos_b' => $request->metodos_b,
            'ambiente_a' => $request->ambiente_a,
            'ambiente_b' => $request->ambiente_b,
        ]);

        // return redirect()->route('admin.desk.denuncias-edit', $analisis_seguridad->denuncias_id)->with('success', 'Reporte actualizado');
        return redirect()->route('admin.desk.index')->with('success', 'Reporte actualizado');
    }

    public function archivadoDenuncia(Request $request, $incidente)
    {
        if ($request->ajax()) {
            $denuncia = Denuncias::findOrfail(intval($incidente));
            $denuncia->update([
                'archivado' => true,
            ]);

            return response()->json(['success' => true]);
        }
    }

    public function archivoDenuncia()
    {
        $denuncias = Denuncias::where('archivado', true)->get();

        return view('admin.desk.denuncias.archivo', compact('denuncias'));
    }

    public function recuperarArchivadoDenuncia($id)
    {
        $queja = Denuncias::find($id);
        // dd($recurso);
        $queja->update([
            'archivado' =>false,
        ]);

        return redirect()->route('admin.desk.index');
    }

    public function indexMejora()
    {
        $mejoras = Mejoras::with('mejoro')->where('archivado', false)->get();

        return datatables()->of($mejoras)->toJson();
    }

    public function editMejoras(Request $request, $id_mejoras)
    {
        $mejoras = Mejoras::findOrfail(intval($id_mejoras));

        $activos = Activo::get();

        $empleados = Empleado::get();

        $areas = Area::get();

        $procesos = Proceso::get();

        $analisis = AnalisisSeguridad::where('formulario', '=', 'mejora')->where('mejoras_id', intval($id_mejoras))->first();

        return view('admin.desk.mejoras.edit', compact('mejoras', 'activos', 'empleados', 'areas', 'procesos', 'analisis'));
    }

    public function updateMejoras(Request $request, $id_mejoras)
    {
        $mejoras = Mejoras::findOrfail(intval($id_mejoras));
        $mejoras->update([
            'estatus' => $request->estatus,
            'fecha_cierre' => $request->fecha_cierre,
            'descripcion' => $request->descripcion,
            'beneficios' => $request->beneficios,
            'titulo' => $request->titulo,
            'area_mejora' => $request->area_mejora,
            'proceso_mejora' => $request->proceso_mejora,
            'tipo' => $request->tipo,
            'otro' => $request->otro,
        ]);

        // return redirect()->route('admin.desk.mejoras-edit', $id_mejoras)->with('success', 'Reporte actualizado');
        return redirect()->route('admin.desk.index')->with('success', 'Reporte actualizado');
    }

    public function updateAnalisisMejoras(Request $request, $id_mejoras)
    {
        // dd($request->all());
        $analisis_seguridad = AnalisisSeguridad::findOrfail(intval($id_mejoras));
        $analisis_seguridad->update([
            'problema_diagrama' => $request->problema_diagrama,
            'problema_porque' => $request->problema_porque,
            'causa_ideas' => $request->causa_ideas,
            'causa_porque' => $request->causa_porque,
            'ideas' => $request->ideas,
            'porque_1' => $request->porque_1,
            'porque_2' => $request->porque_2,
            'porque_3' => $request->porque_3,
            'porque_4' => $request->porque_4,
            'porque_5' => $request->porque_5,
            'control_a' => $request->control_a,
            'control_b' => $request->control_b,
            'proceso_a' => $request->proceso_a,
            'proceso_b' => $request->proceso_b,
            'personas_a' => $request->personas_a,
            'personas_b' => $request->personas_b,
            'tecnologia_a' => $request->tecnologia_a,
            'tecnologia_b' => $request->tecnologia_b,
            'metodos_a' => $request->metodos_a,
            'metodos_b' => $request->metodos_b,
            'ambiente_a' => $request->ambiente_a,
            'ambiente_b' => $request->ambiente_b,
            'metodo' => $request->metodo,
        ]);

        return redirect()->route('admin.desk.mejoras-edit', $analisis_seguridad->mejoras_id)->with('success', 'Reporte actualizado');
    }

    public function archivadoMejora(Request $request, $incidente)
    {
        if ($request->ajax()) {
            $mejora = Mejoras::findOrfail(intval($incidente));
            $mejora->update([
                'archivado' => true,
            ]);

            return response()->json(['success' => true]);
        }
    }

    public function archivoMejora()
    {
        $mejoras = Mejoras::where('archivado', true)->get();

        return view('admin.desk.mejoras.archivo', compact('mejoras'));
    }

    public function recuperarArchivadoMejora($id)
    {
        $mejora = Mejoras::find($id);
        // dd($recurso);
        $mejora->update([
            'archivado' =>false,
        ]);

        return redirect()->route('admin.desk.index');
    }

    public function editSugerencias(Request $request, $id_sugerencias)
    {
        $sugerencias = Sugerencias::findOrfail(intval($id_sugerencias));

        $activos = Activo::get();

        $empleados = Empleado::get();

        $areas = Area::get();

        $procesos = Proceso::get();

        $analisis = AnalisisSeguridad::where('formulario', '=', 'sugerencia')->where('sugerencias_id', intval($id_sugerencias))->first();

        return view('admin.desk.sugerencias.edit', compact('sugerencias', 'activos', 'empleados', 'areas', 'procesos', 'analisis'));
    }

    public function updateSugerencias(Request $request, $id_sugerencias)
    {
        $sugerencias = Sugerencias::findOrfail(intval($id_sugerencias));
        $sugerencias->update([
            'area_sugerencias' => $request->area_sugerencias,
            'proceso_sugerencias' => $request->proceso_sugerencias,

            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,

            'estatus' => $request->estatus,

            'fecha_cierre' => $request->fecha_cierre,
        ]);

        // return redirect()->route('admin.desk.sugerencias-edit', $id_sugerencias)->with('success', 'Reporte actualizado');
        return redirect()->route('admin.desk.index')->with('success', 'Reporte actualizado');
    }

    public function updateAnalisisSugerencias(Request $request, $id_sugerencias)
    {
        $analisis_seguridad = AnalisisSeguridad::findOrfail(intval($id_sugerencias));
        $analisis_seguridad->update([
            'problema_diagrama' => $request->problema_diagrama,
            'problema_porque' => $request->problema_porque,
            'causa_ideas' => $request->causa_ideas,
            'causa_porque' => $request->causa_porque,
            'ideas' => $request->ideas,
            'porque_1' => $request->porque_1,
            'porque_2' => $request->porque_2,
            'porque_3' => $request->porque_3,
            'porque_4' => $request->porque_4,
            'porque_5' => $request->porque_5,
            'control_a' => $request->control_a,
            'control_b' => $request->control_b,
            'proceso_a' => $request->proceso_a,
            'proceso_b' => $request->proceso_b,
            'personas_a' => $request->personas_a,
            'personas_b' => $request->personas_b,
            'tecnologia_a' => $request->tecnologia_a,
            'tecnologia_b' => $request->tecnologia_b,
            'metodos_a' => $request->metodos_a,
            'metodos_b' => $request->metodos_b,
            'ambiente_a' => $request->ambiente_a,
            'ambiente_b' => $request->ambiente_b,
        ]);

        return redirect()->route('admin.desk.sugerencias-edit', $analisis_seguridad->sugerencias_id)->with('success', 'Reporte actualizado');
    }

    public function recuperarArchivadoSeguridad($id)
    {
        $recurso = IncidentesSeguridad::find($id);
        // dd($recurso);
        $recurso->update([
            'archivado' =>IncidentesSeguridad::NO_ARCHIVADO,
        ]);

        return redirect()->route('admin.desk.index');
    }

    public function quejasClientes()
    {
        $areas = Area::get();

        $procesos = Proceso::get();

        $activos = Activo::get();

        $empleados = Empleado::get();

        $clientes = TimesheetCliente::get();

        $proyectos = TimesheetProyecto::get();

        return view('admin.desk.clientes.quejasclientes', compact('areas', 'procesos', 'empleados', 'activos','clientes','proyectos'));

    }

    public function indexQuejasClientes()
    {
        $quejasClientes  = QuejasCliente::get();
        // dd($quejasClientes);
        return datatables()->of($quejasClientes )->toJson();
    }

    public function storeQuejasClientes(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required',
            'proyectos_id' => 'required',
            'nombre' => 'required',
            'titulo' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
        ]);

        // dd($request->fecha);
        $quejasClientes = QuejasCliente::create([
            'cliente_id'=>$request->cliente_id,
            'proyectos_id'=>$request->proyectos_id,
            'nombre' => $request->nombre,
            'puesto' => $request->puesto,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'area_quejado' => $request->area_quejado,
            'colaborador_quejado' => $request->colaborador_quejado,
            'proceso_quejado' => $request->proceso_quejado,
            'otro_quejado' => $request->otro_quejado,
            'titulo' => $request->titulo,
            'fecha' => $request->fecha,
            'ubicacion' => $request->ubicacion,
            'descripcion' => $request->descripcion,
            'estatus' => 'nuevo',
        ]);

        AnalisisQuejasClientes::create([
            'quejas_clientes_id' => $quejasClientes->id,
            'formulario' => 'quejaCliente',
        ]);

        $image = null;

        if ($request->file('evidencia') != null or !empty($request->file('evidencia'))) {
            foreach ($request->file('evidencia') as $file) {
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

                $name_image = basename(pathinfo($file->getClientOriginalName(), PATHINFO_BASENAME), '.' . $extension);

                $new_name_image = 'Queja_file_' . $quejasClientes->id . '_' . $name_image . '.' . $extension;

                $route = 'public/evidencias_quejas_clientes';

                $image = $new_name_image;

                $file->storeAs($route, $image);

                EvidenciaQuejasClientes::create([
                    'evidencia' => $image,
                    'quejas_clientes_id' => $quejasClientes->id,
                ]);
            }
        }

        return redirect()->route('admin.desk.index')->with('success', 'Reporte generado');
    }


    public function editQuejasClientes(Request $request, $id_quejas)
    {
        $quejasClientes = QuejasCliente::findOrfail(intval($id_quejas))->load('evidencias_quejas','planes','cierre_evidencias');
        // dd($quejasClientes);
        $procesos = Proceso::get();

        $activos = Activo::get();

        $analisis = AnalisisQuejasClientes::where('formulario', '=', 'quejaCliente')->where('quejas_clientes_id', intval($id_quejas))->first();
        // dd($analisis);
        $areas = Area::get();

        $empleados = Empleado::get();

        $clientes = TimesheetCliente::get();

        $proyectos = TimesheetProyecto::get();

        return view('admin.desk.clientes.edit', compact('clientes','proyectos','quejasClientes', 'procesos', 'empleados', 'areas', 'activos','analisis'));
    }

    public function updateQuejasClientes(Request $request, $id_quejas)
    {

        $request->validate([
            'cliente_id' => 'required',
            'proyectos_id' => 'required',
            'nombre' => 'required',
            'titulo' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
        ]);

        // dd($request->all());
        $quejasClientes = QuejasCliente::findOrfail(intval($id_quejas));

        $quejasClientes->update([
            'cliente_id'=>$request->cliente_id,
            'proyectos_id'=>$request->proyectos_id,
            'nombre' => $request->nombre,
            'puesto' => $request->puesto,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'area_quejado' => $request->area_quejado,
            'colaborador_quejado' => $request->colaborador_quejado,
            'proceso_quejado' => $request->proceso_quejado,
            'otro_quejado' => $request->otro_quejado,
            'titulo' => $request->titulo,
            'fecha' => $request->fecha,
            'ubicacion' => $request->ubicacion,
            'descripcion' => $request->descripcion,
            'estatus' => $request->estatus,
            'comentarios'=> $request->comentarios,
        ]);

        $image = null;

        if ($request->file('cierre') != null or !empty($request->file('cierre'))) {
            foreach ($request->file('cierre') as $file) {
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

                $name_image = basename(pathinfo($file->getClientOriginalName(), PATHINFO_BASENAME), '.' . $extension);

                $new_name_image = 'Queja_file_' . $quejasClientes->id . '_' . $name_image . '.' . $extension;

                $route = 'public/evidencias_quejas_clientes_cerrado';

                $image = $new_name_image;

                $file->storeAs($route, $image);

                EvidenciasQuejasClientesCerrado::create([
                    'cierre' => $image,
                    'quejas_clientes_id' => $quejasClientes->id,
                ]);
            }
        }

        // return redirect()->route('admin.desk.quejas-edit', $id_quejas)->with('success', 'Reporte actualizado');
        return redirect()->route('admin.desk.index')->with('success', 'Reporte actualizado');
    }

    public function updateAnalisisQuejasClientes(Request $request, $id_quejas)
    {
        $analisis_quejasClientes = AnalisisQuejasClientes::findOrfail(intval($id_quejas));
        $analisis_quejasClientes->update([
            'problema_diagrama' => $request->problema_diagrama,
            'problema_porque' => $request->problema_porque,
            'causa_ideas' => $request->causa_ideas,
            'causa_porque' => $request->causa_porque,
            'ideas' => $request->ideas,
            'porque_1' => $request->porque_1,
            'porque_2' => $request->porque_2,
            'porque_3' => $request->porque_3,
            'porque_4' => $request->porque_4,
            'porque_5' => $request->porque_5,
            'control_a' => $request->control_a,
            'control_b' => $request->control_b,
            'proceso_a' => $request->proceso_a,
            'proceso_b' => $request->proceso_b,
            'personas_a' => $request->personas_a,
            'personas_b' => $request->personas_b,
            'tecnologia_a' => $request->tecnologia_a,
            'tecnologia_b' => $request->tecnologia_b,
            'metodos_a' => $request->metodos_a,
            'metodos_b' => $request->metodos_b,
            'ambiente_a' => $request->ambiente_a,
            'ambiente_b' => $request->ambiente_b,
            'fecha_cierre'=>$request->fecha_cierre,
        ]);

        return redirect()->route('admin.desk.index', $analisis_quejasClientes->quejas_id)->with('success', 'Reporte actualizado');
    }

    public function planesQuejasClientes(Request $request)
    {
        $quejasClientes = QuejasCliente::find($request->id);
        // $quejasClientes->planes()->detach();
        $quejasClientes->planes()->sync($request->planes);

        return response()->json(['success' => true]);

    }
}
