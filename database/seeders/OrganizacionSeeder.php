<?php

namespace Database\Seeders;

use App\Models\Organizacion;
use Illuminate\Database\Seeder;

class OrganizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organizacion::create([
            'empresa' => 'Silent4Business',
            'direccion' => 'direcionprueba #4,CDMX, México',
            'telefono' => '5593029345',
            'correo' => 'Silent4Business@s4b.com',
            'pagina_web' => 'https://silent4bussines.com',
            'giro' => 'Seguridad',
            'servicios' => 'Seguridad informática',
            'mision' => 'loremipsum',
            'vision' => 'loremipsum',
            'valores' => 'loremipsum',
            'team_id' => null,
            'antecedentes' => 'loremipsum',
            'logotipo', null
        ]);
    }
}
