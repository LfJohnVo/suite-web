<?php

namespace App\Http\Controllers\Admin;

use App\Models\ListaDistribucion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ListaDistribucionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        if ($request->ajax()) {

            $query = ListaDistribucion::with('participantes.empleado')->orderByDesc('id')->get();
            $table = datatables()::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'incidentes_vacaciones_crear';
                $editGate = 'incidentes_vacaciones_editar';
                $deleteGate = 'incidentes_vacaciones_eliminar';
                $crudRoutePart = 'incidentes-vacaciones';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('modulo', function ($row) {
                return $row->modulo ? $row->modulo : '';
            });
            $table->editColumn('submodulo', function ($row) {
                return $row->submodulo ? $row->submodulo : '';
            });
            $table->editColumn('niveles', function ($row) {
                return $row->niveles ? $row->niveles : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.listadistribucion.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ListaDistribucion $listaDistribucion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListaDistribucion $listaDistribucion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ListaDistribucion $listaDistribucion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListaDistribucion $listaDistribucion)
    {
        //
    }
}
