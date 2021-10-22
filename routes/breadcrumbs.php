<?php



Breadcrumbs::for('admin.iso27001.index', function ($trail) {
    $trail->push('ISO 27001', 'iso27001.index');
});

Breadcrumbs::for('admin.analisis-brechas.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Contexto', 'iso27001#contexto');
    $trail->push('Análisis de Brechas', 'analisis-brechas');
});

Breadcrumbs::for('admin.planTrabajoBase.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Contexto', 'iso27001#contexto');
    $trail->push('Plan de Implementación', 'planTrabajoBase');
});

Breadcrumbs::for('admin.declaracion-aplicabilidad.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Planificación', 'iso27001#planificacion');
    $trail->push('Declaración de Aplicabilidad', 'declaracion-aplicabilidad');
});

Breadcrumbs::for('admin.partes-interesadas.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Contexto', 'iso27001#contexto');
    $trail->push('Partes Interesadas', 'partes-interesadas');
});
Breadcrumbs::for('admin.partes-interesadas.create', function ($trail) {
    $trail->parent('admin.partes-interesadas.index');
    $trail->push('Formulario', 'partes-interesadas/create');
});

Breadcrumbs::for('admin.matriz-requisito-legales.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Contexto', 'iso27001#contexto');
    $trail->push('Matriz de Requisitos Legales', 'matriz-requisito-legales');
});
Breadcrumbs::for('admin.matriz-requisito-legales.create', function ($trail) {
    $trail->parent('admin.matriz-requisito-legales.index');
    $trail->push('Formulario', 'matriz-requisito-legales/create');
});

Breadcrumbs::for('admin.entendimiento-organizacions.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Contexto', 'iso27001#contexto');
    $trail->push('FODA', 'entendimiento-organizacions');
});
Breadcrumbs::for('admin.entendimiento-organizacions.create', function ($trail) {
    $trail->parent('admin.entendimiento-organizacions.index');
    $trail->push('Formulario', 'entendimiento-organizacions/create');
});

Breadcrumbs::for('admin.alcance-sgsis.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Contexto', 'iso27001#contexto');
    $trail->push('Determinación de Alcance', 'alcance-sgsis'));
});
Breadcrumbs::for('admin.alcance-sgsis.create', function ($trail) {
    $trail->parent('admin.alcance-sgsis.index');
    $trail->push('Formulario', 'alcance-sgsis/create');
});

// Breadcrumbs::for('admin..index', function ($trail) {
// $trail->parent('admin.iso27001.index');                   generar reporte-------------
// $trail->push('', '');
// });

Breadcrumbs::for('admin.comiteseguridads.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Liderazgo', 'iso27001#liderazgo');
    $trail->push('Conformación del Comité de Seguridad', 'comiteseguridads');
});
Breadcrumbs::for('admin.comiteseguridads.create', function ($trail) {
    $trail->parent('admin.comiteseguridads.index');
    $trail->push('Formulario', 'comiteseguridads/create');
});
Breadcrumbs::for('admin.comiteseguridads.visualizacion', function ($trail) {
    $trail->push('Portal de comunicación', 'portal-comunicacion'));
    $trail->push('Comite de Seguridad');
});

Breadcrumbs::for('admin.minutasaltadireccions.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Liderazgo', 'iso27001#liderazgo');
    $trail->push('Minutas de Sesiones con Alta Dirección', 'minutasaltadireccions');
});
Breadcrumbs::for('admin.minutasaltadireccions.create', function ($trail) {
    $trail->parent('admin.minutasaltadireccions.index');
    $trail->push('Formulario', 'minutasaltadireccions/create');
});

Breadcrumbs::for('admin.evidencias-sgsis.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Liderazgo', 'iso27001#liderazgo');
    $trail->push('Evidencia de Asignación de Recursos al SGSI', 'evidencias-sgsis');
});
Breadcrumbs::for('admin.evidencias-sgsis.create', function ($trail) {
    $trail->parent('admin.evidencias-sgsis.index');
    $trail->push('Formulario', 'evidencias-sgsis/create'));
});

Breadcrumbs::for('admin.politica-sgsis.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Liderazgo', 'iso27001#liderazgo');
    $trail->push('Política SGSI', 'politica-sgsis');
});
Breadcrumbs::for('admin.politica-sgsis.create', function ($trail) {
    $trail->parent('admin.politica-sgsis.index');
    $trail->push('Formulario', 'politica-sgsis/create');
});

Breadcrumbs::for('admin.politicaSgsis.visualizacion', function ($trail) {
    $trail->push('Portal de comunicación', 'portal-comunicacion');
    $trail->push('Politica SGSI');
});

Breadcrumbs::for('admin.roles-responsabilidades.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Liderazgo', 'iso27001#liderazgo');
    $trail->push('Roles y Responsabilidades', 'roles-responsabilidades');
});
Breadcrumbs::for('admin.roles-responsabilidades.create', function ($trail) {
    $trail->parent('admin.roles-responsabilidades.index');
    $trail->push('Formulario', 'roles-responsabilidades/create');
});

Breadcrumbs::for('admin.amenazas.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Planificación', 'iso27001#planificacion');
    $trail->push('Amenazas', 'amenazas');
});

Breadcrumbs::for('admin.vulnerabilidads.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Planificación', 'iso27001#planificacion');
    $trail->push('Vulnerabilidades', 'vulnerabilidads');
});

Breadcrumbs::for('admin.analisis-riesgos.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Planificación', 'iso27001#planificacion');
    $trail->push('Matriz de Riesgos', 'analisis-riesgos'));
});

Breadcrumbs::for('admin.riesgosoportunidades.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Planificación', 'iso27001#planificacion');
    $trail->push('Riesgos y Oportunidades', 'riesgosoportunidades');
});
Breadcrumbs::for('admin.riesgosoportunidades.create', function ($trail) {
    $trail->parent('admin.riesgosoportunidades.index');
    $trail->push('Formulario', 'riesgosoportunidades/create');
});

Breadcrumbs::for('admin.objetivosseguridads.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Planificación', 'iso27001#planificacion');
    $trail->push('Objetivos de Seguridad', 'objetivosseguridads'));
});
Breadcrumbs::for('admin.objetivosseguridads.create', function ($trail) {
    $trail->parent('admin.objetivosseguridads.index');
    $trail->push('Formulario', 'objetivosseguridads/create');
});

Breadcrumbs::for('admin.recursos.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Soporte', 'iso27001#soporte');
    $trail->push('Capacitaciones', 'recursos');
});
Breadcrumbs::for('admin.recursos.create', function ($trail) {
    $trail->parent('admin.recursos.index');
    $trail->push('Formulario', 'recursos/create');
});

// Breadcrumbs::for('admin.competencia.index', function ($trail) {
//  	$trail->parent('admin.iso27001.index');
//     $trail->push('Soporte','iso27001.index').'#soporte');
//  	$trail->push('Competencias', 'competencia');
// });

// Breadcrumbs::for('admin.competencia.create', function ($trail) {
//     $trail->parent('admin.competencia.index');
//     $trail->push('Formulario', 'competencia/create');
// });

Breadcrumbs::for('admin.competencia.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Competencias', 'buscarCV#soporte');
});

Breadcrumbs::for('admin.concientizacion-sgis.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Soporte', 'iso27001#soporte');
    $trail->push('Concientización SGSI', 'concientizacion-sgis');
});
Breadcrumbs::for('admin.concientizacion-sgis.create', function ($trail) {
    $trail->parent('admin.concientizacion-sgis.index');
    $trail->push('Formulario', 'concientizacion-sgis/create');
});

Breadcrumbs::for('admin.material-sgsis.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Soporte', 'iso27001#soporte');
    $trail->push('Material SGSI', 'material-sgsis');
});
Breadcrumbs::for('admin.material-sgsis.create', function ($trail) {
    $trail->parent('admin.material-sgsis.index');
    $trail->push('Formulario', 'material-sgsis/create'));
});

Breadcrumbs::for('admin.material-iso-veinticientes.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Soporte', 'iso27001#soporte');
    $trail->push('Material ISO 27001:2013', 'material-iso-veinticientes');
});
Breadcrumbs::for('admin.material-iso-veinticientes.create', function ($trail) {
    $trail->parent('admin.material-iso-veinticientes.index');
    $trail->push('Formulario', 'material-iso-veinticientes/create');
});

Breadcrumbs::for('admin.comunicacion-sgis.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Soporte', 'iso27001#soporte');
    $trail->push('Comunicación SGSI', 'comunicacion-sgis');
});
Breadcrumbs::for('admin.comunicacion-sgis.create', function ($trail) {
    $trail->parent('admin.comunicacion-sgis.index');
    $trail->push('Formulario', 'comunicacion-sgis/create');
});

Breadcrumbs::for('admin.politica-del-sgsi-soportes.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Soporte', 'iso27001#soporte');
    $trail->push('Política del SGSI', 'politica-del-sgsi-soportes');
});

Breadcrumbs::for('admin.control-accesos.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Soporte', 'iso27001#soporte');
    $trail->push('Control de Acceso', 'control-accesos');
});
Breadcrumbs::for('admin.control-accesos.create', function ($trail) {
    $trail->parent('admin.control-accesos.index');
    $trail->push('Formulario', 'control-accesos/create');
});

Breadcrumbs::for('admin.informacion-documetadas.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Soporte', 'iso27001#soporte');
    $trail->push('Información Documentada', 'informacion-documetadas');
});
Breadcrumbs::for('admin.informacion-documetadas.create', function ($trail) {
    $trail->parent('admin.informacion-documetadas.index');
    $trail->push('Formulario', 'informacion-documetadas/create');
});

Breadcrumbs::for('admin.planificacion-controls.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Operación', 'iso27001#operacion');
    $trail->push('Planificación y Control', 'planificacion-controls');
});
Breadcrumbs::for('admin.planificacion-controls.create', function ($trail) {
    $trail->parent('admin.planificacion-controls.index');
    $trail->push('Formulario', 'planificacion-controls/create');
});

Breadcrumbs::for('admin.tratamiento-riesgos.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Operación', 'iso27001#operacion');
    $trail->push('Tratamiento de los Riesgos', 'tratamiento-riesgos.index');
});
Breadcrumbs::for('admin.tratamiento-riesgos.create', function ($trail) {
    $trail->parent('admin.tratamiento-riesgos.index');
    $trail->push('Formulario', 'tratamiento-riesgos/create');
});

Breadcrumbs::for('admin.indicadores-sgsis.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Evaluacion', 'iso27001#evaluacion');
    $trail->push('Indicadores SGSI', 'indicadores-sgsis');
});
Breadcrumbs::for('admin.indicadores-sgsis.create', function ($trail) {
    $trail->parent('admin.indicadores-sgsis.index');
    $trail->push('Formulario', 'indicadores-sgsis/create');
});

Breadcrumbs::for('admin.incidentes-de-seguridads.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Evaluacion', 'iso27001#evaluacion');
    $trail->push('Incidentes de Seguridad', 'incidentes-de-seguridads');
});
Breadcrumbs::for('admin.incidentes-de-seguridads.create', function ($trail) {
    $trail->parent('admin.incidentes-de-seguridads.index');
    $trail->push('Formulario', 'incidentes-de-seguridads/create');
});

Breadcrumbs::for('admin.indicadorincidentessis.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Evaluacion', 'iso27001#evaluacion');
    $trail->push('Indicador de Incidentes', 'indicadorincidentessis');
});

Breadcrumbs::for('admin.auditoria-anuals.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Evaluacion', 'iso27001#evaluacion');
    $trail->push('Programa Anual de Auditoría', 'auditoria-anuals');
});
Breadcrumbs::for('admin.auditoria-anuals.create', function ($trail) {
    $trail->parent('admin.auditoria-anuals.index');
    $trail->push('Formulario', 'auditoria-anuals/create');
});

Breadcrumbs::for('admin.plan-auditoria.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Evaluacion', 'iso27001#evaluacion');
    $trail->push('Plan de Auditoría', 'plan-auditoria');
});
Breadcrumbs::for('admin.plan-auditoria.create', function ($trail) {
    $trail->parent('admin.plan-auditoria.index');
    $trail->push('Formulario', 'plan-auditoria/create');
});

Breadcrumbs::for('admin.auditoria-internas.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Evaluacion', 'iso27001#evaluacion');
    $trail->push('Auditoría Interna', 'auditoria-internas');
});
Breadcrumbs::for('admin.auditoria-internas.create', function ($trail) {
    $trail->parent('admin.auditoria-internas.index');
    $trail->push('Formulario', 'auditoria-internas/create');
});

Breadcrumbs::for('admin.revision-direccions.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Evaluacion', 'iso27001#evaluacion');
    $trail->push('Revisión por Dirección', 'revision-direccions');
});
Breadcrumbs::for('admin.revision-direccions.create', function ($trail) {
    $trail->parent('admin.revision-direccions.index');
    $trail->push('Formulario', 'revision-direccions/create');
});

Breadcrumbs::for('admin.accion-correctivas.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Mejora', 'iso27001#mejora');
    $trail->push('Acciones Correctivas', 'accion-correctivas');
});
Breadcrumbs::for('admin.accion-correctivas.create', function ($trail) {
    $trail->parent('admin.accion-correctivas.index');
    $trail->push('Formulario', 'accion-correctivas/create');
});

Breadcrumbs::for('admin.registromejoras.index', function ($trail) {
    $trail->parent('admin.iso27001.index');
    $trail->push('Mejora', 'iso27001#mejora');
    $trail->push('Registro de Mejoras', 'registromejoras');
});
Breadcrumbs::for('admin.registromejoras.create', function ($trail) {
    $trail->parent('admin.registromejoras.index');
    $trail->push('Formulario', 'registromejoras/create');
});

Breadcrumbs::for('admin.portal-comunicacion.reportes', function ($trail) {
    $trail->push('Portal de comunicación', 'portal-comunicacion');
    $trail->push('Reportes');
});

Breadcrumbs::for('admin.portal-comunicacion.sedes-organizacion', function ($trail) {
    $trail->push('Portal de comunicación', 'portal-comunicacion');
    $trail->push('Sedes');
});

Breadcrumbs::for('admin.comunicacion-sgis.show', function ($trail) {
    $trail->push('Portal de comunicación', 'portal-comunicacion');
    $trail->push('Comunicados');
});

// Breadcrumbs::for('admin..index', function ($trail) {
// $trail->parent('admin.iso27001.index');
// $trail->push('', '');
// });

//##############################################################
//#################### RECURSOS HUMANOS #######################
//############################################################
Breadcrumbs::for('Evaluacion360', function ($trail) {
    $trail->push('RH - Evaluación 360 Grados', 'rh-evaluacion360');
});

Breadcrumbs::for('EV360-Evaluaciones', function ($trail) {
    $trail->parent('Evaluacion360');
    $trail->push('Evaluaciones', 'ev360-evaluaciones');
});

Breadcrumbs::for('EV360-Evaluaciones-Create', function ($trail) {
    $trail->parent('EV360-Evaluaciones');
    $trail->push('Crear Evaluación', 'ev360-evaluaciones/create');
});

Breadcrumbs::for('EV360-Evaluaciones-Evaluacion', function ($trail, $evaluacion) {
    $trail->parent('EV360-Evaluaciones');
    $trail->push('Evaluación', 'ev360-evaluaciones/evaluacion', $evaluacion->id));
});

Breadcrumbs::for('EV360-Competencias', function ($trail) {
    $trail->parent('Evaluacion360');
    $trail->push('Competencias', 'ev360-competencias');
});
Breadcrumbs::for('EV360-Competencias-Create', function ($trail) {
    $trail->parent('EV360-Competencias');
    $trail->push('Crear Competencia', 'ev360-competencias/create');
});
Breadcrumbs::for('EV360-Competencias-Edit', function ($trail) {
    $trail->parent('EV360-Competencias');
    $trail->push('Editar Competencia', '/recursos-humanos/evaluacion-360/evaluaciones/*/evaluacion');
});

Breadcrumbs::for('EV360-Competencias-Por-Puesto', function ($trail) {
    $trail->parent('Evaluacion360');
    $trail->push('Competencias por puesto', 'ev360-competencias-por-puesto');
});
Breadcrumbs::for('EV360-Competencias-Por-Puesto-Create', function ($trail) {
    $trail->parent('EV360-Competencias-Por-Puesto');
    $trail->push('Asignar competencia al puesto', 'recursos-humanos/evaluacion-360/competencias-por-puesto/*/create');
});

Breadcrumbs::for('EV360-Objetivos', function ($trail) {
    $trail->parent('Evaluacion360');
    $trail->push('Objetivos', 'ev360-objetivos');
});
Breadcrumbs::for('EV360-Objetivos-Create', function ($trail, $empleado) {
    $trail->parent('EV360-Objetivos');
    $trail->push('Asignar Objetivo', 'ev360-objetivos-empleado/create', $empleado));
});
Breadcrumbs::for('EV360-Objetivos-Edit', function ($trail) {
    $trail->parent('EV360-Objetivos');
    $trail->push('Editar Objetivo', '/recursos-humanos/evaluacion-360/objetivos/*/edit');
});

Breadcrumbs::for('EV360-Evaluacion-Resumen', function ($trail, $evaluacion) {
    $trail->parent('EV360-Evaluaciones-Evaluacion', $evaluacion);
    $trail->push($evaluacion->nombre, '/recursos-humanos/evaluacion-360/evaluacion/*/resumen');
});
Breadcrumbs::for('EV360-Evaluacion-Consulta-Evaluado', function ($trail, $evaluacion) {
    $trail->parent('EV360-Evaluaciones-Evaluacion', $evaluacion['evaluacion']);
    $trail->push($evaluacion['evaluado']->name, 'ev360-evaluaciones.autoevaluacion.consulta.evaluado', ['evaluacion' => $evaluacion['evaluacion']->id, 'evaluado' => $evaluacion['evaluado']->id]));
});
Breadcrumbs::for('EV360-Evaluacion-Cuestionario', function ($trail, $evaluacion) {
    $trail->parent('EV360-Evaluaciones-Evaluacion', $evaluacion['evaluacion']);
    $trail->push('Cuestionario', 'ev360-evaluaciones.contestarCuestionario', ['evaluacion' => $evaluacion['evaluacion']->id, 'evaluado' => $evaluacion['evaluado']->id, 'evaluador' => $evaluacion['evaluador']->id]));
});
// Breadcrumbs::for('EV360-Objetivos-Edit', function ($trail) {
//     $trail->parent('EV360-Objetivos');
//     $trail->push('Editar Objetivo', 'ev360-objetivos.edit'));
// });
