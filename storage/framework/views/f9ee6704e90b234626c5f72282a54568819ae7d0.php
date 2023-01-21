<?php $__env->startSection('content'); ?>
    <style type="text/css">
        body {
            background-color: #fff;
        }

        html {
            overflow-y: scroll !important;
        }

        .info-personal .caja_img_perfil {
            border-radius: 100px;
            height: 100px;
            width: 100px;
            box-shadow: 0px 1px 4px 1px rgba(0, 0, 0, 0.4);
            margin: auto;
            margin-top: -50px;
            margin-bottom: 20px;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .info-personal img {
            height: 100px;
            clip-path: circle(50px at 50% 50%);
        }

        .info-personal .cards {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-top: 8px;
        }



        table td i {
            font-size: 17pt;
            cursor: pointer;
            margin: 3px;
            color: #345183;
        }

        table td i:hover {
            opacity: 0.8;
        }

        td.opciones_iconos {
            text-align: center;
            vertical-align: middle;
        }

        .dataTables_filter {
            overflow: hidden;
        }

        .caja_botones_menu a {
            outline: none;
        }




        /*alerta*/

        .delete {
            margin: auto;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
        }

        .icono_delete {
            margin: 40px 0px;
            color: #FF5500;
            opacity: 0.7;
            font-size: 70pt;
        }

        .eliminar {
            background-color: #FF5500;
            opacity: 0.7;
            border: none;
        }

        .eliminar:hover {
            background-color: #FF5500;
            opacity: 1;
        }

        body.c-dark-theme .delete {
            background: #2a2b36;
        }

        body.c-dark-theme .btn-outline-secondary {
            border: 1px solid #ccc;
            color: #ccc;
        }

        .btn_archivar {
            all: unset !important;
        }


        .caja_botones_secciones a {
            position: relative;
        }

        .indicador_numero {
            position: absolute;
            background-color: #3086AF;
            color: #fff !important;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            padding: 0;
            margin: 0;
            border-radius: 50px;
            top: 0;
            right: 0;
            margin-top: -10px;
        }

        .container {
            max-width: 1500px !important;
        }
    </style>
    <?php echo $__env->make('components.primeros-pasos', [
        'existsEmpleado',
        'existsOrganizacion',
        'existsVinculoEmpleadoAdmin',
        'existsAreas',
        'existsPuesto',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.flashMessages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="inicio_usuario" class="row" style="">
        <h5 class="col-12 titulo_general_funcion">Mi Perfil</h5>
        <div class="col-lg-12 row caja_botones_secciones d-mobile-none">
            <?php if($usuario->empleado): ?>
                <div class="col-12 caja_botones_menu" style="justify-content: center !important;">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mi_perfil_mis_datos_acceder')): ?>
                        <a href="#" id="b_misDatos" onclick="almacenarMenuEnLocalStorage('misDatos')" data-tabs="s_misDatos"
                            class=""><i class="bi bi-file-person"></i>
                            Datos</a>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mi_perfil_mi_calendario_acceder')): ?>
                        <a href="#" id="b_calendario" onclick="almacenarMenuEnLocalStorage('calendario')"
                            data-tabs="s_calendario"><i class="bi bi-calendar3"></i>
                            Calendario</a>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mi_perfil_mis_actividades_acceder')): ?>
                        <a href="#" id="b_actividades" onclick="almacenarMenuEnLocalStorage('actividades')"
                            data-tabs="s_actividades">
                            <?php if($contador_actividades): ?>
                                <span class="indicador_numero"><?php echo e($contador_actividades); ?></span>
                            <?php endif; ?>
                            <i class="bi bi-stopwatch"></i>Actividades
                        </a>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mi_perfil_mis_aprobaciones_acceder')): ?>
                        <a href="#" id="b_aprobaciones" onclick="almacenarMenuEnLocalStorage('aprobaciones')"
                            data-tabs="s_aprobaciones">
                            <?php if($contador_revisiones): ?>
                                <span class="indicador_numero"><?php echo e($contador_revisiones); ?></span>
                            <?php endif; ?>
                            <i class="bi bi-check2"></i>Aprobaciones
                        </a>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mi_perfil_mis_capacitaciones_acceder')): ?>
                        <a href="#" id="b_capacitaciones" onclick="almacenarMenuEnLocalStorage('capacitaciones')"
                            data-tabs="s_capacitaciones">
                            <?php if($contador_recursos >= 1): ?>
                                <span class="indicador_numero" id="contadorDeCapacitaciones"></span>
                            <?php endif; ?>
                            <i class="bi bi-mortarboard"></i>Capacitaciones
                        </a>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mi_perfil_mis_reportes_acceder')): ?>
                        <a href="#" id="b_reportes" onclick="almacenarMenuEnLocalStorage('reportes')"
                            data-tabs="s_reportes">
                            <i class="bi bi-clipboard-check"></i>
                            Reportes</a>
                    <?php endif; ?>
                    <?php
                        if ($solicitudes_pendientes == 0) {
                            $mostrar_solicitudes = false;
                        } else {
                            $mostrar_solicitudes = true;
                        }
                    ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mi_perfil_modulo_solicitud_ausencia')): ?>
                        <div x-data="{ open: <?php echo \Illuminate\Support\Js::from($mostrar_solicitudes)->toHtml() ?> }">
                            <a href="#" id="b_solicitudes" onclick="almacenarMenuEnLocalStorage('solicitudes')"
                                data-tabs="s_solicitudes">
                                <i class="bi bi-clipboard-check"></i>
                                Solicitudes
                                <span class="indicador_numero" style=" background: rgb(100, 110, 220);"
                                    x-show="open"><?php echo e($solicitudes_pendientes); ?></span>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="caja_caja_secciones">
                <?php if($usuario->empleado): ?>
                    <div class="caja_secciones">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mi_perfil_mis_datos_acceder')): ?>
                            <section id="s_misDatos" data-id="datos" class="">
                                <?php echo $__env->make('admin.inicioUsuario.mis-datos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </section>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mi_perfil_mi_calendario_acceder')): ?>
                            <section id="s_calendario" data-id="calendario">
                                <div class="container">
                                    <?php echo $__env->make('admin.inicioUsuario.calendario', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </section>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mi_perfil_mis_actividades_acceder')): ?>
                            <section id="s_actividades" data-id="actividades">
                                <div class="container">
                                    <?php echo $__env->make('admin.inicioUsuario.actividades', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </section>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mi_perfil_mis_aprobaciones_acceder')): ?>
                            <section id="s_aprobaciones" data-id="aprobaciones">
                                <div class="container">
                                    <?php echo $__env->make('admin.inicioUsuario.aprobaciones', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </section>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mi_perfil_mis_capacitaciones_acceder')): ?>
                            <section id="s_capacitaciones" data-id="capacitaciones">
                                <div class="container">
                                    <?php echo $__env->make('admin.inicioUsuario.capacitaciones', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </section>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mi_perfil_mis_reportes_acceder')): ?>
                            <section id="s_reportes" data-id="reportes">
                                <div class="container">
                                    <?php echo $__env->make('admin.inicioUsuario.reportes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </section>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mi_perfil_modulo_solicitud_ausencia')): ?>
                            <section id="s_solicitudes" data-id="solicitudes">
                                <div class="container">
                                    <?php echo $__env->make('admin.inicioUsuario.solicitudes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </section>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <?php echo $__env->make('admin.inicioUsuario.agenda', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="d-mobile w-100">
            <div style="
                    width: 90%;
                    margin: auto;
                    height: 180px;
                    background-color: #788BAC;
                    margin-top: -80px;
                    border-bottom-left-radius: 60px;
                    border-bottom-right-radius: 60px;
            "></div>
            <img class="img_empleado_presentacion_mis_datos" src="<?php echo e(asset('storage/empleados/imagenes')); ?>/<?php echo e($usuario->empleado ? $usuario->empleado->avatar : 'user.png'); ?>">

            <h3 style="color: #3086AF; margin-top:30px; text-align: center;"><?php echo e($usuario->empleado->name ?? 'No definido'); ?></h3>
            <h5 style="color: #000; margin-top:15px; text-align: center;"><?php echo e($usuario->empleado->puesto ?? 'No definido'); ?></h5>
            <h6 style="color: #788BAC; margin-top:15px; text-align: center;"><?php echo e($usuario->empleado->area->area ?? 'No definido'); ?></h6>
            <h6 style="color: #747474; margin-top:15px; text-align: center;"><strong style="color:#3086AF;">Empleado:</strong> <?php echo e($usuario->empleado->n_empleado ?? 'No definido'); ?></h6>

            <div class="caja-cards-mobile-datos mt-5">
                <div class="card card-body" data-toggle="modal" data-target="#mis_datos_mobile">
                    <i class="bi bi-file-text"></i>
                    <h6>Mis datos</h6>
                </div>
                <div class="card card-body" data-toggle="modal" data-target="#mi_equipo_mobile">
                    <i class="bi bi-people" style="transform:scale(1.15);"></i>
                    <h6>Mi equipo</h6>
                </div>
            </div>
            <div class="caja-cards-mobile-datos">
                <div class="card card-body" data-toggle="modal" data-target="#mis_activos_mobile">
                    <i class="bi bi-laptop  "></i>
                    <h6>Mis activos</h6>
                </div>

                <div class="card card-body" data-toggle="modal" data-target="#mis_competencias_mobile">
                    <i class="bi bi-bookmark-star"></i>
                    <h6>Mis competencias</h6>
                </div>
            </div>
            <div class="caja-cards-mobile-datos">
                <div class="card card-body">
                    <i class="bi bi-bullseye"></i>
                    <h6>Mis objetivos</h6>
                </div>
                <div class="card card-body">
                    <i class="bi bi-person-badge"></i>
                    <h6>Mi autoevaluación</h6>
                </div>
            </div>
            <div class="caja-cards-mobile-datos">
                <div class="card card-body">
                    <i class="bi bi-person-badge-fill mr-2"></i>
                    <h6>Evaluaciones a realizar</h6>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="mis_datos_mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: #3086AF;">Mis Datos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php if(!empty($panel_rules->n_empleado)): ?>
                            <?php if($panel_rules->n_empleado): ?>
                                <div class="form-group">
                                    <label><i class="bi bi-person iconos-crear"></i>N° Empleado</label>
                                    <div class="text-muted">
                                        <?php echo e($usuario->empleado->n_empleado); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if($panel_rules->email): ?>
                                <div class="form-group">
                                    <label><i class="bi bi-envelope iconos-crear"></i> Email</label>
                                    <div class="text-muted">
                                        <?php echo e($usuario->empleado->email); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if($panel_rules->fecha_ingreso): ?>
                                <div class="form-group">
                                    <label><i class="bi bi-calendar2-event iconos-crear"></i> Fecha de ingreso</label>
                                    <div class="text-muted">
                                        <?php echo e(\Carbon\Carbon::parse($usuario->empleado->antiguedad)->format('d/m/Y')); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if($panel_rules->jefe_inmediato): ?>
                                <div class="form-group">
                                    <label><i class="bi bi-person iconos-crear"></i> Jefe inmediato</label>
                                    <div class="text-muted">
                                        <?php echo e($usuario->empleado->supervisor ? $usuario->empleado->supervisor->name : 'Sin Jefe Inmediato'); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if($panel_rules->area): ?>
                                <div class="form-group">
                                    <label><i class="bi bi-diagram-3 iconos-crear"></i> Área</label>
                                    <div class="text-muted">
                                        <?php echo e($usuario->empleado->area ? $usuario->empleado->area->area : 'Dato no registrado'); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if($panel_rules->puesto): ?>
                                <div class="form-group">
                                    <label><i class="bi bi-person-badge iconos-crear"></i> Puesto</label>
                                    <div class="text-muted">
                                        <?php echo e($usuario->empleado->puesto ? $usuario->empleado->puesto : 'Dato no registrado'); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if($panel_rules->sede): ?>
                                <div class="form-group">
                                    <label><i class="bi bi-building iconos-crear"></i> Sede</label>
                                    <div class="text-muted">
                                        <?php echo e($usuario->empleado->sede ? $usuario->empleado->sede->sede : 'Dato no registrado'); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if($panel_rules->telefono): ?>
                                <div class="form-group">
                                    <label><i class="bi bi-telephone iconos-crear"></i> Teléfono</label>
                                    <div class="text-muted">
                                        <?php echo e($usuario->empleado->telefono ? $usuario->empleado->telefono : 'Dato no registrado'); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php if($panel_rules->cumpleaños): ?>
                            <div class="form-group">
                                <label><i class="bi bi-calendar4-event iconos-crear"></i> Cumpleaños</label>
                                <div class="text-muted">
                                    <?php echo e(\Carbon\Carbon::parse($usuario->empleado->cumpleaños)->format('d-m-Y') ?: 'Dato no registrado'); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($panel_rules->perfil): ?>
                            <div class="form-group">
                                <label><i class="bi bi-person-badge iconos-crear"></i> Perfil</label>
                                <div class="text-muted">
                                    <?php echo e($usuario->empleado->perfil ? $usuario->empleado->perfil->nombre : 'Dato no registrado'); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($panel_rules->genero): ?>
                            <div class="form-group">
                                <label><i class="bi bi-person iconos-crear"></i> Genero</label>
                                <div class="text-muted">
                                    <?php echo e($usuario->empleado->genero ? $usuario->empleado->genero : 'Dato no registrado'); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($panel_rules->estatus): ?>
                            <div class="form-group">
                                <label><i class="bi bi-reception-3 iconos-crear"></i> Estatus</label>
                                <div class="text-muted">
                                    <?php echo e($usuario->empleado->estatus ? $usuario->empleado->estatus : 'Dato no registrado'); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($panel_rules->direccion): ?>
                            <div class="form-group">
                                <label><i class="bi bi-geo-alt iconos-crear"></i> Dirección</label>
                                <div class="text-muted">
                                    <?php echo e($usuario->empleado->direccion ? $usuario->empleado->direccion : 'Dato no registrado'); ?>

                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="text-right">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="mi_equipo_mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: #3086AF;">Mi Equipo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php $__empty_1 = true; $__currentLoopData = $equipo_a_cargo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="caja-lis-mi-equipo-mobile">
                                <div class="d-flex mt-4">
                                    <img class="img_empleado" src="<?php echo e(asset('storage/empleados/imagenes')); ?>/<?php echo e($empleado->avatar); ?>">
                                    <div class="w-100">
                                        <h6 class="w-100 m-0" style="color: #3086AF;"><?php echo e($empleado->name); ?></h6>
                                        <div class="d-flex mt-2">
                                            <a class="mr-5" style="font-size:20px; color: #345183;" href="https://wa.me/<?php echo e($empleado->telefono_movil ? $empleado->telefono_movil : $empleado->telefono); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                            <a class="mr-5" style="font-size:20px; color: #345183;" href="tel:<?php echo e($empleado->telefono_movil ? $empleado->telefono_movil : $empleado->telefono); ?>"><i class="fas fa-mobile-alt"></i></a>
                                            <a class="mr-5" style="font-size:20px; color: #345183;" href="mailto:<?php echo e($empleado->email); ?>"><i class="fas fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php $__currentLoopData = $equipo_trabajo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="caja-lis-mi-equipo-mobile">
                                    <div class="d-flex mt-4">
                                        <img class="img_empleado" src="<?php echo e(asset('storage/empleados/imagenes')); ?>/<?php echo e($empleado->avatar); ?>">
                                        <div class="w-100">
                                            <h6 class="w-100 m-0" style="color: #3086AF;"><?php echo e($empleado->name); ?></h6>
                                            <div class="d-flex mt-2">
                                                <a class="mr-5" style="font-size:20px; color: #345183;" href="https://wa.me/<?php echo e($empleado->telefono_movil ? $empleado->telefono_movil : $empleado->telefono); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                                <a class="mr-5" style="font-size:20px; color: #345183;" href="tel:<?php echo e($empleado->telefono_movil ? $empleado->telefono_movil : $empleado->telefono); ?>"><i class="fas fa-mobile-alt"></i></a>
                                                <a class="mr-5" style="font-size:20px; color: #345183;" href="mailto:<?php echo e($empleado->email); ?>"><i class="fas fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <div class="text-right mt-5">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="mis_activos_mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: #3086AF;">Mis Activos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p style="color: #3086AF;">Estos son los activos que tienes a tu cargo en estos momentos.</p>
                        <?php if($activos): ?>
                        <?php $__currentLoopData = $activos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="d-flex mt-4">
                                <i class="bi bi-pc-display card card-body d-flex align-items-center justify-content-center" style="background-color: #F6F6F6; font-size: 30px; max-width:30px; max-height: 30px; border-radius:100px;"></i>
                                <div class="ml-3">
                                    <h6 class="m-0">ACT-<?php echo e($activo->id); ?></h6>
                                    <p class="m-0"><?php echo e($activo->nombreactivo); ?></p>
                                    <p class="m-0"><small><?php echo e($activo->descripcion); ?></small></p>
                                </div>
                            </div>
                            <hr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div class="d-flex mt-4">
                                <i class="bi bi-pc-display card card-body d-flex align-items-center justify-content-center" style="background-color: #F6F6F6; font-size: 30px; max-width:30px; max-height: 30px; border-radius:100px;"></i>
                                <div class="ml-3">
                                    NA
                                </div>
                            </div>
                            <hr>
                        <?php endif; ?>

                        <div class="text-right mt-5">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="mis_competencias_mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: #3086AF;">Mis Competencias</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <?php $__currentLoopData = $competencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $competencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($competencia->competencia): ?>
                                <div class="item-competencia">
                                    <img class="img_empleado" style="transform: scale(0.7);" src="<?php echo e($competencia->competencia->imagen_ruta); ?>">
                                    <h6 class="ml-2 w-100" style="margin: 0;"><?php echo e($competencia->competencia->nombre); ?></h6>
                                    <small class="ml-2"><?php echo e($competencia->nivel_esperado); ?></small>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="text-right mt-5">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script>
        $(function() {
            let dtButtons = [{
                    extend: 'csvHtml5',
                    title: `Usuarios ${new Date().toLocaleDateString().trim()}`,
                    text: '<i class="fas fa-file-csv" style="font-size: 1.1rem; color:#3490dc"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Exportar CSV',
                    exportOptions: {
                        columns: ['th:not(:last-child):visible']
                    }
                },
                {
                    extend: 'excelHtml5',
                    title: `Usuarios ${new Date().toLocaleDateString().trim()}`,
                    text: '<i class="fas fa-file-excel" style="font-size: 1.1rem;color:#0f6935"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Exportar Excel',
                    exportOptions: {
                        columns: ['th:not(:last-child):visible']
                    }
                },
                {
                    extend: 'colvis',
                    text: '<i class="fas fa-filter" style="font-size: 1.1rem;color:#000"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Seleccionar Columnas',
                },
                {
                    extend: 'colvisGroup',
                    text: '<i class="fas fa-eye" style="font-size: 1.1rem;color:#000"></i>',
                    className: "btn-sm rounded pr-2",
                    show: ':hidden',
                    titleAttr: 'Ver todo',
                },
                {
                    extend: 'colvisRestore',
                    text: '<i class="fas fa-undo" style="font-size: 1.1rem;"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Restaurar a estado anterior',
                }

            ];

            let dtOverrideGlobals = {
                buttons: dtButtons,
            };
            let table = $('#tblReportes').DataTable(dtOverrideGlobals);
            setTimeout(() => {
                table.columns.adjust().draw();
            }, 1000);
            document.getElementById('b_reportes').addEventListener('click', () => {
                setTimeout(() => {
                    table.columns.adjust().draw();
                }, 1000);
            })
        });
        document.addEventListener('DOMContentLoaded', function() {
            seleccionarMenuAlIniciar();
            const btnActividades = document.getElementById('b_actividades');
            btnActividades.addEventListener('click', (e) => {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            })
        })

        function seleccionarMenuAlIniciar() {
            let tabSeleccionada = localStorage.getItem('mi-perfil-menu');
            if (tabSeleccionada) {
                document.querySelector(`section#s_${tabSeleccionada}`).classList.add('caja_tab_reveldada')
                document.querySelector(`a#b_${tabSeleccionada}`).classList.add('btn_activo')
            } else {
                document.querySelector(`section#s_misDatos`).classList.add('caja_tab_reveldada')
                document.querySelector(`a#b_misDatos`).classList.add('btn_activo')

            }
        }

        function almacenarMenuEnLocalStorage(menuSeleccionado) {
            localStorage.setItem('mi-perfil-menu', menuSeleccionado);
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/inicioUsuario/index.blade.php ENDPATH**/ ?>