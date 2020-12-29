<?php

namespace App\Http\Controllers\Admin;

use Flash;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPlanaccionCorrectivaRequest;
use App\Http\Requests\StorePlanaccionCorrectivaRequest;
use App\Http\Requests\UpdatePlanaccionCorrectivaRequest;
use App\Models\AccionCorrectiva;
use App\Models\PlanaccionCorrectiva;
use App\Models\Team;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PlanaccionCorrectivaController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('planaccion_correctiva_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = PlanaccionCorrectiva::with(['accioncorrectiva', 'responsable', 'team'])->select(sprintf('%s.*', (new PlanaccionCorrectiva)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'planaccion_correctiva_show';
                $editGate      = 'planaccion_correctiva_edit';
                $deleteGate    = 'planaccion_correctiva_delete';
                $crudRoutePart = 'planaccion-correctivas';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->addColumn('accioncorrectiva_tema', function ($row) {
                return $row->accioncorrectiva ? $row->accioncorrectiva->tema : '';
            });

            $table->editColumn('accioncorrectiva.fecharegistro', function ($row) {
                return $row->accioncorrectiva ? (is_string($row->accioncorrectiva) ? $row->accioncorrectiva : $row->accioncorrectiva->fecharegistro) : '';
            });
            $table->editColumn('actividad', function ($row) {
                return $row->actividad ? $row->actividad : "";
            });
            $table->addColumn('responsable_name', function ($row) {
                return $row->responsable ? $row->responsable->name : '';
            });

            $table->editColumn('estatus', function ($row) {
                return $row->estatus ? PlanaccionCorrectiva::ESTATUS_SELECT[$row->estatus] : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'accioncorrectiva', 'responsable']);

            return $table->make(true);
        }

        $accion_correctivas = AccionCorrectiva::get();
        $users              = User::get();
        $teams              = Team::get();

        return view('admin.planaccionCorrectivas.index', compact('accion_correctivas', 'users', 'teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('planaccion_correctiva_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $accioncorrectivas = AccionCorrectiva::all()->pluck('tema', 'id')->prepend(trans('global.pleaseSelect'), '');

        $responsables = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.planaccionCorrectivas.create', compact('accioncorrectivas', 'responsables'));
    }

    public function store(StorePlanaccionCorrectivaRequest $request)
    {
        $planaccionCorrectiva = PlanaccionCorrectiva::create($request->all());
        Flash::success("Se ha registrado correctamente la actividad del plan de acción");
        Route::URL('accion-correctivas/plan_accion');
    }

    public function edit(PlanaccionCorrectiva $planaccionCorrectiva)
    {
        abort_if(Gate::denies('planaccion_correctiva_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $accioncorrectivas = AccionCorrectiva::all()->pluck('tema', 'id')->prepend(trans('global.pleaseSelect'), '');

        $responsables = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $planaccionCorrectiva->load('accioncorrectiva', 'responsable', 'team');

        return view('admin.planaccionCorrectivas.edit', compact('accioncorrectivas', 'responsables', 'planaccionCorrectiva'));
    }

    public function update(UpdatePlanaccionCorrectivaRequest $request, PlanaccionCorrectiva $planaccionCorrectiva)
    {
        $planaccionCorrectiva->update($request->all());

        return redirect()->route('admin.planaccion-correctivas.index');
    }

    public function show(PlanaccionCorrectiva $planaccionCorrectiva)
    {
        abort_if(Gate::denies('planaccion_correctiva_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $planaccionCorrectiva->load('accioncorrectiva', 'responsable', 'team');

        return view('admin.planaccionCorrectivas.show', compact('planaccionCorrectiva'));
    }

    public function destroy(PlanaccionCorrectiva $planaccionCorrectiva)
    {
        abort_if(Gate::denies('planaccion_correctiva_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $planaccionCorrectiva->delete();

        return back();
    }

    public function massDestroy(MassDestroyPlanaccionCorrectivaRequest $request)
    {
        PlanaccionCorrectiva::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function planformulario(Request $request)
    {
        //dd($request->request);
        $id = request()->param;
        return view('admin.accionCorrectivas.plan_accion')->with('ids', $id);

    }
}
