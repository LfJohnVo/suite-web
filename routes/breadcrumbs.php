<?php 



Breadcrumbs::for('admin.iso27001.index', function ($trail) {
    $trail->push('ISO 27001', route('admin.iso27001.index'));
});


Breadcrumbs::for('admin.declaracion-aplicabilidad.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Declaración de Aplicabilidad', route('admin.declaracion-aplicabilidad.index'));
});



Breadcrumbs::for('admin.partes-interesadas.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Partes Interesadas', route('admin.partes-interesadas.index'));
});
Breadcrumbs::for('admin.partes-interesadas.create', function ($trail) {
    $trail->parent('admin.partes-interesadas.index');
    $trail->push('Formulario', route('admin.partes-interesadas.create'));
});



Breadcrumbs::for('admin.matriz-requisito-legales.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Matriz de Requisitos Legales', route('admin.matriz-requisito-legales.index'));
});
Breadcrumbs::for('admin.matriz-requisito-legales.create', function ($trail) {
    $trail->parent('admin.matriz-requisito-legales.index');
    $trail->push('Formulario', route('admin.matriz-requisito-legales.create'));
});



Breadcrumbs::for('admin.entendimiento-organizacions.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('FODA', route('admin.entendimiento-organizacions.index'));
});
Breadcrumbs::for('admin.entendimiento-organizacions.create', function ($trail) {
    $trail->parent('admin.entendimiento-organizacions.index');
    $trail->push('Formulario', route('admin.entendimiento-organizacions.create'));
});



Breadcrumbs::for('admin.alcance-sgsis.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Determinación de Alcance', route('admin.alcance-sgsis.index'));
});
Breadcrumbs::for('admin.alcance-sgsis.create', function ($trail) {
    $trail->parent('admin.alcance-sgsis.index');
    $trail->push('Formulario', route('admin.alcance-sgsis.create'));
});



// Breadcrumbs::for('admin..index', function ($trail) {
 	// $trail->parent('admin.iso27001.index');                   generar reporte-------------
 	// $trail->push('', route('admin..index'));
// });



Breadcrumbs::for('admin.comiteseguridads.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Conformación del Comité de Seguridad', route('admin.comiteseguridads.index'));
});
Breadcrumbs::for('admin.comiteseguridads.create', function ($trail) {
    $trail->parent('admin.comiteseguridads.index');
    $trail->push('Formulario', route('admin.comiteseguridads.create'));
});



Breadcrumbs::for('admin.minutasaltadireccions.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Minutas de Sesiones con Alta Dirección', route('admin.minutasaltadireccions.index'));
});
Breadcrumbs::for('admin.minutasaltadireccions.create', function ($trail) {
    $trail->parent('admin.minutasaltadireccions.index');
    $trail->push('Formulario', route('admin.minutasaltadireccions.create'));
});



Breadcrumbs::for('admin.evidencias-sgsis.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Evidencia de Asignación de Recursos al SGSI', route('admin.evidencias-sgsis.index'));
});
Breadcrumbs::for('admin.evidencias-sgsis.create', function ($trail) {
    $trail->parent('admin.evidencias-sgsis.index');
    $trail->push('Formulario', route('admin.evidencias-sgsis.create'));
});




Breadcrumbs::for('admin.politica-sgsis.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Política SGSI', route('admin.politica-sgsis.index'));
});
Breadcrumbs::for('admin.politica-sgsis.create', function ($trail) {
    $trail->parent('admin.politica-sgsis.index');
    $trail->push('Formulario', route('admin.politica-sgsis.create'));
});



Breadcrumbs::for('admin.roles-responsabilidades.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Roles y Responsabilidades', route('admin.roles-responsabilidades.index'));
});
Breadcrumbs::for('admin.roles-responsabilidades.create', function ($trail) {
    $trail->parent('admin.roles-responsabilidades.index');
    $trail->push('Formulario', route('admin.roles-responsabilidades.create'));
});



Breadcrumbs::for('admin.riesgosoportunidades.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Riesgos y Oportunidades', route('admin.riesgosoportunidades.index'));
});
Breadcrumbs::for('admin.riesgosoportunidades.create', function ($trail) {
    $trail->parent('admin.riesgosoportunidades.index');
    $trail->push('Formulario', route('admin.riesgosoportunidades.create'));
});



Breadcrumbs::for('admin.objetivosseguridads.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Objetivos de Seguridad', route('admin.objetivosseguridads.index'));
});
Breadcrumbs::for('admin.objetivosseguridads.create', function ($trail) {
    $trail->parent('admin.objetivosseguridads.index');
    $trail->push('Formulario', route('admin.objetivosseguridads.create'));
});



Breadcrumbs::for('admin.recursos.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Capacitaciones', route('admin.recursos.index'));
});
Breadcrumbs::for('admin.recursos.create', function ($trail) {
    $trail->parent('admin.recursos.index');
    $trail->push('Formulario', route('admin.recursos.create'));
});



Breadcrumbs::for('admin.competencia.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Competencias', route('admin.competencia.index'));
});
Breadcrumbs::for('admin.competencia.create', function ($trail) {
    $trail->parent('admin.competencia.index');
    $trail->push('Formulario', route('admin.competencia.create'));
});



Breadcrumbs::for('admin.concientizacion-sgis.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Concientización SGSI', route('admin.concientizacion-sgis.index'));
});
Breadcrumbs::for('admin.concientizacion-sgis.create', function ($trail) {
    $trail->parent('admin.concientizacion-sgis.index');
    $trail->push('Formulario', route('admin.concientizacion-sgis.create'));
});



Breadcrumbs::for('admin.material-sgsis.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Material SGSI', route('admin.material-sgsis.index'));
});
Breadcrumbs::for('admin.material-sgsis.create', function ($trail) {
    $trail->parent('admin.material-sgsis.index');
    $trail->push('Formulario', route('admin.material-sgsis.create'));
});



Breadcrumbs::for('admin.material-iso-veinticientes.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Material ISO 27001:2013', route('admin.material-iso-veinticientes.index'));
});
Breadcrumbs::for('admin.material-iso-veinticientes.create', function ($trail) {
    $trail->parent('admin.material-iso-veinticientes.index');
    $trail->push('Formulario', route('admin.material-iso-veinticientes.create'));
});



Breadcrumbs::for('admin.comunicacion-sgis.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Comunicación SGSI', route('admin.comunicacion-sgis.index'));
});
Breadcrumbs::for('admin.comunicacion-sgis.create', function ($trail) {
    $trail->parent('admin.comunicacion-sgis.index');
    $trail->push('Formulario', route('admin.comunicacion-sgis.create'));
});



Breadcrumbs::for('admin.politica-del-sgsi-soportes.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Política del SGSI', route('admin.politica-del-sgsi-soportes.index'));
});



Breadcrumbs::for('admin.control-accesos.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Control de Acceso', route('admin.control-accesos.index'));
});
Breadcrumbs::for('admin.control-accesos.create', function ($trail) {
    $trail->parent('admin.control-accesos.index');
    $trail->push('Formulario', route('admin.control-accesos.create'));
});



Breadcrumbs::for('admin.informacion-documetadas.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Información Documentada', route('admin.informacion-documetadas.index'));
});
Breadcrumbs::for('admin.informacion-documetadas.create', function ($trail) {
    $trail->parent('admin.informacion-documetadas.index');
    $trail->push('Formulario', route('admin.informacion-documetadas.create'));
});



Breadcrumbs::for('admin.planificacion-controls.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Planificación y Control', route('admin.planificacion-controls.index'));
});
Breadcrumbs::for('admin.planificacion-controls.create', function ($trail) {
    $trail->parent('admin.planificacion-controls.index');
    $trail->push('Formulario', route('admin.planificacion-controls.create'));
});



Breadcrumbs::for('admin.tratamiento-riesgos.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Tratamiento de los Riesgos', route('admin.tratamiento-riesgos.index'));
});
Breadcrumbs::for('admin.tratamiento-riesgos.create', function ($trail) {
    $trail->parent('admin.tratamiento-riesgos.index');
    $trail->push('Formulario', route('admin.tratamiento-riesgos.create'));
});



Breadcrumbs::for('admin.indicadores-sgsis.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Indicadores SGSI', route('admin.indicadores-sgsis.index'));
});
Breadcrumbs::for('admin.indicadores-sgsis.create', function ($trail) {
    $trail->parent('admin.indicadores-sgsis.index');
    $trail->push('Formulario', route('admin.indicadores-sgsis.create'));
});



Breadcrumbs::for('admin.incidentes-de-seguridads.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Incidentes de Seguridad', route('admin.incidentes-de-seguridads.index'));
});
Breadcrumbs::for('admin.incidentes-de-seguridads.create', function ($trail) {
    $trail->parent('admin.incidentes-de-seguridads.index');
    $trail->push('Formulario', route('admin.incidentes-de-seguridads.create'));
});



Breadcrumbs::for('admin.indicadorincidentessis.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Indicador de Incidentes', route('admin.indicadorincidentessis.index'));
});



Breadcrumbs::for('admin.auditoria-anuals.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Programa Anual de Auditoría', route('admin.auditoria-anuals.index'));
});
Breadcrumbs::for('admin.auditoria-anuals.create', function ($trail) {
    $trail->parent('admin.auditoria-anuals.index');
    $trail->push('Formulario', route('admin.auditoria-anuals.create'));
});



Breadcrumbs::for('admin.plan-auditoria.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Plan de Auditoría', route('admin.plan-auditoria.index'));
});
Breadcrumbs::for('admin.plan-auditoria.create', function ($trail) {
    $trail->parent('admin.plan-auditoria.index');
    $trail->push('Formulario', route('admin.plan-auditoria.create'));
});



Breadcrumbs::for('admin.auditoria-internas.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Auditoría Interna', route('admin.auditoria-internas.index'));
});
Breadcrumbs::for('admin.auditoria-internas.create', function ($trail) {
    $trail->parent('admin.auditoria-internas.index');
    $trail->push('Formulario', route('admin.auditoria-internas.create'));
});



Breadcrumbs::for('admin.revision-direccions.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Revisión por Dirección', route('admin.revision-direccions.index'));
});
Breadcrumbs::for('admin.revision-direccions.create', function ($trail) {
    $trail->parent('admin.revision-direccions.index');
    $trail->push('Formulario', route('admin.revision-direccions.create'));
});



Breadcrumbs::for('admin.accion-correctivas.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Acciones Correctivas', route('admin.accion-correctivas.index'));
});
Breadcrumbs::for('admin.accion-correctivas.create', function ($trail) {
    $trail->parent('admin.accion-correctivas.index');
    $trail->push('Formulario', route('admin.accion-correctivas.create'));
});



Breadcrumbs::for('admin.registromejoras.index', function ($trail) {
 	$trail->parent('admin.iso27001.index');
 	$trail->push('Registro de Mejoras', route('admin.registromejoras.index'));
});
Breadcrumbs::for('admin.registromejoras.create', function ($trail) {
    $trail->parent('admin.registromejoras.index');
    $trail->push('Formulario', route('admin.registromejoras.create'));
});







// Breadcrumbs::for('admin..index', function ($trail) {
 	// $trail->parent('admin.iso27001.index');
 	// $trail->push('', route('admin..index'));
// });






















