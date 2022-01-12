<?php

namespace Database\Seeders;

use App\Models\ConfigurarSoporteModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([

            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            GapunoTableSeeder::class,
            GaptresTableSeeder::class,
            GapdosTableSeeder::class,
            declaracion_aplicabilidad_table::class,
            EstadodocumentosTableSeeder::class,
            ControlDocumentosSeeder::class,
            EstadoincidentesTableSeeder::class,
            EstusplatrabajoTableSeeder::class,
            ActividadFaseSeeder::class,
            OrganizacionSeeder::class,
            SedeSeeder::class,
            GrupoSeeder::class,
            AreaSeeder::class,
            PuestoSeeder::class,
            PerfilEmpleadosSeeder::class,
            TipoContratosEmpleadoSeeder::class,
            EmpleadosSeeder::class,
            MacroprocesoSeeder::class,
            DocumentoSeeder::class,
            PlanImplementacionSeeder::class,  // Necesario se carga inicialmente el Diagrama Universal de Gantt
            PlanImplementacion9001Seeder::class,
            CategoriaIncidenteSeeder::class,
            SubcategoriaIncidenteSeeder::class,
            ClausulasSeeder::class,
            VulnerabilidadesTableSeeder::class,
            AmenazasTableSeeder::class,
            PanelInicioSeeder::class,
            PanelOrganizacionSeeder::class,
            PermissionRoleTableSeeder::class,
            LanguageSeeder::class,
            GlosarioSeeder::class,
            RoleUserTableSeeder::class,
            Clausula9001Seeder::class,
            NormasSeeder::class,
            ConfigurarSoporteSeeder::class,
            //PlanBaseSeeder::class,
        ]);
    }
}
