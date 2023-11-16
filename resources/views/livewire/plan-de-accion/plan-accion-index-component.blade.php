<div>
    <div class="row w-100 mt-4" style="align-items: end">
        <div class="col-12">
            <div class="row">
                <div class="col-4">
                    <div class="row" style="justify-content: right">
                        <div class="p-0" style="font-size: 11px;align-self: right">
                            <p class="m-0">Mostrando</p>
                        </div>
                        <div class="col-4 p-0">
                            <select name="" id="" class="form-control" wire:model.blur="perPage">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div class="col-5 p-0" style="font-size: 11px;align-self: center;text-align: end">
                            <p class="m-0"> proyectos por página</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    {{--  <button id="" class="btn-sm rounded pr-2" style="background-color:#b9eeb9; border: #fff"
                        wire:click="exportExcel()">
                        <i class="fas fa-file-excel" style="font-size: 1.1rem;color:#0f6935" title="Exportar Excel"></i>
                        Exportar Excel
                    </button>  --}}
                    <a href="{{ route('admin.planes-de-accion.create') }}" id=""
                        class="btn btn-xs btn-primary">
                        Agregar nuevo </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body datatable-fix">
        <div class="table-responsive">
            <table class="table table-bordered w-100" id="tblPlanesAccion">
                <thead class="thead-dark">
                    <tr>
                        <th style="min-width:150px;">Nombre</th>
                        <th style="min-width:100px;">Norma</th>
                        <th>Módulo de Origen</th>
                        <th style="min-width:200px;">Objetivo</th>
                        <th>Elaboró</th>
                        <th>% de Avance</th>
                        <th>Fecha de Inicio</th>
                        <th>Fecha de Fin</th>
                        <th>Estatus</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($planImplementacions as $plan)
                        <tr>
                            <td>{{ $plan->parent }}</td>
                            <td>{{ $plan->norma }}</td>
                            <td>{{ $plan->modulo_origen }}</td>
                            <td>{{ $plan->objetivo }}</td>
                            <td>
                                @if ($plan->elaboro_id)
                                    <span class="badge badge-primary">Elaborado por:
                                        {{ $plan->elaborador->name ?? 'No disponible' }}</span>
                                @else
                                    <span class="badge badge-primary">Elaborado por el sistema</span>
                                @endif

                            </td>
                            <td>
                                @if (isset($plan->tasks) && count($plan->tasks) > 0)
                                    <?php
                                    $zero_task = collect($plan->tasks)->first(function ($task) {
                                        return $task->level == 0;
                                    });
                                    if ($zero_task) {
                                        $progress = ceil($zero_task->progress);
                                        if ($progress >= 90) {
                                            echo '<span class="badge badge-success">' . $progress . '%</span>';
                                        } elseif ($progress >= 60) {
                                            echo '<span class="badge badge-warning">' . $progress . '%</span>';
                                        } else {
                                            echo '<span class="badge badge-danger">' . $progress . '%</span>';
                                        }
                                    } else {
                                        echo '<span class="badge badge-primary">Sin progreso calculable</span>';
                                    }
                                    ?>
                                @else
                                    <span class="badge badge-primary">Sin progreso calculable</span>
                                @endif
                            </td>
                            <td>
                                @if (isset($plan->tasks) && count($plan->tasks) > 0)
                                    <?php
                                    $zero_task = collect($plan->tasks)->first(function ($task) {
                                        return $task->level == 0;
                                    });
                                    if ($zero_task) {
                                        echo date('d-m-Y', $zero_task->start / 1000);
                                    } else {
                                        echo '<span class="badge badge-primary">No encontrado</span>';
                                    }
                                    ?>
                                @else
                                    <span class="badge badge-primary">No encontrado</span>
                                @endif
                            </td>
                            <td>
                                @if (isset($plan->tasks) && count($plan->tasks) > 0)
                                    <?php
                                    $zero_task = collect($plan->tasks)->first(function ($task) {
                                        return $task->level == 0;
                                    });
                                    if ($zero_task) {
                                        echo date('d-m-Y', $zero_task->end / 1000);
                                    } else {
                                        echo '<span class="badge badge-primary">No encontrado</span>';
                                    }
                                    ?>
                                @else
                                    <span class="badge badge-primary">No encontrado</span>
                                @endif
                            </td>
                            <td>
                                @if (isset($plan->tasks) && count($plan->tasks) > 0)
                                    <?php
                                    $zero_task = collect($plan->tasks)->first(function ($task) {
                                        return $task->level == 0;
                                    });
                                    if ($zero_task) {
                                        if ($zero_task->status == 'STATUS_UNDEFINED') {
                                            echo '<span class="badge badge-primary">Sin iniciar</span>';
                                        } elseif ($zero_task->status == 'STATUS_ACTIVE') {
                                            echo '<span class="badge badge-warning">En proceso</span>';
                                        } elseif ($zero_task->status == 'STATUS_DONE') {
                                            echo '<span class="badge badge-success">Completado</span>';
                                        } elseif ($zero_task->status == 'STATUS_FAILED') {
                                            echo '<span class="badge badge-danger">Retraso</span>';
                                        } elseif ($zero_task->status == 'STATUS_SUSPENDED') {
                                            echo '<span class="badge badge-secondary">Suspendido</span>';
                                        } else {
                                            echo '<p>' . $zero_task->status . '</p>';
                                        }
                                    } else {
                                        echo '<span class="badge badge-primary">No encontrado</span>';
                                    }
                                    ?>
                                @else
                                    <span class="badge badge-primary">No encontrado</span>
                                @endif
                            </td>
                            <td>
                                <?php
                                $urlVerPlanAccion = '';
                                $urlEditarPlanAccion = route('admin.planes-de-accion.edit', $plan);

                                if ($plan->norma == 'ISO 27001') {
                                    $urlEditarPlanAccion = route('admin.planes-de-accion.edit', $plan);
                                }

                                $urlEliminarPlanAccion = route('admin.planes-de-accion.destroy', $plan->id);
                                $urlVerPlanAccion = $plan->id == 1 ? route('admin.planTrabajoBase.index') : route('admin.planes-de-accion.show', $plan->id);
                                ?>

                                <div class="btn-group">
                                    @can('planes_de_accion_editar')
                                        <a class="btn" href="{{ $urlEditarPlanAccion }}" title="Editar Plan de Acción"><i
                                                class="fas fa-edit"></i></a>
                                    @endcan
                                    @can('planes_de_accion_visualizar_diagrama')
                                        <a class="btn" href="{{ $urlVerPlanAccion }}"
                                            title="Visualizar Plan de Acción"><i class="fas fa-stream"></i></a>
                                    @endcan
                                    @if ($plan->id > 1)
                                        @can('planes_de_accion_eliminar')
                                            <form method="POST" action="{{ $urlEliminarPlanAccion }}" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn" type="submit" title="Eliminar Plan de Acción"><i
                                                        class="fas fa-trash-alt text-danger"></i></button>
                                            </form>
                                        @endcan
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-6 p-0">
                    <strong>
                        Mostrando {{ $perPage }} de {{ $planImplementacionsCount }} resultados
                    </strong>
                </div>
                <div class="col-6 p-0" style="display: flex;justify-content: end">
                </div>
            </div>
        </div>
    </div>
</div>
