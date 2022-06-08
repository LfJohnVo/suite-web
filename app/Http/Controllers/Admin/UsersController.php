<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Area;
use App\Models\Empleado;
use App\Models\Organizacione;
use App\Models\Puesto;
use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use App\Rules\EmpleadoNoVinculado;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::get();
        $organizaciones = Organizacione::get();
        $areas = Area::get();
        $puestos = Puesto::get();
        $teams = Team::get();
        // $empleadosNoAsignados = Empleado::alta()->get();
        // $empleados = $empleadosNoAsignados->filter(function ($item) {
        //     return !User::where('n_empleado', $item->n_empleado)->exists();
        // })->values();
        $empleados = Empleado::alta()->get();

        return view('admin.users.index', compact('roles', 'organizaciones', 'areas', 'puestos', 'teams', 'empleados'));
    }

    public function getUsersIndex(Request $request)
    {
        $query = User::with(['roles', 'organizacion', 'area', 'puesto', 'team', 'empleado' => function ($q) {
            $q->with('area');
        }])->get();

        return datatables()->of($query)->toJson();
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('title', 'id');

        $organizacions = Organizacione::all()->pluck('organizacion', 'id')->prepend(trans('global.pleaseSelect'), '');

        $areas = Area::all()->pluck('area', 'id')->prepend(trans('global.pleaseSelect'), '');

        $puestos = Puesto::all()->pluck('puesto', 'id')->prepend(trans('global.pleaseSelect'), '');

        $teams = Team::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.users.create', compact('roles', 'organizacions', 'areas', 'puestos', 'teams'));
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('title', 'id');

        $organizacions = Organizacione::all()->pluck('organizacion', 'id')->prepend(trans('global.pleaseSelect'), '');

        $areas = Area::all()->pluck('area', 'id')->prepend(trans('global.pleaseSelect'), '');

        $puestos = Puesto::all()->pluck('puesto', 'id')->prepend(trans('global.pleaseSelect'), '');

        $teams = Team::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $user->load('roles', 'organizacion', 'area', 'puesto', 'team');

        return view('admin.users.edit', compact('roles', 'organizacions', 'areas', 'puestos', 'teams', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('roles', 'organizacion', 'area', 'puesto', 'team', 'userUserAlerts');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $delete = $user->delete();
        if ($delete) {
            return response()->json(['sucess', true]);
        }

        return response()->json(['error', true]);
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function getUsers(Request $request)
    {
        if ($request->ajax()) {
            $nombre = $request->nombre;
            $usuarios = User::select('id', 'name', 'email')->where('name', 'LIKE', '%' . $nombre . '%')->take(5)->get();
            $lista = "<ul class='list-group' id='empleados-lista'>";
            foreach ($usuarios as $usuario) {
                $lista .= "<button type='button' class='list-group-item list-group-item-action' onClick='seleccionarUsuario(" . $usuario . ");'>" . $usuario->name . '</button>';
            }
            $lista .= '</ul>';

            return $lista;
        }
    }

    public function vincularEmpleado(Request $request)
    {
        if ($request->ajax()) {
            $request->validate([
                'n_empleado' => ['required', new EmpleadoNoVinculado, 'exists:empleados,n_empleado'],
            ]);
            $usuario = User::find(intval($request->user_id));
            $usuario->update([
                'n_empleado' => $request->n_empleado,
            ]);

            return response()->json(['success' => true]);
        }
    }

    public function cambiarVerificacion(User $user)
    {
        if ($user->two_factor) {
            $message = "Verificación por dos factores deshabilitada para el usuario {$user->name}";
        } else {
            $message = "Verificación por dos factores habilitada para el usuario {$user->name}";
        }

        $user->two_factor = !$user->two_factor;

        $user->save();

        return redirect()->route('admin.users.index')->with('success', $message);
    }

    public function toogleBloqueo(User $user)
    {
        if ($user->is_active) {
            $message = "El usuario {$user->name} ha sido bloqueado";
        } else {
            $message = "El usuario {$user->name} ha sido desbloqueado";
        }

        $user->is_active = !$user->is_active;

        $user->save();

        return redirect()->route('admin.users.index')->with('success', $message);
    }
}
