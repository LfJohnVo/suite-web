<ul class="mt-4">
    {{-- <li><a href="{{ route('admin.puestos.index') }}"> --}}
    <li><a href="#" data-ventana="puestos" data-ruta="Capacitaciones" class="btn_ventana_menu">
            <div>
                <i class="bi bi-briefcase"></i>
                <br>
                Perfiles de Puestos
            </div>
        </a></li>

        <div class="ventana_menu" id="puestos" style="color:#008186 !important">
            <i class="fas fa-arrow-circle-left iconos_menu text-align:left btn_cerrar_ventana" data-ventana="puestos"
                style="font-size:20pt; position: absolute; left:60px; cursor:pointer"></i>
            <h3 class="text-center"><strong>Perfil de Puesto</strong></h3>
            <ul>
                <li><a href="{{ route('admin.puestos.index') }}">
                        <div>
                            <i class="fas fa-briefcase"></i>
                            <br>
                            Crear Perfil de Puesto
                        </div>
                    </a></li>
                <li><a href="{{ route('admin.consulta-puestos') }}">
                        <div>
                            <i class="fab fa-black-tie"></i>
                            <br>
                            Consulta de perfiles de puesto
                        </div>
                    </a></li>
            </ul>
        </div>
    <li><a href="{{ route('admin.perfiles.index') }}">
            <div>
                <i class="bi bi-bookshelf"></i>
                <br>
                Niveles Jerárquicos
            </div>
        </a></li>
    <li><a href="{{ route('admin.empleados.index') }}">
            <div>
                <i class="bi bi-people"></i>
                <br>
                Empleados
            </div>
        </a></li>
    <li><a href="{{ route('admin.capital.expedientes-profesionales') }}">
            <div>
                <i class="bi bi-person-rolodex"></i>
                <br>
                Expedientes Profesionales
            </div>
        </a></li>
    <li><a href="{{ route('admin.organigrama.index') }}">
            <div>
                <i class="bi bi-diagram-3"></i>
                <br>
                Organigrama
            </div>
        </a></li>
    <li><a href="#" data-ventana="capacitaciones" data-ruta="Capacitaciones" class="btn_ventana_menu">
            <div>
                <i class="bi bi-person-video3"></i>
                <br>
                Capacitaciones
            </div>
        </a></li>
    <div class="ventana_menu" id="capacitaciones" style="color:#345183 !important">
        <i class="fas fa-arrow-circle-left iconos_menu text-align:left btn_cerrar_ventana" data-ventana="capacitaciones"
            style="font-size:20pt; position: absolute; left:60px; cursor:pointer"></i>
        <h3 class="text-center"><strong>Capacitaciones</strong></h3>
        <ul>
            <li><a href="{{ route('admin.categoria-capacitacion.index') }}">
                    <div>
                        <i class="fas fa-layer-group"></i>
                        <br>
                        Categorías
                    </div>
                </a></li>
            <li><a href="{{ route('admin.recursos.index') }}">
                    <div>
                        <i class="fas fa-graduation-cap"></i>
                        <br>
                        Capacitaciones
                    </div>
                </a></li>
        </ul>
    </div>
    <li><a href="{{ route('admin.tipos-contratos-empleados.index') }}">
            <div>
                <i class="bi bi-bank"></i>
                <br>
                Tipos de contratos
            </div>
        </a>
    </li>
    <li><a href="{{ route('admin.entidades-crediticias.index') }}">
            <div>
                <i class="bi bi-bank"></i>
                <br>
                Entidades Crediticias
            </div>
        </a>
    </li>
    <li>
        <a href="#">
            <div>
                <i class="bi bi-chat-square-dots"></i>
                <br>
                Solicitudes e Incidencias
            </div>
        </a>
    </li>
    <li>
        <a href="#">
            <div>
                <i class="bi bi-tag"></i>
                <br>
                Beneficios
            </div>
        </a>
    </li>
    <li><a href="{{ route('admin.lista-documentos-empleados') }}">
            <div>
                <i class="bi bi-file-earmark-zip"></i>
                <br>
                Lista de Documentos de Empleados
            </div>
        </a>
    </li>
</ul>
