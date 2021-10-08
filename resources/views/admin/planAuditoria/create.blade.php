@extends('layouts.admin')
@section('content')

    {{ Breadcrumbs::render('admin.plan-auditoria.create') }}

    <div class="mt-4 card">
        <div class="py-3 col-md-10 col-sm-9 card-body verde_silent align-self-center" style="margin-top: -40px;">
            <h3 class="mb-1 text-center text-white"><strong> Registrar: </strong> Plan de Auditoría </h3>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.plan-auditoria.store') }}" enctype="multipart/form-data"
                class="row">
                @csrf
                {{ Form::hidden('pdf-value', 'planAuditoria') }}


                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label for="fecha_auditoria"> <i class="far fa-calendar-alt iconos-crear"></i> Fecha de Auditoría</label>
                    <input class=" mt-2 form-control  {{ $errors->has('fecha_auditoria') ? 'is-invalid' : '' }}" type="date"
                        name="fecha_auditoria" id="fecha_auditoria" value="{{ old('fecha_auditoria') }}">
                    @if ($errors->has('fecha_auditoria'))
                        <div class="invalid-feedback">
                            {{ $errors->first('fecha_auditoria') }}
                        </div>
                    @endif
                </div>

                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label for="id_equipo_auditores"><i
                            class="fas fa-users iconos-crear"></i>{{ trans('cruds.auditoriaInterna.fields.equipoauditoria') }}</label>
                    <select multiple
                        class="form-control select2 {{ $errors->has('id_equipo_auditores') ? 'is-invalid' : '' }}"
                        name="equipo[]" id="id_equipo_auditores">
                        @foreach ($equipoauditorias as $equipoauditoria)
                            <option value="{{ $equipoauditoria->id }}"
                                {{ old('id_equipo_auditores') == $equipoauditoria->id ? 'selected' : '' }}>
                                {{ $equipoauditoria->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('equipoauditoria'))
                        <div class="invalid-feedback">
                            {{ $errors->first('equipoauditoria') }}
                        </div>
                    @endif
                </div>


                <div class="form-group col-md-6">
                    <label for="objetivo"><i
                            class="fas fa-bullseye iconos-crear"></i>{{ trans('cruds.planAuditorium.fields.objetivo') }}</label>
                    <textarea class="form-control {{ $errors->has('objetivo') ? 'is-invalid' : '' }}" name="objetivo"
                        id="objetivo">{{ old('objetivo') }}</textarea>
                    @if ($errors->has('objetivo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('objetivo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.planAuditorium.fields.objetivo_helper') }}</span>
                </div>
                <div class="form-group col-md-6">
                    <label for="alcance"><i
                            class="fas fa-chart-line iconos-crear"></i>{{ trans('cruds.planAuditorium.fields.alcance') }}</label>
                    <textarea class="form-control {{ $errors->has('alcance') ? 'is-invalid' : '' }}" name="alcance"
                        id="alcance">{{ old('alcance') }}</textarea>
                    @if ($errors->has('alcance'))
                        <div class="invalid-feedback">
                            {{ $errors->first('alcance') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.planAuditorium.fields.alcance_helper') }}</span>
                </div>
                <div class="form-group col-md-6">
                    <label for="criterios"><i
                            class="fas fa-clipboard-list iconos-crear"></i>{{ trans('cruds.planAuditorium.fields.criterios') }}</label>
                    <textarea class="form-control {{ $errors->has('criterios') ? 'is-invalid' : '' }}" name="criterios"
                        id="criterios">{{ old('criterios') }}</textarea>
                    @if ($errors->has('criterios'))
                        <div class="invalid-feedback">
                            {{ $errors->first('criterios') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.planAuditorium.fields.criterios_helper') }}</span>
                </div>
                <div class="form-group col-md-6">
                    <label for="documentoauditar"><i
                            class="fas fa-file-alt iconos-crear"></i>{{ trans('cruds.planAuditorium.fields.documentoauditar') }}</label>
                    <textarea class="form-control {{ $errors->has('documentoauditar') ? 'is-invalid' : '' }}"
                        name="documentoauditar" id="documentoauditar">{{ old('documentoauditar') }}</textarea>
                    @if ($errors->has('documentoauditar'))
                        <div class="invalid-feedback">
                            {{ $errors->first('documentoauditar') }}
                        </div>
                    @endif
                    <span
                        class="help-block">{{ trans('cruds.planAuditorium.fields.documentoauditar_helper') }}</span>
                </div>
                {{-- <div class="form-group col-12">
                <label for="equipoauditor"><i class="fas fa-users iconos-crear"></i>{{ trans('cruds.planAuditorium.fields.equipoauditor') }}</label>
                <input class="form-control {{ $errors->has('equipoauditor') ? 'is-invalid' : '' }}" type="text" name="equipoauditor" id="equipoauditor" value="{{ old('equipoauditor', '') }}">
                @if ($errors->has('equipoauditor'))
                    <div class="invalid-feedback">
                        {{ $errors->first('equipoauditor') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.planAuditorium.fields.equipoauditor_helper') }}</span>
            </div> --}}
                {{-- <div class="form-group col-12">
                <label for="auditados"><i class="fas fa-users iconos-crear"></i>{{ trans('cruds.planAuditorium.fields.auditados') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="select-all btn btn-info btn-xs" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('auditados') ? 'is-invalid' : '' }}" name="auditados[]" id="auditados" multiple>
                    @foreach ($auditados as $id => $auditados)
                        <option value="{{ $id }}" {{ in_array($id, old('auditados', [])) ? 'selected' : '' }}>{{ $auditados }}</option>
                    @endforeach
                </select>
                @if ($errors->has('auditados'))
                    <div class="invalid-feedback">
                        {{ $errors->first('auditados') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.planAuditorium.fields.auditados_helper') }}</span>
            </div> --}}


                <div class="form-group col-12">
                    <label for="descripcion"><i
                            class="fas fa-align-left iconos-crear"></i>Descripción de actividades</label>
                    <textarea class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}"
                        name="descripcion" id="descripcion">{{ old('descripcion') }}</textarea>
                    @if ($errors->has('descripcion'))
                        <div class="invalid-feedback">
                            {{ $errors->first('descripcion') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.planAuditorium.fields.descripcion_helper') }}</span>
                </div>
                <div class="text-right form-group col-12">
                    <a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn_cancelar">Cancelar</a>
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection


@section('scripts')

    <script type="text/javascript">
        $(document).ready(function() {
            $("#id_equipo_auditores").select2({
                theme: "bootstrap4",
            });
        });
    </script>

@endsection
