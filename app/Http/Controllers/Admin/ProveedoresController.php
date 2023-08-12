<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProveedoresRequest;
use App\Models\ContractManager\Fiscale;
use App\Models\Organizacion;
use App\Models\ContractManager\Proveedores;
use Illuminate\Http\Request;
use Response;

class ProveedoresController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('haveaccess', 'proveedores.index');
        $proveedores = Proveedores::get();
        $organizacion_actual = Organizacion::select('empresa', 'logotipo')->first();
        if (is_null($organizacion_actual)) {
            $organizacion_actual = new Organizacion();
            $organizacion_actual->logotipo = asset('img/logo_katbol.png');
            $organizacion_actual->empresa = 'Silent4Business';
        }
        $logo_actual = $organizacion_actual->logotipo;

        // $logo_actual = asset('img/logo_katbol.png');
        $empresa_actual = $organizacion_actual->empresa;
        // dd($logo_actual);
        return view('admin.proveedores.index', compact('proveedores', 'logo_actual', 'empresa_actual'));
        // ->with('proveedores', $proveedor, 'logo_actual', $logo_actual, 'empresa_actual', $empresa_actual);
    }

    public function create()
    {
        // $personas = Fiscale::select('id', 'persona_fiscal')->get();
        // dd($personas);
        // $this->authorize('haveaccess', 'proveedores.create');
        $personas = Fiscale::get();
        // dd($provedoresSeeder);
        return view('admin.proveedores.create', compact('personas'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'razon_social' => 'required',
            'nombre_comercial' => 'required',
            'calle' => 'required',
            'colonia' => 'required',
            'ciudad' => 'required',
            'codigo_postal' => 'required|numeric',
            'nombre_completo' => 'required',
            'pagina_web' => 'nullable|url',
            'telefono' => 'nullable|numeric',
            'celular' => 'nullable|numeric',
        ]);

        $proveedores = new Proveedores;
        $proveedores->razon_social = $request->razon_social;
        $proveedores->nombre_comercial = $request->nombre_comercial;
        $proveedores->rfc = $request->rfc;
        $proveedores->calle = $request->calle;
        $proveedores->colonia = $request->colonia;
        $proveedores->ciudad = $request->ciudad;
        $proveedores->codigo_postal = $request->codigo_postal;
        $proveedores->telefono = $request->telefono;
        $proveedores->pagina_web = $request->pagina_web;
        $proveedores->nombre_completo = $request->nombre_completo;
        $proveedores->puesto = $request->puesto;
        $proveedores->correo = $request->correo;
        $proveedores->celular = $request->celular;
        $proveedores->objeto_descripcion = $request->objeto_descripcion;
        $proveedores->cobertura = $request->cobertura;

        $proveedores->id_fiscale = $request->id_fiscale;

        $proveedores->save();
        ($proveedores);
        // dd($proveedores);

        return redirect()->route('admin.proveedores.index')->with('success', 'Proveedor Registrado');
    }

    public function show($id)
    {
        // dd($id);
        $proveedor = Proveedores::find($id);
        $personas = Fiscale::get();
        if (empty($proveedor)) {
            notify()->error('Proveedor not found');

            return redirect(route('admin.proveedores.index'));
        }

        return view('admin.proveedores.show')->with('proveedores', $proveedor)->with('personas', $personas);
    }

    /**
     * Display the specified Contrato.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // $this->authorize('haveaccess', 'proveedores.edit');
        $proveedor = Proveedores::find($id);
        $personas = Fiscale::get();

        return view('admin.proveedores.edit')->with('proveedores', $proveedor)->with('personas', $personas);
    }

    /**
     * Update the specified Contrato in storage.
     *
     * @param  int  $id
     * @param  UpdateProveedoresRequest  $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'razon_social' => 'required',
            'nombre_comercial' => 'required',
            'calle' => 'required',
            'colonia' => 'required',
            'ciudad' => 'required',
            'codigo_postal' => 'required|numeric',
            'nombre_completo' => 'required',
            'pagina_web' => 'nullable|url',
            'telefono' => 'nullable|numeric',
            'celular' => 'nullable|numeric',
        ]);

        $proveedor = Proveedores::find($id);
        $proveedor->update($request->all());
        //  dd($proveedor);
        notify()->success('¡El registro fue actualizado exitosamente!');

        return redirect(route('admin.proveedores.index'));
    }

    /**
     * Remove the specified Contrato from storage.
     *
     * @param  int  $id
     * @return Response
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        // $this->authorize('haveaccess', 'proveedores.destroy');
        Proveedores::destroy($id);
        notify()->success('¡El registro fue eliminado exitosamente!');

        return redirect(route('admin.proveedores.index'));
    }
}
