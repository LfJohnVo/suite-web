<?php

namespace App\Http\Controllers\Admin;

use App\Functions\GenerateAnalisisB;
use App\Functions\Porcentaje;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAnalisisBrechasRequest;
use App\Models\AnalisisBrecha;
use App\Models\Empleado;
use App\Models\GapDo;
use App\Models\GapTre;
use App\Models\GapUno;
use App\Traits\ObtenerOrganizacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class FormularioAnalisisBrechasController extends Controller
{
    public function index($id)
    {
        return view('admin.analisisdebrecha2022nv.formulario.index')->with('id');
    }
}
