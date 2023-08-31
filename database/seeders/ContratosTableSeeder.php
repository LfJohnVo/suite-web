<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContratosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('contratos')->delete();

        \DB::table('contratos')->insert(array (
            0 =>
            array (
                'id' => 1,
                'no_contrato' => '679',
                'tipo_contrato' => 'Fábrica de desarrollo',
                'proveedor_id' => 1,
                'nombre_servicio' => 'test',
                'objetivo' => 'test',
                'fecha_inicio' => '2022-02-22',
                'fecha_fin' => '2022-03-19',
                'vigencia_contrato' => '1 de enero al 28 de febrero',
                'no_pagos' => 3,
                'administrador_contrato' => 'Karen Rodríguez',
                'cargo_administrador' => NULL,
                'servicios_descripcion' => NULL,
                'fecha_firma' => '2022-02-23',
                'periodo_pagos' => NULL,
                'monto_pago' => '4999.00',
                'fecha_inicio_pago' => NULL,
                'minimo' => NULL,
                'maximo' => NULL,
                'area' => NULL,
                'area_administrador' => NULL,
                'puesto' => NULL,
                'pmp_asignado' => NULL,
                'clasificacion' => NULL,
                'fase' => 'Solicitud de contrato',
                'contrato_ampliado' => NULL,
                'estatus' => 'vigentes',
                'file_contrato' => NULL,
                'folio' => NULL,
                'documento' => NULL,
                'convenio_modificatorio' => NULL,
                'created_at' => '2022-02-15 15:23:06',
                'updated_at' => '2022-02-15 16:33:04',
                'deleted_at' => '2022-02-15 16:33:04',
                'tipo_cambio' => NULL,
                'no_proyecto' => NULL,
                'area_id' => NULL,
                'identificador_privado' => 0,
                'firma1' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'no_contrato' => 'SE-25-2018',
                'tipo_contrato' => 'Seguridad de la información',
                'proveedor_id' => 2,
            'nombre_servicio' => 'Servicio Administrado de Seguridad de la Información (SASI)',
            'objetivo' => 'Servicio Administrado de Seguridad de la Información (SASI)',
                'fecha_inicio' => '2018-03-28',
                'fecha_fin' => '2019-06-11',
                'vigencia_contrato' => '12 meses',
                'no_pagos' => 12,
                'administrador_contrato' => 'Ing. Sergio Ernesto Barrañon Hernández',
                'cargo_administrador' => 'Director General de Recursos Humanos, Materiales y Servicios Generales',
                'servicios_descripcion' => NULL,
                'fecha_firma' => '2018-03-28',
                'periodo_pagos' => NULL,
                'monto_pago' => '9948726.21',
                'fecha_inicio_pago' => NULL,
                'minimo' => '3310000.00',
                'maximo' => '9948726.21',
                'area' => NULL,
                'area_administrador' => NULL,
                'puesto' => 'Director General de Tecnologías de la Información y Comunicaciones',
                'pmp_asignado' => 'Ing. Jorge Alberto Márquez Carbonell',
                'clasificacion' => NULL,
                'fase' => 'Auditoría y reportes',
                'contrato_ampliado' => 1,
                'estatus' => 'Cerrado',
                'file_contrato' => '22018-03-28CONTRATO NÚMERO SE-25-2018.pdf',
                'folio' => '16208011118054',
                'documento' => '22018-03-28Fianza.pdf',
                'convenio_modificatorio' => 1,
                'created_at' => '2022-02-18 10:38:35',
                'updated_at' => '2022-09-26 10:57:39',
                'deleted_at' => NULL,
                'tipo_cambio' => 'MXN',
                'no_proyecto' => '61',
                'area_id' => 1,
                'identificador_privado' => 0,
                'firma1' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'no_contrato' => '4600023294',
                'tipo_contrato' => 'Infraestructura',
                'proveedor_id' => 3,
                'nombre_servicio' => 'Servicios de Soporte e Infraestructura de Sistemas Industriales de Tecnología de Automatización.',
                'objetivo' => 'Servicios de Soporte e Infraestructura de Sistemas Industriales de Tecnología de Automatización.',
                'fecha_inicio' => '2020-05-12',
                'fecha_fin' => '2023-05-12',
                'vigencia_contrato' => '3 años',
                'no_pagos' => 36,
                'administrador_contrato' => 'Ana Victoria  Ramos Ricaño',
                'cargo_administrador' => 'Procuración de Servicios',
                'servicios_descripcion' => NULL,
                'fecha_firma' => '2020-05-12',
                'periodo_pagos' => NULL,
                'monto_pago' => '2434878.11',
                'fecha_inicio_pago' => NULL,
                'minimo' => NULL,
                'maximo' => NULL,
                'area' => NULL,
                'area_administrador' => NULL,
                'puesto' => 'Proyect Manager',
                'pmp_asignado' => 'Luis Alberto Fernández Martínez',
                'clasificacion' => NULL,
                'fase' => 'Ejecución',
                'contrato_ampliado' => 0,
                'estatus' => 'vigentes',
            'file_contrato' => '32020-05-12AnexoIII-CONTRATACION DE SERVICOS DE SOPORTE A INFRAESTRUCTURA DE SISTEMAS INDUSTRIALES(v6).pdf',
                'folio' => NULL,
                'documento' => NULL,
                'convenio_modificatorio' => 0,
                'created_at' => '2022-02-18 18:17:49',
                'updated_at' => '2023-06-14 09:21:14',
                'deleted_at' => NULL,
                'tipo_cambio' => 'MXN',
                'no_proyecto' => '101',
                'area_id' => 1,
                'identificador_privado' => 0,
                'firma1' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'no_contrato' => 'IFT-LPN-004-21',
                'tipo_contrato' => 'Seguridad de la información',
                'proveedor_id' => 4,
                'nombre_servicio' => 'Servicios de Análisis de Vulnerabilidades',
            'objetivo' => 'Servicios de Análisis de Vulnerabilidades del Instituto correspondiente a la partida 2, del procedimiento de licitación  pública nacional y electrónica número LA-04340999-E85-2020 integrados por:   2.1 Análisis de vulnerabilidades a activos (infraestructura y aplicaciones web) y 2.2 Respuesta a incidentes y análisis forenses.',
                'fecha_inicio' => '2021-01-01',
                'fecha_fin' => '2022-12-31',
                'vigencia_contrato' => '2 años',
                'no_pagos' => 24,
                'administrador_contrato' => 'Francisco Javier Aguilar Salas',
                'cargo_administrador' => 'Director de Seguridad de la Información',
                'servicios_descripcion' => NULL,
                'fecha_firma' => '2021-01-14',
                'periodo_pagos' => NULL,
                'monto_pago' => '2122568.38',
                'fecha_inicio_pago' => NULL,
                'minimo' => '1899698.74',
                'maximo' => '2122568.38',
                'area' => NULL,
                'area_administrador' => NULL,
                'puesto' => 'Director General de Adquisiciones, Recursos Materiales y Servicios Generales.',
                'pmp_asignado' => 'Juan Carlos Jiménez Ángeles',
                'clasificacion' => NULL,
                'fase' => 'Ejecución',
                'contrato_ampliado' => 0,
                'estatus' => 'vigentes',
                'file_contrato' => '42021-01-01Contrato IFT-LPN-004-21 formalizado.pdf',
                'folio' => NULL,
                'documento' => NULL,
                'convenio_modificatorio' => NULL,
                'created_at' => '2022-02-18 18:53:51',
                'updated_at' => '2023-05-16 10:52:21',
                'deleted_at' => NULL,
                'tipo_cambio' => 'MXN',
                'no_proyecto' => '132',
                'area_id' => 1,
                'identificador_privado' => 0,
                'firma1' => NULL,
            ),
    ));


    }
}