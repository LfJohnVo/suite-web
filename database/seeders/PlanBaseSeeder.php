<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlanBaseActividade;
use Carbon\Carbon;

class PlanBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $planbs = [
            // [
            //     'id'                 => 1,
            //     'actividad'               => 'ANALISIS INICIAL',
            //     'fecha_inicio'            => Carbon::now(),
            //     'fecha_fin'            => Carbon::now(),  'estatus_id' => 1,
            // ],
            [
                'id'                 => 2,
                'actividad'               => 'Realizar levantamiento de información con formulario de estado actual',
                'fecha_inicio'            => Carbon::now(),
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
                'actividad_fase_id' => 1,
            ],
            [
                'id'                 => 3,
                'actividad'               => 'Evaluar tablero y presentar resultados a dirección',
                'fecha_inicio'            => Carbon::now(), 
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,   
            ],
            [
                'id'                 => 4,
                'actividad'               => 'Identificar brechas y esfuerzos',
                'fecha_inicio'            => Carbon::now(),   
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
            ],
            // [
            //     'id'                 => 5,
            //     'actividad'               => 'PLANEACIÓN',
            //     'fecha_inicio'            => Carbon::now(),  
            //     'fecha_fin'            => Carbon::now(),  
            //     'estatus_id' => 1,  
            // ],
            [
                'id'                 => 6,
                'actividad'               => 'Identificar el Contexto de la Organización',
                'fecha_inicio'            => Carbon::now(), 
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,   
            ],
            [
                'id'                 => 7,
                'actividad'               => 'Entendimiento de las necesidades y expectativas de las partes interesadas',
                'fecha_inicio'            => Carbon::now(),   
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
            ],
            [
                'id'                 => 8,
                'actividad'               => 'Manual del SGI',
                'fecha_inicio'            => Carbon::now(),   
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
            ],
            [
                'id'                 => 9,
                'actividad'               => 'Elaborar matriz FODA',
                'fecha_inicio'            => Carbon::now(),   
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
            ],
            [
                'id'                 => 10,
                'actividad'               => 'Determinar Alcance del SGSI',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 11,
                'actividad'               => 'Política de Seguridad de Información',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 12,
                'actividad'               => 'Objetivos del SGSI',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 13,
                'actividad'               => 'Análisis y Evaluación de Riesgos',
                'fecha_inicio'            => Carbon::now(), 
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,   
            ],
            [
                'id'                 => 14,
                'actividad'               => 'Inventario de activos de Información',
                'fecha_inicio'            => Carbon::now(),  
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,  
            ],
            [
                'id'                 => 15,
                'actividad'               => 'Evaluación y valoración del Riesgo',
                'fecha_inicio'            => Carbon::now(), 
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,   
            ],
            [
                'id'                 => 16,
                'actividad'               => 'Plan de Tratamiento de Riesgos conforme a los controles de seguridad',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 17,
                'actividad'               => 'Declaración de aplicabilidad SoA',
                'fecha_inicio'            => Carbon::now(),   
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
            ],
            // [
            //     'id'                 => 18,
            //     'actividad'               => 'SOPORTE',
            //     'fecha_inicio'            => Carbon::now(),   
            //     'fecha_fin'            => Carbon::now(),  
            //     'estatus_id' => 1, 
            // ],
            [
                'id'                 => 19,
                'actividad'               => 'Compromiso de la Alta Dirección',
                'fecha_inicio'            => Carbon::now(),   
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
            ],
            [
                'id'                 => 20,
                'actividad'               => 'Asignación de Recursos',
                'fecha_inicio'            => Carbon::now(), 
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,   
            ],
            [
                'id'                 => 21,
                'actividad'               => 'Conformar el Comité de Seguridad',
                'fecha_inicio'            => Carbon::now(),   
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
            ],
            [
                'id'                 => 22,
                'actividad'               => 'Elaborar matriz de roles y responsabilidades',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 23,
                'actividad'               => 'Competencias y capacitación',
                'fecha_inicio'            => Carbon::now(),   
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
            ],
            [
                'id'                 => 24,
                'actividad'               => 'Descripciones de puesto',
                'fecha_inicio'            => Carbon::now(),  
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,  
            ],
            [
                'id'                 => 25,
                'actividad'               => 'Control de capacitación del personal',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 26,
                'actividad'               => 'Comunicación del SGSI',
                'fecha_inicio'            => Carbon::now(),   
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
            ],
            // [
            //     'id'                 => 27,
            //     'actividad'               => 'OPERACIÓN DE SGSI',
            //     'fecha_inicio'            => Carbon::now(),    
            //     'fecha_fin'            => Carbon::now(),  
            //     'estatus_id' => 1,
            // ],
            [
                'id'                 => 28,
                'actividad'               => 'Procesos de gestión',
                'fecha_inicio'            => Carbon::now(), 
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,   
            ],
            [
                'id'                 => 29,
                'actividad'               => 'Información documentada',
                'fecha_inicio'            => Carbon::now(),   
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
            ],
            [
                'id'                 => 30,
                'actividad'               => 'Acciones correctivas',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 31,
                'actividad'               => 'Auditoria interna',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 32,
                'actividad'               => 'Gestión de incidentes de seguridad de la información',
                'fecha_inicio'            => Carbon::now(), 
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,   
            ],
            [
                'id'                 => 33,
                'actividad'               => 'Manual de Políticas de seguridad de la información',
                'fecha_inicio'            => Carbon::now(),   
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
            ],
            [
                'id'                 => 34,
                'actividad'               => 'A.5 Políticas de seguridad de información',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 35,
                'actividad'               => 'A.6 Organización de la seguridad de información',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 36,
                'actividad'               => 'A.7 Seguridad en recursos humanos',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 37,
                'actividad'               => 'A.8 Administración de activos',
                'fecha_inicio'            => Carbon::now(),   
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
            ],
            [
                'id'                 => 38,
                'actividad'               => 'A.9 Control de acceso',
                'fecha_inicio'            => Carbon::now(),  
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,  
            ],
            [
                'id'                 => 39,
                'actividad'               => 'A.10 Criptografía',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 40,
                'actividad'               => 'A.11 Seguridad física y ambiental',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 41,
                'actividad'               => 'A.12 Seguridad en operaciones',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 42,
                'actividad'               => 'A.13 Seguridad en comunicaciones',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 43,
                'actividad'               => 'A.14 Adquisición, desarrollo y mantenimiento de sistemas',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 44,
                'actividad'               => 'A.15 Relación con proveedores',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 45,
                'actividad'               => 'A.16 Administración de incidentes de seguridad de la información',
                'fecha_inicio'            => Carbon::now(),   
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
            ],
            [
                'id'                 => 46,
                'actividad'               => 'A.17 Aspectos de seguridad de la información en la administración de continuidad del negocio',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 47,
                'actividad'               => 'A.18 Cumplimiento',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            // [
            //     'id'                 => 48,
            //     'actividad'               => 'EVALUACIÓN',
            //     'fecha_inicio'            => Carbon::now(),    
            //     'fecha_fin'            => Carbon::now(),  
            //     'estatus_id' => 1,
            // ],
            [
                'id'                 => 49,
                'actividad'               => 'Auditoría Interna',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 50,
                'actividad'               => 'Evaluación',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 51,
                'actividad'               => 'Reporte de Auditoría',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 52,
                'actividad'               => 'Consolidación de Información para la Revisión de la Dirección',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 53,
                'actividad'               => 'Revisión de la Dirección',
                'fecha_inicio'            => Carbon::now(),    
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,
            ],
            [
                'id'                 => 54,
                'actividad'               => 'Revisión de resultados de auditoría y desempeño del SGSI',
                'fecha_inicio'            => Carbon::now(),  
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,  
            ],
            // [
            //     'id'                 => 55,
            //     'actividad'               => 'MEJORA CONTINUA',
            //     'fecha_inicio'            => Carbon::now(),    
            //     'fecha_fin'            => Carbon::now(),  
            //     'estatus_id' => 1,
            // ],
            [
                'id'                 => 56,
                'actividad'               => 'Documentación de Acciones Correctivas y mejora',
                'fecha_inicio'            => Carbon::now(),  
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,  
            ],
            [
                'id'                 => 57,
                'actividad'               => 'Cierre de acciones de mejora',
                'fecha_inicio'            => Carbon::now(),  
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,  
            ],
            [
                'id'                 => 58,
                'actividad'               => 'Cierre de acciones correctivas de la Auditoria Interna y/o externa',
                'fecha_inicio'            => Carbon::now(),  
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1,  
            ],
            [
                'id'                 => 59,
                'actividad'               => 'Cierre de acciones correctivas derivadas de la Revisión de la Dirección',
                'fecha_inicio'            => Carbon::now(),   
                'fecha_fin'            => Carbon::now(),  
                'estatus_id' => 1, 
            ],
 
            
        ];
        PlanBaseActividade::insert($planbs);
    }
}
