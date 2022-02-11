<ul class="mt-4">
    @can('analisis_de_riesgos_amenazas_access')
        <li>
            <a href="{{ route('admin.amenazas.index') }}">
                <div>
                    <i class="bi bi-radioactive"></i> <br>
                    Amenazas
                </div>
            </a>
        </li>
    @endcan
    @can('analisis_de_riesgos_vulnerabilidades_access')
        <li>
            <a href="{{ route('admin.vulnerabilidads.index') }}">
                <div>
                    <i class="bi bi-shield-x"></i> <br>
                    Vulnerabilidades
                </div>
            </a>
        </li>
    @endcan
    @can('analisis_de_riesgos_matriz_riesgo_access')
        <li>
            <a href="{{ route('admin.analisis-riesgos.index') }}">
                <div>
                    <i class="bi bi-table"></i> <br>
                    Matríz de Riesgos
                </div>
            </a>
        </li>
    @endcan
</ul>
