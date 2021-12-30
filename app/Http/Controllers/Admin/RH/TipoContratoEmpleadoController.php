<?php

namespace App\Http\Controllers\Admin\RH;

use App\Http\Controllers\Controller;
use App\Models\RH\TipoContratoEmpleado;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TipoContratoEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tipoContratoEmpleado = TipoContratoEmpleado::select('id', 'name', 'description')->get();
        if ($request->ajax()) {
            return datatables()->of($tipoContratoEmpleado)->toJson();
        }

        return view('admin.recursos-humanos.tipo-contrato-empleado.index', compact('tipoContratoEmpleado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoContratoEmpleado = new TipoContratoEmpleado;

        return view('admin.recursos-humanos.tipo-contrato-empleado.create', compact('tipoContratoEmpleado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:4000',
        ]);

        $request->query->set('slug', Str::slug($request->name));
        $request->validate([
            'slug' => 'unique:tipo_contrato_empleados,slug',
        ], [
            'slug.unique' => 'El nombre del tipo de contrato ya ha sido utilizado',
        ]);

        TipoContratoEmpleado::create($request->all());

        return redirect()->route('admin.tipos-contratos-empleados.index')->with('success', 'Tipo de contrato de empleado actualizado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RH\TipoContratoEmpleado  $tipoContratoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function show(TipoContratoEmpleado $tipoContratoEmpleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RH\TipoContratoEmpleado  $tipoContratoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function edit($tipoContratoEmpleado)
    {
        $tipoContratoEmpleado = TipoContratoEmpleado::find($tipoContratoEmpleado);

        return view('admin.recursos-humanos.tipo-contrato-empleado.edit', compact('tipoContratoEmpleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RH\TipoContratoEmpleado  $tipoContratoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tipoContratoEmpleado)
    {
        $tipoContratoEmpleado = TipoContratoEmpleado::find($tipoContratoEmpleado);
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:4000',
        ]);
        $request->query->set('slug', Str::slug($request->name));
        $request->validate([
            'slug' => "unique:tipo_contrato_empleados,slug,{$tipoContratoEmpleado->id}",
        ], [
            'slug.unique' => 'El nombre del tipo de contrato ya ha sido utilizado',
        ]);

        $tipoContratoEmpleado->update($request->all());

        return redirect()->route('admin.tipos-contratos-empleados.index')->with('success', 'Tipo de contrato de empleado actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RH\TipoContratoEmpleado  $tipoContratoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($tipoContratoEmpleado)
    {
        $tipoContratoEmpleado = TipoContratoEmpleado::find($tipoContratoEmpleado);
        $deleted = $tipoContratoEmpleado->delete();
        if ($deleted) {
            return response()->json(['status' => 'success', 'message' => 'Tipo de contrato de empleado eliminado']);
        }

        return response()->json(['status' => 'error', 'message' => 'Ocurrio un error al eliminar']);
    }
}
