<div class="datatable-fix">
    <table id="datatable_timesheet_create" class="table table-responsive dataTables_scrollBody tabla-llenar-horas">
        <thead class="w-100">
            <tr>
                <th style="min-width:150px;">Proyecto </th>
                <th style="min-width:150px;">Tarea</th>
                <th>Facturable</th>
                <th style="min-width:40px;">Lunes</th>
                <th style="min-width:40px;">Martes</th>
                <th style="min-width:40px;">Miércoles</th>
                <th style="min-width:40px;">Jueves</th>
                <th style="min-width:40px;">Viernes</th>
                <th style="min-width:40px;">Sábado</th>
                <th style="min-width:40px;">Domingo</th>
                <th style="min-width:150px;">Descripción</th>
                <th style="">Opciones</th>
                <th style="min-width:70px;">Horas totales</th>
            </tr>
        </thead>

        <tbody>
            <div class="accordion" style="display:none" id="timesheet-mobile">

                {{-- {{ $contador }} --}}
                @for ($i = 1; $i <= $contador; $i++)

                    <div>Prueba hola</div>
                    <tr id="tr_time_{{ $i }}" wire:ignore>
                        <td class="d-movile" id="heading{{ $i }}">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapse{{ $i }}" aria-expanded="true" aria-controls="collapse{{ $i }}">
                                Collapsible Group Item #1
                            </button>
                        </td>
                        <div id="collapse{{ $i }}" class="collapse show" aria-labelledby="heading{{ $i }}" data-parent="#accordionExample">
                            
                            <td class="d-movile mt-2"
                                style="width:100% !important; font-size:14px !important; color:#373737; font-weight:400 !important;">
                                Proyecto </td>
                            <td wire:ignore class="td-proyecto">
                                <select id="select_proyectos{{ $i }}" data-contador="{{ $i }}"
                                    data-type="parent" name="timesheet[{{ $i }}][proyecto]" class="select2">
                                    <option selected disabled>Seleccione proyecto</option>
                                    @foreach ($proyectos as $proyecto)
                                        <option value="{{ $proyecto['id'] }}">
                                            {{ $proyecto['identificador'] }} -
                                            {{ $proyecto['proyecto'] }}</option>
                                    @endforeach
                                </select>
                                <small class="timesheet_{{ $i }}_proyecto errores text-danger"></small>
                            </td>
                            <td class="d-movile mt-2"
                                style="width:100% !important; font-size:14px !important; color:#373737; font-weight:400 !important;">
                                Tarea</td>
                            <td class="td-tarea">
                                <select id="select_tareas{{ $i }}" data-contador="{{ $i }}"
                                    name="timesheet[{{ $i }}][tarea]" class="select2 select_tareas"
                                    disabled>
                                    <option selected disabled>Seleccione tarea</option>
                                </select>
                                <small class="timesheet_{{ $i }}_tarea errores text-danger"></small>
                            </td>
                            <td>
                                <span class="d-movile"
                                    style="margin-top: 20px; font-size:14px !important; color:#373737; font-weight:400 !important;">Facturable</span>

                                <input type="checkbox" checked name="timesheet[{{ $i }}][facturable]"
                                    style="min-width: 50px;">
                            </td>
                            <td class="d-movile mt-2"
                                style="width:100% !important; font-size:14px !important; color:#373737; font-weight:400 !important;">
                                Horas por actividad</td>
                            <td class="td-date-input">
                                <span class="d-movile">Lunes</span>
                                <input type="number" name="timesheet[{{ $i }}][lunes]" data-dia="lunes"
                                    data-i="{{ $i }}" id="ingresar_hora_lunes_{{ $i }}"
                                    class="ingresar_horas  form-control" min="0" max="24">
                                <small class="timesheet_{{ $i }}_horas errores text-danger"
                                    style="position:absolute; margin-top:3px;"></small>
                            </td>
                            <td class="td-date-input">
                                <span class="d-movile">Martes</span>
                                <input type="number" name="timesheet[{{ $i }}][martes]" data-dia="martes"
                                    data-i="{{ $i }}" id="ingresar_hora_martes_{{ $i }}"
                                    class="ingresar_horas  form-control" min="0" max="24">
                            </td>
                            <td class="td-date-input">
                                <span class="d-movile">Miércoles</span>
                                <input type="number" name="timesheet[{{ $i }}][miercoles]"
                                    data-dia="miercoles" data-i="{{ $i }}"
                                    id="ingresar_hora_miercoles_{{ $i }}"
                                    class="ingresar_horas  form-control" min="0" max="24">
                            </td>
                            <td class="td-date-input">
                                <span class="d-movile">Jueves</span>
                                <input type="number" name="timesheet[{{ $i }}][jueves]" data-dia="jueves"
                                    data-i="{{ $i }}" id="ingresar_hora_jueves_{{ $i }}"
                                    class="ingresar_horas  form-control" min="0" max="24">
                            </td>
                            <td class="td-date-input">
                                <span class="d-movile">Viernes</span>
                                <input type="number" name="timesheet[{{ $i }}][viernes]" data-dia="viernes"
                                    data-i="{{ $i }}" id="ingresar_hora_viernes_{{ $i }}"
                                    class="ingresar_horas  form-control" min="0" max="24">
                            </td>
                            <td class="td-date-input">
                                <span class="d-movile">Sábado</span>
                                <input type="number" name="timesheet[{{ $i }}][sabado]"
                                    data-dia="sabado" data-i="{{ $i }}"
                                    id="ingresar_hora_sabado_{{ $i }}"
                                    class="ingresar_horas  form-control" min="0" max="24">
                            </td>
                            <td class="td-date-input">
                                <span class="d-movile">Domingo</span>
                                <input type="number" name="timesheet[{{ $i }}][domingo]"
                                    data-dia="domingo" data-i="{{ $i }}"
                                    id="ingresar_hora_domingo_{{ $i }}"
                                    class="ingresar_horas  form-control" min="0" max="24">
                            </td>
                            <td class="d-movile mt-2"
                                style="width:100% !important; font-size:14px !important; color:#373737; font-weight:400 !important;">
                                Descripción</td>
                            <td class="td-descripcion">
                                <textarea name="timesheet[{{ $i }}][descripcion]" class="form-control"
                                    style="min-height:40px !important;"></textarea>
                            </td>
                            <td class="td_opciones">
                                @if ($i == 1)
                                    <div class="btn btn_clear_tr btn-eliminar-responsive"
                                        data-tr="tr_time_{{ $i }}" style="color:red;"
                                        title="Eliminar fila">
                                        <i class="fa-solid fa-trash-can" style="font-size:20px;"></i>
                                        <font style="font-size:15px;" class="d-movile mt-1">Eliminar
                                            actividad
                                        </font>
                                    </div>
                                @endif

                                @if ($i > 1)
                                    <div class="btn btn_destroy_tr btn-eliminar-responsive"
                                        data-tr="tr_time_{{ $i }}" style="color:red; font-size:20px;"
                                        title="Eliminar fila"><i class="fa-solid fa-trash-can"></i>
                                        <font class="d-movile mt-1" style="font-size:15px;">Eliminar
                                            actividad
                                        </font>
                                    </div>
                                @endif
                            </td>
                            <td class="td_total_filas">
                                <font class="d-movile mr-3"
                                    style="font-weight:500; margin-top: 17px; color:#3086AF; font-size:14px; text-left">
                                    Horas&nbsp;totales</font>
                                <div class="form-control contenedor-total-filas">
                                    <label id="suma_horas_fila_{{ $i }}" class="total_filas"></label>
                                </div>
                            </td>
                        </div>
                    </tr>

                @endfor
            </div>
            <tr wire:ignore.self class="d-movile-none">
                <td colspan="3">Total horas facturables</td>
                <td><label id="suma_dia_lunes"></label></td>
                <td><label id="suma_dia_martes"></label></td>
                <td><label id="suma_dia_miercoles"></label></td>
                <td><label id="suma_dia_jueves"></label></td>
                <td><label id="suma_dia_viernes"></label></td>
                <td><label id="suma_dia_sabado"></label></td>
                <td><label id="suma_dia_domingo"></label></td>
                <td><label id="total_h_facts"></label></td>
                <td></td>
                <td><label id="total_horas_filas"></label></td>
            </tr>
            <tr wire:ignore.self class="d-movile-none">
                <td colspan="3">Total horas no facturables</td>
                <td><label id="suma_dia_lunes_no_fact"></label></td>
                <td><label id="suma_dia_martes_no_fact"></label></td>
                <td><label id="suma_dia_miercoles_no_fact"></label></td>
                <td><label id="suma_dia_jueves_no_fact"></label></td>
                <td><label id="suma_dia_viernes_no_fact"></label></td>
                <td><label id="suma_dia_sabado_no_fact"></label></td>
                <td><label id="suma_dia_domingo_no_fact"></label></td>
                <td><label id="total_h_no_facts"></label></td>
                <td colspan="2"></td>
            </tr>
        </tbody>
    </table>

</div>

<div class="mt-4 caja-boton-secundario" style="display:flex; justify-content:space-between;">
    <button class="btn btn-secundario" wire:click.prevent="$set('contador', {{ $contador + 1 }})">
        <font>Agregar fila</font>
    </button>

    <div class="botones-acciones-timesheet">
        <button class="btn btn_cancelar btn_enviar_formulario btn-borrador-timesheet" style="position:relative;">
            <input id="estatus_papelera" type="radio" name="estatus" value="papelera"
                style="opacity:0; position: absolute;">
            <label data-type="borrador" for="estatus_papelera"
                style="width:100%; height: 100%; position:absolute; display:flex; justify-content: center; align-items: center; top:0; left:0;">
                <font class="d-movile-none">Guardar borrador</font><i class="fa-solid fa-eraser"></i>
            </label>
        </button>

        <div class="btn btn-success btn-borrador-registrar" style="position: relative;" data-toggle="modal"
            data-target="#modal_aprobar_">
            <input id="estatus_pendiente" type="radio" name="estatus" value="pendiente"
                style="opacity:0; position: absolute;">
            <label for="estatus_pendiente"
                style="width:100%; height: 100%; position:absolute; display:flex; justify-content: center; align-items: center; top:0; left:0;">
                <font class="d-movile-none">Registrar</font><i class="fa-solid fa-floppy-disk"></i>
            </label>
        </div>
    </div>
</div>
