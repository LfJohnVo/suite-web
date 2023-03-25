@can('sistema_de_gestion_mejora_acceder')
    <div href="#" class="btn btn-secundario btn_modal_video" data-toggle="modal" data-target="#modal_guia_general"><i class="far fa-play-circle mr-2"></i> GUÍA DE USO</div>
    <ul class="mt-4">
        @can('accion_correctiva_acceder')
        <li><a href="{{ route('admin.accion-correctivas.index') }}">
                <div>
                    <i class="bi bi-diagram-2"></i> <br>
                    Acción Correctiva
                </div>
            </a></li>
        <li>
        @endcan
            {{-- <a href="{{ route('admin.registromejoras.index') }}">
                <div>
                    <i class="far fa-thumbs-up"></i>
                    Registro Mejora
                </div>
            </a> --}}
            @can('centro_atencion_mejoras_acceder')
            <a href="{{ asset('admin/inicioUsuario/reportes/mejoras') }}" class="cards_reportes">
                <div>
                    <i class="bi bi-hand-thumbs-up"></i> <br>
                     Registro Mejora
                </div>
            </a>
            @endcan
        </li>
    </ul>
@else
    <div class="mt-5 row" style="margin-left: -10px">
        <div class="mb-3 col-12">
            <img src="{{ asset('img/not_access.svg') }}" width="400px" style="margin-left: calc(50% - 200px);" />
        </div>
        <div class="col-12">
            <strong style="font-size:12pt">
                <i class="mr-1 fas fa-info-circle"></i>
                No puedes acceder al módulo de Mejoras, solicita al administrador que te
                otorge dichos permisos
            </strong>
        </div>
    </div>
@endcan
