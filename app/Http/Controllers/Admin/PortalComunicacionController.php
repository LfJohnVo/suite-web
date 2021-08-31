<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\organizacion;
use App\Models\Documento;
use App\Models\Empleado;
use App\Models\Area;
use App\Models\ComunicacionSgi;
use App\Models\ImagenesComunicacionSgis;
use Carbon\Carbon;




class PortalComunicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $hoy = Carbon::now();
        $hoy->toDateString();   
        $nuevos = Empleado::whereBetween('antiguedad', [$hoy->firstOfMonth()->format('Y-m-d'), $hoy->endOfMonth()->format('Y-m-d')])->get();

        $cumpleaños = Empleado::whereMonth('cumpleaños', '=', $hoy->format('m'))->get();

        $aniversarios = Empleado::whereMonth('antiguedad', '=', $hoy->format('m'))->get();

        $documentos_publicados = Documento::with('macroproceso')->where('estatus', Documento::PUBLICADO)->latest('updated_at')->get()->take(5);

        $comunicacionSgis = ComunicacionSgi::with('imagenes_comunicacion')->where('publicar_en', '=', 'Blog')->orWhere('publicar_en', '=', 'Ambos')->get();

        $comunicacionSgis_carrusel = ComunicacionSgi::with('imagenes_comunicacion')->where('publicar_en', '=', 'Carrusel')->orWhere('publicar_en', '=', 'Ambos')->get();


        return view('admin.portal-comunicacion.index', compact('documentos_publicados', 'nuevos', 'cumpleaños', 'aniversarios', 'hoy', 'comunicacionSgis', 'comunicacionSgis_carrusel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function reportes()
    {
        $organizacions = Organizacion::first();

        return view('admin.portal-comunicacion.reportes', compact('organizacions'));
    }
}
