<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MatrizOctaveServicio;

class ServiciosController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = MatrizOctaveServicio::get();
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
            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('servicio', function ($row) {
                return $row->servicio ? $row->servicio : '';
            });

            $table->editColumn('descripcion', function ($row) {
                return $row->descripcion ? $row->descripcion : '';
            });


            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.procesos-octave.index');

    }
}
