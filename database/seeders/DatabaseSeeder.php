<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
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
            EmpleadosSeeder::class,
            MacroprocesoSeeder::class,
            DocumentoSeeder::class,
            CategoriaIncidenteSeeder::class,
            SubcategoriaIncidenteSeeder::class,
            //PlanBaseSeeder::class,
        ]);
    }
}
