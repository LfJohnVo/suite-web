<?php

namespace App\Functions;

class GenerateAnalisisB
{
    public function TraerDatos($analisis_id)
    {
        return [

                // [
                //     'pregunta'               => '¿La entidad cuenta con un autodiagnóstico realizado para medir el avance en el establecimiento, implementación, mantenimiento y mejora continua de su SGSI (Sistema de Gestión de Seguridad de la información)?',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                // [
                //     'pregunta'               => '¿La entidad creó un caso de estudio o plan inicial del proyecto, donde se incluyen las prioridades y objetivos para la implementación del SGSI?',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                // [
                //     'pregunta'               => '¿La entidad contó con la aprobación de la dirección para iniciar el proyecto del SGSI?	',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                // [
                //     'pregunta'               => '¿La entidad ha identificado los aspectos internos y externos que pueden afectar en el desarrollo del proyecto de implementación del sistema de gestión de seguridad de la información?	',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                // [
                //     'pregunta'               => '¿La entidad ha identificado las partes interesadas, necesidades y expectativas de estas respecto al Sistema de Gestión de Seguridad de la Información?	',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                // [
                //     'pregunta'               => '¿La entidad ha evaluado los objetivos y las necesidades respecto a la Seguridad de la Información?	',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                // [
                //     'pregunta'               => '¿En la entidad se ha definido un Comité de Seguridad de la Información?',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                // [
                //     'pregunta'               => '¿La entidad cuenta con una definición del alcance y los límites del Sistema de Gestión de Seguridad de la Información?',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                // [
                //     'pregunta'               => 'En la entidad existe un documento de política del Sistema de Gestión de Seguridad de la Información, el cual ha sido aprobado por la Dirección?',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                // [
                //     'pregunta'               => '¿En la entidad existe un documento de roles, responsabilidades y autoridades en seguridad de la información?',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                // [
                //     'pregunta'               => '¿La entidad tiene establecido algún proceso para identificar, analizar, valorar y tratar los riesgos de seguridad de la información?',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                // [
                //     'pregunta'               => '¿La entidad ha realizado una declaración de aplicabilidad que contenga los controles requeridos por la entidad?',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                // [
                //     'pregunta'               => '¿La entidad ha evaluado las competencias de las personas que realizan, bajo su control, un trabajo que afecta el desempeño de la seguridad de la Información?',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                // [
                //     'pregunta'               => '¿La entidad tiene definido un modelo de comunicaciones tanto internas como externas respecto a la seguridad de la información?',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                // [
                //     'pregunta'               => '¿La entidad tiene la información referente al Sistema de Gestión de Seguridad de la Información debidamente documentada y controlada?',
                //     'analisis_brechas_id'    =>  $analisis_id,
                // ],
                [
                    'modulo'=> 'Recursos Humanos',
                    'pregunta'  => '¿Cuentan con acuerdos de confidencialidad y no divulgación de la información institucional?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Recursos Humanos',
                    'pregunta'  => '¿Se tienen definidos y documentados roles y responsabilidades de seguridad de la información?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Recursos Humanos',
                    'pregunta'  => '¿Se cuenta con políticas, procedimientos y controles  definidos para un correcto uso del correo institucional?¿Me puede mostrar evidencia de ello?	',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Recursos Humanos',
                    'pregunta'  => '¿Cómo se realiza la gestión de los privilegios de acceso a los activos en materia de TIC?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Recursos Humanos',
                    'pregunta'  => '¿Cuenta con el procedimiento de desvinculación del personal internos y externos ?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Que periodicidad se llevan acabo los respaldos de información?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cómo te cercioras que los respaldos se generan cada 15 días y son funcionales?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cuentas con un programa de concienciación formalizado?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cómo llevan acabo la concienciación, formación y educación sobre seguridad y el uso aceptable los equipos?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cómo administras las contraseñas?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cuentas con métodos de autenticación?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cómo gestionas las credenciales de acceso?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cuentas con algún procedimiento para la administración de cuentas?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cuentas con un proceso de accesos físicos a los activos de información?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Tienes permitido el uso de VPN?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cuentas con una responsiva de uso de VPN?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cuentas con un mecanismo de administración de accesos por VPN?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cómo restringes los acceso a nivel puerto o MAC?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cuentas con filtrado de navegación web?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cómo se encuentran configuradas las reglas de comunicación de envío y recepción de correo electrónico?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cómo se encuentran configuradas las medidas de seguridad de correo electrónico?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cómo se lleva a cabo el monitoreo de dispositivos al acceder a la red institucional?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Gestión',
                    'pregunta'  => '¿Cuentas con inventario de activos de información, así como de proveedores TI?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Planeación',
                    'pregunta'  => '¿Cuentas con una metodología de análisis de riesgos?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Planeación',
                    'pregunta'  => '¿Cuentas con proceso de gestión de incidentes de seguridad?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Planeación',
                    'pregunta'  => '¿Cuentas con un Plan de Continuidad de Negocio?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Planeación',
                    'pregunta'  => '¿Cuentas con un plan de gestión de vulnerabilidades?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Planeación',
                    'pregunta'  => '¿Cuentas con una matriz de proveedores y servicios?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Planeación',
                    'pregunta'  => '¿Cuentas con un plan de Migración para las aplicaciones obsoletas?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Planeación',
                    'pregunta'  => '¿Cuentas con un plan de migración de software libre?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo Físicos',
                    'pregunta'  => '¿Cuentas con inventario de activos físicos?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo Físicos',
                    'pregunta'  => '¿Se cuenta con la actualización del firmware en los equipos?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Centro de Datos',
                    'pregunta'  => '¿Se cuenta con una bitácora al centro de datos?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Centro de Datos',
                    'pregunta'  => '¿Cómo se lleva acabo el proceso de acceso físico a las instalaciones?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Centro de Datos',
                    'pregunta'  => '¿Se Implementan bóvedas de medios, centros de datos alternos cuando sea posible, servicios en la nube, como alternativas para recuperar la operación de los Centros de Datos?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Centro de Datos',
                    'pregunta'  => '¿Se implementa en caso de requerirse  centros de datos alternos y bóvedas de medios, estos deberán estar localizados en distintos puntos geográficos ,geológicamente viables y dentro del territorio nacional?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Centro de Datos',
                    'pregunta'  => '¿Se implementan mecanismos de cifrado en los medios de almacenamiento en Centros de Datos centralizados, determinando que la administración de dichos mecanismos de cifrado esté a cargo de servidores públicos y nunca bajo la responsabilidad de un proveedor?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Centro de Datos',
                    'pregunta'  => '¿En el centro de datos se cumple con su diseño, estructura, desempeño, fiabilidad y medidas de seguridad equivalentes, como mínimo, el equivalente al estándar TIER II?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Centro de Datos',
                    'pregunta'  => '¿Se establecen procesos o procedimientos formales para la administración del Centro de Datos, en cuanto a accesos, mantenimiento de equipos, supervisión de trabajos externos y otras actividades relacionadas?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se aplican políticas de firewall permitiendo sólo el tráfico válido para la Dependencia o Entidad por medio de los puertos TCP/IP necesarios y autorizados?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se utilizan redes abiertas únicamente al proporcionar servicios a la población, las cuales deberán estar separadas y aisladas de las redes de datos institucionales, como por ejemplo, LAN, DMZ, invitados y de control, en caso de existir?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se utilizan mecanismos de cifrado de llave pública y privada, canales cifrados de comunicación y, cuando corresponda, de firma electrónica avanzada, que permitan el acceso de la información únicamente al destinatario autorizado al que esté dirigida?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se implementan  controles de red como segmentación de redes, reglas de control de acceso, almacenamiento de bitácoras, seguridad de puertos, así como otras buenas prácticas con la finalidad de tener una mejor administración y seguridad en la red?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se desactiva el uso del protocolo RDP en general, en caso de ser necesario, se limita por velocidad con doble factor de autenticación?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se establecen accesos por VPN como único medio de acceso remoto a las redes internas de la Dependencia o Entidad, con autenticación separada a la de los servicios institucionales, sin tener permisos superiores a los que el usuario tiene en la red interna, y con la finalidad de que sólo usuarios autorizados puedan acceder a la red institucional desde sitios remotos?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se establecen accesos restringidos a la red LAN para que sólo personal de la Dependencias o Entidad tenga acceso; y para usuarios externos, se es requerido contar con justificación, autorización y los registros correspondientes?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se implementa proxy en las redes Wireless y LAN, estableciendo políticas de uso de la red, es decir, autorización para navegar a sitios de la Internet y no permitiendo el acceso o salida directa hacia ésta; además, se detectan páginas fraudulentas o sospechosas por medio de direcciones IP o dominios?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se cuenta con una bitácora con la justificación de cada regla configurada en los firewall?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se deshabilitan las reglas de acceso en el Firewall que no sean ocupadas, se verifican y actualizan periódicamente según las necesidades institucionales?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se establece una configuración base y se realiza periódicamente copias de seguridad de las configuraciones de dispositivos de telecomunicaciones?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se mantienen actualizado el firmware, el sistema operativo y el software instalado en los equipos, en su última versión estable, sin afectar la operación, así como aplicar los parches de seguridad recomendados por los fabricantes?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se realiza el monitoreo y análisis en el flujo de tráfico y dispositivos de red, para la detección oportuna de amenazas que puedan explotar vulnerabilidades de los activos de información en la Dependencia?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se encuentra implementado un mecanismo de revisión constante de la reputación del segmento de IP? Y en caso de estar en una lista negra, ¿Se identifican la(s) causa(s) por la(s) que la reputación del segmento decreció, se soluciona el problema y solicita la exclusión de la lista negra?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se utilizan los protocolos seguros HTTPS, SFTP y SSH, en lugar de HTTP, FTP y Telnet? ¿Se prioriza el uso de Let’s Encrypt e implementar Autoridades de Certificación internas de confianza?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Se restringe el acceso a invitados a una red sólo con salida a internet, que no tenga acceso a la red interna de la Dependencia, estableciendo el tiempo máximo de autorización de los dispositivos?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Redes y Telecomunicaciones',
                    'pregunta'  => '¿Si se cuenta con proveedores, el personal interno de la Dependencia tiene acceso a los equipos de telecomunicaciones, además de estos, con usuarios y con privilegios de lectura o monitoreo a los equipos de telecomunicaciones, que están autorizados y documentados?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo de Computo',
                    'pregunta'  => '¿Se cuenta con la creación de imágenes de instalación base con las aplicaciones permitidas al interior de cada Dependencia, de preferencia conformadas por software libre; la configuración de los sistemas operativos y habilitación de los usuarios estrictamente necesarios de acuerdo con el grupo o rol de la persona servidora pública y priorizando el principio de menor privilegio?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo de Computo',
                    'pregunta'  => '¿Se cuenta con procedimientos necesarios para la autorización, el ingreso, registro y la conexión de equipos de cómputo personales a las redes institucionales?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo de Computo',
                    'pregunta'  => '¿Se implementan herramientas de monitoreo de aplicaciones instaladas y actividad no deseada en los equipos de cómputo?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo de Computo',
                    'pregunta'  => '¿Se utilizan medidas necesarias para detectar y evitar la desinstalación o deshabilitación de las herramientas o los servicios de seguridad aplicados en la Dependencia?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo de Computo',
                    'pregunta'  => '¿Se realiza el borrado seguro o destrucción de equipos que contengan información que esté clasificada como reservada o confidencial para la Dependencia y se mantiene evidencia auditable del proceso?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo de Computo',
                    'pregunta'  => '¿Se realiza la instalación y actualización de software antimalware en los equipos de escritorio, portátiles y servidores para evitarla instalación, propagación y ejecución de malware en diversos puntos de la red interna de la Dependencia?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo de Computo',
                    'pregunta'  => '¿Se cierran puertos y deshabilitación servicios que no se utilizan en los servidores, aplicando las configuraciones recomendadas?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo de Computo',
                    'pregunta'  => '¿Se implementa un mecanismo de aplicación de parches de seguridad indicados por los fabricantes de hardware y software?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo de Computo',
                    'pregunta'  => '¿Se habilitan políticas de permisos de grupo para restringir el uso de herramientas de línea de comando(Powershell, Terminal, Shell) a cualquier usuario?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo de Computo',
                    'pregunta'  => '¿Se cuenta con la habilitación y configuración en el firewall de cada equipo terminal para bloquear todo el tráfico entrante, permitiendo sólo el tráfico autorizado y únicamente podrá deshabilitar el firewall la persona servidora pública facultada y con la autorización correspondiente?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo de Computo',
                    'pregunta'  => '¿Los Firewalls de cada servidor se encuentran activados y configurados de acuerdo con las necesidades del servicio requerido en todo momento y no podrá permanecer deshabilitado; únicamente se podrá deshabilitar con autorización y toma de responsabilidad por la persona servidora pública facultada?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo de Computo',
                    'pregunta'  => '¿Se registra, monitorea y analizan los eventos de seguridad de los equipos de cómputo, dispositivos de red, servidores, aplicaciones institucionales y otro software o activo de información que se considere importante para la Dependencia, que ayude a detectar posibles incidentes de seguridad?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Equipo de Computo',
                    'pregunta'  => '¿Si se cuenta con proveedores, el personal interno de la Dependencia o Entidad tiene acceso a los equipos de cómputo, además del proveedor, incluyendo accesos, y estos están autorizados y documentados?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Técnología móvil',
                    'pregunta'  => '¿Se cuenta con un procedimiento para la autorización, el ingreso, registro y la conexión de dispositivos móviles personales a las redes institucionales?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Técnología móvil',
                    'pregunta'  => '¿Se cuenta con la autorización previa y acceso a las redes de los dispositivos móviles, propiedad de terceros, además de conectarse a una red como invitado sin conectarse a los servicios internos de la dependencia?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Sistema, Aplicaciones y Servicios',
                    'pregunta'  => '¿Se realiza la creación y actualización de un inventario de aplicaciones y sistemas de información en la Dependencia?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Sistema, Aplicaciones y Servicios',
                    'pregunta'  => '¿Se implementa un repositorio del código fuente Institucional,  bajo control y administrado por la Dependencia e independiente a los contratos con fábricas de software?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Sistema, Aplicaciones y Servicios',
                    'pregunta'  => '¿Se cuenta con bitácoras y registros con fines de auditoría y trazabilidad de procesos de desarrollo de software?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Sistema, Aplicaciones y Servicios',
                    'pregunta'  => '¿Se encuentran separados los sistemas esenciales de la red de datos interna y sólo se le permite el acceso o salida directa hacia la Internet, como mínimo, con una protección perimetral de red?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Sistema, Aplicaciones y Servicios',
                    'pregunta'  => '¿Se encuentra la comunicación cifrada para las aplicaciones o servicios que estén expuestos en Internet y que manejen información sensible, como Información confidencial o reservada, datos personales y datos personales sensibles, con el fin de evitar que ésta sea modificada expuesta a personas no autorizadas?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Sistema, Aplicaciones y Servicios',
                    'pregunta'  => '¿Para el desarrollo de sistemas o aplicaciones, se rige bajo los principios de privilegio mínimo y funcionalidad mínima, validando cada operación que realiza el usuario a través de verificación explícita, todas las entradas, incluido el tamaño, el tipo de datos, los rangos o formatos aceptables y los posibles errores?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Sistema, Aplicaciones y Servicios',
                    'pregunta'  => '¿Se encuentran separados los ambientes de desarrollo y pruebas entre ellos y de ambientes productivos, se siguen las medidas de seguridad que se implementan para un ambiente de producción con la finalidad de simular y validar los escenarios que expongan riesgos de seguridad?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Sistema, Aplicaciones y Servicios',
                    'pregunta'  => '¿Se establecen los controles necesarios, así como los criterios y el perfil del usuario que tendrá acceso al código fuente para realizar cambios e implementaciones que requiera el sistema o aplicación, en horarios no hábiles para no afectar la disponibilidad del servicio?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Sistema, Aplicaciones y Servicios',
                    'pregunta'  => '¿Se cuenta con la actualización de las bibliotecas y lenguajes de programación utilizados en el desarrollo de aplicaciones y sistemas para minimizar la exposición a vulnerabilidades, en caso de que dicha actualización afecte la funcionalidad desempeño del sistema y/o aplicativo, se planifica y realiza la adecuación a los mismos?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Sistema, Aplicaciones y Servicios',
                    'pregunta'  => '¿Se realizan pruebas unitarias y de integridad a los sistemas desarrollados?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Sistema, Aplicaciones y Servicios',
                    'pregunta'  => '¿Se realizan pruebas de estrés y carga masiva de datos a los sistemas y aplicaciones desarrollados antes de su implementación en ambientes productivos?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Sistema, Aplicaciones y Servicios',
                    'pregunta'  => '¿Se realiza un análisis de vulnerabilidades a los sistemas o aplicaciones, en particular las identificadas como esenciales para la Dependencia, con el fin de verificar que cumplan con los requisitos mínimos previo a su operación en producción?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Sistema, Aplicaciones y Servicios',
                    'pregunta'  => '¿Se realizan pruebas de respaldo y restauración de los sistemas, aplicaciones y los servicios y de la información u otros activos de información relacionados con estos?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Sistema, Aplicaciones y Servicios',
                    'pregunta'  => '¿Se cuenta con un marco de políticas del remitente (SPF), identificado de llaves de dominio (DKIM) y mensajes basados en el dominio (DMARC) para el servicio de correo electrónico? ',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Base de Datos',
                    'pregunta'  => '¿Se utiliza un mecanismo para realizar pruebas de respaldo y restauración de las bases de datos institucionales, y estas se encuentran cifradas?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Base de Datos',
                    'pregunta'  => '¿Se cuenta con la definición de  usuarios, roles y permisos específicos para las diferentes operaciones en las bases de datos?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Base de Datos',
                    'pregunta'  => '¿Se cuenta con un inventario de todas las bases de datos institucionales y su interoperabilidad con otros sistemas internos o externos y con otras Instituciones públicas?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Base de Datos',
                    'pregunta'  => '¿Se ofusca información de bases de datos que sea utilizada en ambientes de desarrollo?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Base de Datos',
                    'pregunta'  => '¿Se utiliza cifrado en reposo y en tránsito, cuando la base de datos contiene datos personales?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],
                [
                    'modulo'=> 'Base de Datos',
                    'pregunta'  => '¿Se cuenta con bases de datos que contengan información confidencial, y el contenido de las tuplas esta cifrado utilizando llaves cuya posesión sea exclusivamente para personas autorizadas y nunca tengan acceso el administrador del sistema operativo ni el DBA?',
                    'analisis_brechas_id'    =>  $analisis_id,
                ],

        ];
    }

    public function TraerDatosDos($analisis_id)
    {
        return [
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Recursos Humanos',
                'anexo_politica' => 'El personal que tenga acceso a información confidencial de la Dependencia o Entidad deberá firmar un acuerdo de confidencialidad y no divulgación de la información institucional.',
                'anexo_descripcion' => '¿Se cuentan con acuerdos de confidencialidad y no divulgación de la información institucional? En caso de que sí, ¿cómo se gestiona el consentimiento del personal? ¿Quién es el responsable del resguardo?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Recursos Humanos',
                'anexo_politica' => 'Establecer procedimientos para otorgar permisos y privilegios de acceso a los activos de información específicos, estableciendo roles y responsabilidades definidas para todas las personas servidoras públicas y proveedores usuarios de estos. Y mantener una bitácora de los permisos que fueron otorgados a cada persona.',
                'anexo_descripcion' => '¿Se tienen definidos y documentados roles y responsabilidades de seguridad de la información?,¿cómo se asignan? ¿quién los revisa y autoriza?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Recursos Humanos',
                'anexo_politica' => 'Reforzar el buen uso de la cuenta de correo Institucional para que todas las comunicaciones estén relacionadas con su encargo o función, informando de los riesgos y sanciones por incumplimiento.',
                'anexo_descripcion' => '¿Se cuenta con políticas, procedimientos y controles  definidos para un correcto uso del correo institucional?, ¿Me puede mostrar evidencia de ello?, ¿Cómo se hacen de conocimiento al personal?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Recursos Humanos',
                'anexo_politica' => 'Garantizar la asignación, revocación, supresión o modificación de los privilegios de acceso a los activos en materia de TIC, otorgados a servidores públicos de la Institución y de otras Dependencias y Entidades, así como al personal de los proveedores de servicios u otros usuarios, al inicio o término de su empleo, cargo o comisión, relación contractual o de cualquier otra naturaleza, o bien, cuando por algún motivo, el nivel de privilegios de acceso asignado cambie.',
                'anexo_descripcion' => '¿Como se realiza la gestión de los privilegios de acceso a los activos en materia de TIC? ¿Aplica para personal interno y externo?
                ¿Con qué periodicidad se les da seguimiento? (altas, bajas, cambios)',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Recursos Humanos',
                'anexo_politica' => 'Elaborar un proceso y procedimiento de desvinculación del personal que considere, como mínimo: la devolución de los activos de información bajo custodia, el retiro de credenciales y las cuentas de acceso a servicios y sistemas que permitan poner en riesgo la seguridad de la información en la Dependencia o Entidad.',
                'anexo_descripcion' => '¿Se cuenta con el procedimiento de desvinculación del personal internos y externos?
                ¿Podríamos contar con evidencia de una baja reciente?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Recursos Humanos',
                'anexo_politica' => 'Contar con un proceso disciplinario, formalmente establecido y aceptado por todas las áreas de la Dependencias o Entidad, en el que se contemplen las sanciones administrativas o legales para los casos en los que el personal, interno o externo, incumpla con lo definido en materia de seguridad de la información.',
                'anexo_descripcion' => '¿Se cuenta con un proceso donde se mencionen las sanciones administrativas o legales, en caso de que el personal interno y externo incumpla con lo definido en materia de seguridad de la información? 
                En caso de que sí, ¿cómo se hace de conocimiento al personal?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Definir procesos y procedimientos que establezcan los pasos y tiempos para el respaldo de información y para las pruebas de restauración que le permita a la Institución mantener su confidencialidad, integridad y disponibilidad.',
                'anexo_descripcion' => '¿Se cuentan con políticas y procedimientos para realizar los respaldos de información y pruebas de restauración?,¿Se realizan respaldos de información? En caso de que sí, ¿con qué periodicidad se realizan?,¿Se realizan pruebas de restauración? En caso de que sí, ¿con qué periodicidad se realizan?
                ¿Podemos visualizar cuándo fue el último respaldo realizado?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Implementar un programa de concienciación, formación y educación continua sobre seguridad de la información y el uso aceptable de los activos para todo el personal en la Dependencia o Entidad.',
                'anexo_descripcion' => '¿Se cuenta con un programa de concienciación formalizado?
                ¿Como llevan acabo la concienciación, formación y educación sobre seguridad y el uso aceptable los equipos?
                ¿Con qué periodicidad se realizan? ¿Podemos visualizar evidencia de la última capacitación?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Tópicos acerca de cómo interactuar de manera segura con los activos de información en general y los datos de la Dependencia o Entidad, identificar y almacenar, transferir, archivar datos confidenciales de manera adecuada y aplicar los procedimientos para el respaldo de información y copias de seguridad; ',
                'anexo_descripcion' => '¿Se cuenta con algún procedimiento para el almacenamiento de datos, respaldo y copias de seguridad?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
    
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Concienciación de las causas de la exposición voluntaria e involuntaria de datos para que se tenga la habilidad de reconocer los ataques más comunes, como son: la ingeniería social y el phishing, por mencionar algunos; asimismo, la composición de contraseñas, administración de credenciales y autenticación multifactor (MFA). ',
                'anexo_descripcion' => '¿Se realizán campañas de concienciación de la exposición voluntaria e involuntaria de datos de la SEDATU? Algún ejemplo es la ingeniería social y el phishing, composición de contraseñas, administración de credenciales, etc... 
                Cuando llega a pasar algún evento de este tipo, ¿se realiza un reforzamiento de concienciación?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Advertir sobre los peligros del descuido de los puestos de trabajo, conectarse y transmitir datos a través de redes inseguras para actividades de la Dependencia o Entidad y para reconocer un posible evento o incidente de seguridad, pérdida y robo de los activos de información y el reporte correspondiente.',
                'anexo_descripcion' => '¿El personal interno y externo de la SEDATU se encuentra advertido sobre los peligros del descuido sobre redes inseguras? ¿De qué manera se realiza? ¿Con qué periodicidad?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Establecer política de contraseñas para la administración de TICs, que defina la complejidad y la periodicidad de renovación. En lo posible implementar inventarios de credenciales de acceso por categorías de activos de información.',
                'anexo_descripcion' => '¿Como administras las contraseñas? ¿Se encuentra documentado?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Implementar y utilizar autenticación multifactor en los equipos, sistemas y aplicaciones donde sea necesario y posible.',
                'anexo_descripcion' => '¿Cuentas con métodos de autenticación? En caso de que sí, ¿podemos visualizar evidencia?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Establecer ciclo de vida de las credenciales de acceso, definiendo los procedimientos para su creación, uso, suspensión por inactividad y borrado en los sistemas y aplicaciones Institucionales y cualquier otro activo de información donde se encuentran habilitadas.',
                'anexo_descripcion' => '¿Cómo gestionas las credenciales de acceso? ¿en dónde se encuentra documentado? ¿Con qué periodicidad se realiza la revisión? ¿Podemos visualizar evidencia de la última revisión?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Evitar el uso desmedido de cuentas de administración y cuentas privilegiadas, que puedan provocar algún daño a los activos de información o interrupción de los servicios Institucionales con alto impacto a la operación y la continuidad. Utilizar protocolos de autenticación de redes.',
                'anexo_descripcion' => '¿Se cuenta con algún procedimiento para la administración de cuentas?¿Se encuentran rastreadas? ¿Se lleva seguimiento de las cuentas de administrador? ',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Deshabilitar las cuentas predeterminadas o genéricas en los activos de información para evitar el uso indebido. En caso de ser necesarias para la ejecución de ciertas tareas, aplicaciones o servicios, se deberá establecer el procedimiento para justificar, documentar, aprobar su uso y para contar con trazabilidad acerca de su uso por personas servidoras públicas y otras externas a las Dependencias y Entidades.',
                'anexo_descripcion' => '¿Se cuenta con algún procedimiento para la administración de cuentas? En caso de utilizar cuentas predeterminadas o genéricas, ¿se tiene documentado la justificación y aprobación?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Administrar los accesos físicos a los activos de información, para garantizar su protección y la trazabilidad en los ingresos, por medio de señalamientos para la restricción del acceso físico a personas no autorizadas, internas y externas, y aplicando el uso de bitácoras de control para el acceso a instalaciones o áreas específicas.',
                'anexo_descripcion' => '¿Cuentas con un proceso de accesos físicos a los activos de información? ¿Se cuenta con bitácoras de acceso de personal interno y externo?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Administrar los accesos por VPN e implementar las restricciones de acceso a nivel de puerto o de dirección física con credenciales de accesos distintas a las del directorio activo.',
                'anexo_descripcion' => '¿Se tiene permitido el uso de VPN?¿Se cuenta con una responsiva de uso de VPN?¿Se cuenta con un mecanismo de administración de accesos por VPN?¿Cómo se restringe los acceso, a nivel puerto o MAC?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Aplicar la adecuada configuración para la navegación web a fin de prevenir el acceso o, en su caso, detectar páginas fraudulentas o sospechosas en función de su reputación.',
                'anexo_descripcion' => '¿Se cuenta con filtrado de navegación web? ¿Podemos visualizarlo? ¿Quién es el personal facultado para administrarlo?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Configurar adecuadamente el envío y recepción de correos electrónicos evitando la entrada y salida hacia dominios públicos o privados diferentes a los autorizados, se recomienda que preferentemente sea sólo entre el dominio Institucional y con otras entidades gubernamentales con las cuales se tenga comunicación interinstitucional.',
                'anexo_descripcion' => '¿Cómo se encuentran configuradas las reglas de comunicación de envío y recepción de correo electrónico? ¿Quién es el personal facultado para la configuración?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [   
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Para correo electrónico, implementar medidas antispam con la finalidad de evitar la propagación de malware, robo de datos y otras amenazas.',
                'anexo_descripcion' => '¿Cómo se encuentran configuradas las medidas de seguridad de correo electrónico?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Realizar el monitoreo constante que permita detectar conexiones, redes, dispositivos y software no autorizados realizado por personas internas o externas a la Dependencia o Entidad.',
                'anexo_descripcion' => '¿Cómo se lleva a cabo el monitoreo de dispositivos al acceder a la red institucional? En caso de alguna anomalía, ¿cómo se notifica la alerta?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Gestión',
                'anexo_politica' => 'Contar con un inventario actualizado de bienes y servicios de TIC, incluyendo en éste los equipos de cómputo dispositivos de red sistemas aplicaciones y',
                'anexo_descripcion' => '¿Se cuenta con inventario de activos de información, así como de proveedores TI? ¿Quién es el personal facultado para modificarlo? ¿Se lleva seguimiento de vigencia de licencias, contratos, etc?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Planeación',
                'anexo_politica' => 'Desarrollar un procedimiento adoptar una metodología de gestión y tratamiento de riesgos, de seguridad y de acuerdo a su resultado, implementar las acciones preventivas y correctivas correspondientes.',
                'anexo_descripcion' => '¿Se cuenta con una metodología de análisis de riesgos? ¿Cuándo fue el último análisis de riesgo realizado? ¿Se cuenta con plan de tratamiento de riesgos?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Planeación',
                'anexo_politica' => 'Crear, probar e implementar el plan de respuesta y gestión de los incidentes de seguridad, que incluya la conformación de ERISC, así como las acciones de preparación, detención y análisis, contención, erradicación y recuperación, y actividades posteriores al incidentes.',
                'anexo_descripcion' => '¿Se cuenta con un plan de gestión de incidentes de seguridad? En caso de que sí, ¿se realizan pruebas al plan? En caso de que sí, ¿con qué periodicidad se realizan? ¿Se ha presentado algún incidente? En caso de que si, ¿podemos visualizar evidencia de la respuesta que se brindó?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Planeación',
                'anexo_politica' => 'Crear, probar e implementar los planes de continuidad de operaciones y recuperación ante desastres, incluyendo en éste una lista definida y prioridades a su recuperación , cuando sea posible contar con otros sitios alternos como alternativa de recuperación.',
                'anexo_descripcion' => '¿Se cuenta con un Plan de Continuidad de Negocio?En caso de que sí, ¿realizan pruebas al Plan? ¿con qué periodicidad se realizan? ¿Se cuenta con sitios alternos?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Planeación',
                'anexo_politica' => 'Crear, probar e implementar el plan de gestión de las vulnerabilidades encontradas, en este se deberá establecer el proceso para su identificación, asignación de responsables y tiempos para solución.',
                'anexo_descripcion' => '¿Se cuenta con un plan de gestión de vulnerabilidades? ¿Se realizan pruebas al Plan? En caso de que sí, ¿con qué periodidad se realizan?
                En este año, ¿se han realizado pruebas de penetración y análisis de vulnerabilidades? En caso de que sí, ¿podríamos visualizar el informe y remediación de hallazgos?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Planeación',
                'anexo_politica' => 'Crear, implementar matriz de relación de proveedores de servicios, establecimiento un inventario de proveedores y servicios, definiendo los acuerdos de niveles de servicio y las personas responsables.',
                'anexo_descripcion' => '¿Se cuenta con una matriz de proveedores y servicios? ¿Quién es el personal responsable de la gestión de dicha matriz? ¿Con qué periodicidad se le da seguimiento?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Planeación',
                'anexo_politica' => 'Crear, probar e implementar el plan de migración de las aplicaciones obsoletas y/o de software con el ciclo de vida concluido.',
                'anexo_descripcion' => '¿Se cuenta con un plan de migración para las aplicaciones obsoletas? En caso de que sí, ¿realizan pruebas al plan? ¿con qué periodicidad se realizan?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [ 
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Planeación',
                'anexo_politica' => 'Crear, implementar plan de migración de software libre y estándares abiertos. ',
                'anexo_descripcion' => '¿Cuentas con un plan de migración de software libre?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo Físicos',
                'anexo_politica' => 'Mantener un registro de todos los equipos físicos, la persona servidora pública responsable del mismo y sus fechas de garantía o finalización del servicio.',
                'anexo_descripcion' => '¿Se cuenta con inventario de activos físicos? En caso de que sí, ¿quién es el personal responsable de su gestión?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo Físicos',
                'anexo_politica' => 'Mantener el firmware de los equipos actualizado, con la última versión estable indicada por el fabricante, sin comprometer la operación. .',
                'anexo_descripcion' => '¿Se cuenta con la actualización del firmware en los equipos? ¿Cómo se gestionan las actualizaciones?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo Físicos',
                'anexo_politica' => 'Mantener  una  bitácora  de  control  de  mantenimiento físico, cambio, remoción, o en su caso, la destrucción de  los  equipos y/o activos de información, estableciendo las fechas próximas en las que se deberá realizar.',
                'anexo_descripcion' => '¿Se cuenta con una bitácora de control de mantenimiento físico, cambio, remoción, o en su caso, destrucción de los equipos? En caso de que sí, ¿quién es el responsable del registro o actualización de la información de la bitácora?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Centro de Datos',
                'anexo_politica' => 'Establecer una bitácora de control de acceso físico al centro de datos y a los activos de información esenciales, describiendo la actividad a realizar en estos.',
                'anexo_descripcion' => '¿Se cuenta con una bitácora al centro de datos? ¿Podemos ingresar al centro de datos?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Centro de Datos',
                'anexo_politica' => 'Restringir el acceso físico a personas internas o externas, y permitirlo únicamente con autorización escrita y los registros correspondientes.',
                'anexo_descripcion' => '¿Cómo se lleva acabo el proceso de acceso físico a las instalaciones?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Centro de Datos',
                'anexo_politica' => 'Implementar bóvedas de medios, centros de datos alternos cuando sea posible, servicios en la nube, como alternativas para recuperar la operación de los Centros de Datos ante alguna situación que los afecte o interrumpa.',
                'anexo_descripcion' => '¿Se Implementan bóvedas de medios, centros de datos alternos cuando sea posible, servicios en la nube, como alternativas para recuperar la operación de los Centros de Datos?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Centro de Datos',
                'anexo_politica' => 'En caso de requerirse la implementación de centros de datos alternos y bóvedas de medios, estos deberán estar localizados en distintos puntos geográficos ,geológicamente viables y dentro del territorio nacional.',
                'anexo_descripcion' => 'En caso de requerirse  centros de datos alternos y bóvedas de medios, ¿dónde se encuentran ubicados?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Centro de Datos',
                'anexo_politica' => 'Implementar mecanismos de cifrado en los medios de almacenamiento en Centros de Datos centralizados, determinando que la administración de dichos mecanismos de cifrado esté a cargo de servidores públicos y nunca bajo la responsabilidad de un proveedor.',
                'anexo_descripcion' => '¿Se implementan mecanismos de cifrado en los medios de almacenamiento en Centros de Datos centralizados? En caso de que sí, ¿quién es el responsable de la administración de dichos mecanismos de cifrado?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Centro de Datos',
                'anexo_politica' => 'Todo Centro de Datos deberá cumplir en su diseño, estructura, desempeño, fiabilidad y medidas de seguridad equivalentes, como mínimo, el equivalente al estándar TIER II.',
                'anexo_descripcion' => '¿En el centro de datos se cumple con su diseño, estructura, desempeño, fiabilidad y medidas de seguridad equivalentes, como mínimo, el equivalente al estándar TIER II?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Centro de Datos',
                'anexo_politica' => 'Establecer los procesos o procedimientos formales para la administración del Centro de Datos, en cuanto a accesos, mantenimiento de equipos, supervisión de trabajos externos y otras actividades relacionadas.',
                'anexo_descripcion' => '¿Se establecen procesos o procedimientos formales para la administración del Centro de Datos, en cuanto a accesos, mantenimiento de equipos, supervisión de trabajos externos y otras actividades relacionadas?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Aplicar políticas de firewall permitiendo sólo el tráfico válido para la Dependencia o Entidad por medio de los puertos TCP/IP necesarios y autorizados.',
                'anexo_descripcion' => '¿Se aplican políticas de firewall permitiendo sólo el tráfico válido para la SEDATU por medio de los puertos TCP/IP necesarios y autorizados?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Utilizar redes abiertas únicamente al proporcionar servicios a la población, las cuales deberán estar separadas y aisladas de las redes de datos institucionales, por ejemplo, LAN, DMZ, invitados y de control, en caso de existir.',
                'anexo_descripcion' => '¿Se utilizan redes abiertas únicamente al proporcionar servicios a la población, las cuales deberán estar separadas y aisladas de las redes de datos institucionales, como por ejemplo, LAN, DMZ, invitados y de control, en caso de existir?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Utilizar mecanismos de cifrado de llave pública y privada, canales cifrados de comunicación y, cuando corresponda, de firma electrónica avanzada, que permitan el acceso de la información únicamente al destinatario autorizado al que esté dirigida.',
                'anexo_descripcion' => '¿Se utilizan mecanismos de cifrado de llave pública y privada, canales cifrados de comunicación y, cuando corresponda, de firma electrónica avanzada, que permitan el acceso de la información únicamente al destinatario autorizado al que esté dirigida?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Implementar controles de red como segmentación de redes, reglas de control de acceso, almacenamiento de bitácoras, seguridad de puertos, así como otras buenas prácticas con la finalidad de tener una mejor administración y seguridad en la red.',
                'anexo_descripcion' => '¿Se implementan controles de red como segmentación de redes, reglas de control de acceso, almacenamiento de bitácoras, seguridad de puertos, así como otras buenas prácticas con la finalidad de tener una mejor administración y seguridad en la red?
                ¿Se cuenta con diagrama de red?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Desactivar el uso del protocolo RDP en general, en caso de ser necesario, limitarlo por velocidad con doble factor de autenticación, se recomienda hacer uso de redes privadas virtuales VPN.',
                'anexo_descripcion' => '¿Se desactiva el uso del protocolo RDP en general? En caso de ser necesario, ¿se limita por velocidad con doble factor de autenticación?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Establecer accesos por VPN como único medio de acceso remoto a las redes internas de la Dependencia o Entidad, con autenticación separada a la de los servicios institucionales, sin tener permisos superiores a los que el usuario tiene en la red interna, y con la finalidad de que sólo usuarios autorizados puedan acceder a la red institucional desde sitios remotos.',
                'anexo_descripcion' => '¿Se establecen accesos por VPN como único medio de acceso remoto a las redes internas de la SEDATU, con autenticación separada a la de los servicios institucionales, sin tener permisos superiores a los que el usuario tiene en la red interna, y con la finalidad de que sólo usuarios autorizados puedan acceder a la red institucional desde sitios remotos?',
                'analisis_brechas_id' => $analisis_id,

            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Establecer acceso restringido a la red LAN para que sólo personal de la Dependencias o Entidad tenga acceso; para usuarios externos, será requerido contar con justificación, autorización y los registros correspondientes.',
                'anexo_descripcion' => '¿Se establecen accesos restringidos a la red LAN para que sólo personal de la SEDATU tenga acceso; y para usuarios externos, se es requerido contar con justificación, autorización y los registros correspondientes?
                ¿Cómo se gestiona el acceso para usuarios externos?',
                'analisis_brechas_id' => $analisis_id,

            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Implementar proxy en las redes Wireless y LAN, estableciendo políticas de uso de la red, es decir, autorización para navegar a sitios de la Internet y no permitiendo el acceso o salida directa hacia ésta; además, se deberán detectar páginas fraudulentas o sospechosas por medio de direcciones IP o dominios.',
                'anexo_descripcion' => '¿Se implementa proxy en las redes Wireless y LAN, estableciendo políticas de uso de la red, es decir, autorización para navegar a sitios de la Internet y no permitiendo el acceso o salida directa hacia ésta; además, se detectan páginas fraudulentas o sospechosas por medio de direcciones IP o dominios?
                ¿Quién lo gestiona? Si es desde una consola, ¿podríamos visualizar los accesos?',
                'analisis_brechas_id' => $analisis_id,

            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Mantener una bitácora con la justificación de cada regla configurada en los firewall.',
                'anexo_descripcion' => '¿Se cuenta con una bitácora con la justificación de cada regla configurada en los firewall? ¿Quién es el personal facultado para realizar modificaciones? ¿Se revisa y autoriza?',
                'analisis_brechas_id' => $analisis_id,

            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Deshabilitar las reglas de acceso en el Firewall que no sean ocupadas, verificarlas y actualizarlas periódicamente según las necesidades institucionales.',
                'anexo_descripcion' => '¿Se deshabilitan las reglas de acceso en el Firewall que no sean ocupadas, se verifican y actualizan periódicamente según las necesidades institucionales?
                ¿Con qué periodicidad se revisan y actualizan?',
                'analisis_brechas_id' => $analisis_id,

            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Establecer una configuración base y realizar periódicamente copias de seguridad de las configuraciones de dispositivos de telecomunicaciones.',
                'anexo_descripcion' => '¿Se establece una configuración base y se realiza periódicamente copias de seguridad de las configuraciones de dispositivos de telecomunicaciones?
                ¿Con qué periodicidad se realizan? ¿Quién es el personal facultado para realizar estas actividades?',
                'analisis_brechas_id' => $analisis_id,

            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Se deberá mantener actualizado el firmware, el sistema operativo y el software instalado en los equipos, en su última versión estable, sin afectar la operación, así como aplicar los parches de seguridad recomendados por los fabricantes.',
                'anexo_descripcion' => '¿Se mantienen actualizados el firmware, el sistema operativo y el software instalado en los equipos, en su última versión estable, sin afectar la operación, así como aplicar los parches de seguridad recomendados por los fabricantes?
                ¿Cómo se gestionan las actualizaciones? ¿Quién es el personal facultado para realizar las actualizaciones e instalación de parches? ¿Cómo se asegura que la instalación no vulnera la operación?',
                'analisis_brechas_id' => $analisis_id,

            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Monitorear y analizar el flujo de tráfico y dispositivos de red, para la detección oportuna de amenazas que puedan explotar vulnerabilidades de los activos de información en la Dependencia o Entidad.',
                'anexo_descripcion' => '¿Se realiza el monitoreo y análisis en el flujo de tráfico y dispositivos de red, para la detección oportuna de amenazas que puedan explotar vulnerabilidades de los activos de información en la SEDATU?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Implementar un mecanismo de revisión constante de la reputación del segmento de IP, en caso de estar en lista negra, identificar la(s) causa(s) por la(s) que la reputación del segmento decreció, solucionar el problema y solicitar la exclusión de la lista negra.',
                'anexo_descripcion' => '¿Se encuentra implementado un mecanismo de revisión constante de la reputación del segmento de IP? Y en caso de estar en una lista negra, ¿Se identifican la(s) causa(s) por la(s) que la reputación del segmento decreció, se soluciona el problema y solicita la exclusión de la lista negra? ¿Quién es el personal factultado para realizar esta actividad?',
                'analisis_brechas_id' => $analisis_id,

            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Implementar uso de protocolos seguros HTTPS, SFTP y SSH, en lugar de HTTP, FTP y Telnet. Priorizar el uso de Let’s Encrypt e implementar Autoridades de Certificación internas de confianza.',
                'anexo_descripcion' => '¿Se utilizan los protocolos seguros HTTPS, SFTP y SSH, en lugar de HTTP, FTP y Telnet? ¿Se prioriza el uso de Let’s Encrypt e implementar Autoridades de Certificación internas de confianza?',
                'analisis_brechas_id' => $analisis_id,

            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'Restringir el acceso a invitados a una red sólo con salida a internet, que no tenga acceso a la red interna de la Dependencia o Entidad, estableciendo el tiempo máximo de autorización de los dispositivos.',
                'anexo_descripcion' => '¿Se restringe el acceso a invitados a una red sólo con salida a internet, que no tenga acceso a la red interna de la Dependencia, estableciendo el tiempo máximo de autorización de los dispositivos?',
                'analisis_brechas_id' => $analisis_id,

            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Redes y Telecomunicaciones',
                'anexo_politica' => 'En caso de contar con proveedores, el personal interno de la Dependencia o Entidad deberá tener acceso a los equipos de telecomunicaciones, además de estos, con usuarios y con privilegios de lectura o monitoreo a los equipos de telecomunicaciones, que deberán estar autorizados y documentados.',
                'anexo_descripcion' => 'En caso de contar con proveedores, ¿el personal interno de la SEDATU tiene acceso a los equipos de telecomunicaciones, además de estos, con usuarios y con privilegios de lectura o monitoreo a los equipos de telecomunicaciones, ¿Se encuentran autorizados y documentados? ¿Cómo se gestionan las altas, cambios o bajas de los accesos? ¿Quién es el personal facultado para la la solicitud y autorización?',
                'analisis_brechas_id' => $analisis_id,

            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo de Computo',
                'anexo_politica' => 'Crear las imágenes de instalación base con las aplicaciones permitidas al interior de cada Dependencia o Entidad, de preferencia conformadas por software libre; configuración de los sistemas operativos y habilitación de los usuarios estrictamente necesarios de acuerdo con el grupo o rol de la persona servidora pública y priorizando el principio de menor privilegio.',
                'anexo_descripcion' => '¿Se cuenta con la creación de imágenes de instalación base con las aplicaciones permitidas al interior de cada Dependencia, de preferencia conformadas por software libre; la configuración de los sistemas operativos y habilitación de los usuarios estrictamente necesarios de acuerdo con el grupo o rol de la persona servidora pública y priorizando el principio de menor privilegio?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo de Computo',
                'anexo_politica' => 'Establecer los procedimientos necesarios para la autorización, el ingreso, registro y la conexión de equipos de cómputo personales a las redes institucionales.',
                'anexo_descripcion' => '¿Se cuenta con procedimientos necesarios para la autorización, el ingreso, registro y la conexión de equipos de cómputo personales a las redes institucionales?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo de Computo',
                'anexo_politica' => 'Implementar herramientas de monitoreo de aplicaciones instaladas y actividad no deseada en los equipos de cómputo.',
                'anexo_descripcion' => '¿Se implementan herramientas de monitoreo de aplicaciones instaladas y actividad no deseada en los equipos de cómputo? ¿Quién es el personal facultado para realizar el monitoreo? En caso de alguna anomalía, ¿cómo se gestiona?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo de Computo',
                'anexo_politica' => 'Aplicar medidas necesarias para detectar y evitar la desinstalación o des habilitación de las herramientas o los servicios de seguridad aplicados en la Dependencia o Entidad.',
                'anexo_descripcion' => '¿Se utilizan medidas necesarias para detectar y evitar la desinstalación o deshabilitación de las herramientas o los servicios de seguridad aplicados en la SEDATU? En caso de alguna anomalía, ¿cómo se gestiona?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo de Computo',
                'anexo_politica' => 'Aplicar borrado seguro o destrucción de equipos que contengan información que esté clasificada como reservada o confidencial para la Dependencia o Entidad y mantener evidencia auditable del proceso.',
                'anexo_descripcion' => '¿Se realiza el borrado seguro o destrucción de equipos que contengan información que esté clasificada como reservada o confidencial para la SEDATU y se mantiene evidencia auditable del proceso? ¿Cómo se identifica que es información reservada o confidencial? ¿Quién es el personal facultado para la solicitud y autorización? ¿Podemos visualizar evidencia de la última destrucción? ¿Quién es el personal facultado para el resguardo de dicha evidencia?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo de Computo',
                'anexo_politica' => 'Instalar y actualizar software antimalware en los equipos de escritorio, portátiles y servidores para evitarla instalación, propagación y ejecución de malware en diversos puntos de la red interna de la Dependencia o Entidad.',
                'anexo_descripcion' => '¿Se realiza la instalación y actualización de software antimalware en los equipos de escritorio, portátiles y servidores para evitarla instalación, propagación y ejecución de malware en diversos puntos de la red interna de la SEDATU?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo de Computo',
                'anexo_politica' => 'Realizar el fortalecimiento de seguridad en los servidores, aplicando las configuraciones recomendadas. Se deberán cerrar puertos y deshabilitar servicios que no se utilicen.',
                'anexo_descripcion' => '¿Se cierran puertos y deshabilitación servicios que no se utilizan en los servidores, aplicando las configuraciones recomendadas? ¿Se cuenta con guías de configuración dependiendo del Sistema Operativo? En caso de que sí, ¿en qué se basan dichas configuraciones?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo de Computo',
                'anexo_politica' => 'Implementar un mecanismo de aplicación de parches de seguridad indicados por los fabricantes de hardware y software.',
                'anexo_descripcion' => '¿Se implementa un mecanismo de aplicación de parches de seguridad indicados por los fabricantes de hardware y software?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo de Computo',
                'anexo_politica' => 'Habilitar políticas de permisos de grupo para restringir el uso de herramientas de línea de comando(Powershell, Terminal, Shell) a cualquier usuario.',
                'anexo_descripcion' => '¿Se habilitan políticas de permisos de grupo para restringir el uso de herramientas de línea de comando(Powershell, Terminal, Shell) a cualquier usuario? ¿Podemos visualizar algún ejemplo?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo de Computo',
                'anexo_politica' => 'Habilitar y configurar el firewall de cada equipo terminal para bloquear todo el tráfico entrante, permitiendo sólo el tráfico autorizado. Únicamente podrá deshabilitar el firewall la persona servidora pública facultada y con la autorización correspondiente.',
                'anexo_descripcion' => '¿Se cuenta con la habilitación y configuración en el firewall de cada equipo terminal para bloquear todo el tráfico entrante, permitiendo sólo el tráfico autorizado y únicamente podrá deshabilitar el firewall la persona servidora pública facultada y con la autorización correspondiente? ¿Podemos visualizar algún ejemplo?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo de Computo',
                'anexo_politica' => 'Los Firewalls de cada servidor deben estar activados y configurados de acuerdo con las necesidades del servicio requerido en todo momento y no podrá permanecer deshabilitado; únicamente se podrá deshabilitar con autorización y toma de responsabilidad por la persona servidora pública facultada.',
                'anexo_descripcion' => '¿Los firewalls de cada servidor se encuentran activados y configurados de acuerdo con las necesidades del servicio requerido en todo momento? En caso de requerir que esté deshabilitado, ¿se autoriza y asigna un responsable?¿Quién es el personal facultado para la solicitud y autorización de deshabilitación?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo de Computo',
                'anexo_politica' => 'Registrar, monitorear y analizar los eventos de seguridad de los equipos de cómputo, dispositivos de red, servidores, aplicaciones institucionales y otro software o activo de información que se considere importante para la Dependencia o Entidad, que ayude a detectar posibles incidentes de seguridad.',
                'anexo_descripcion' => '¿Se registra, monitorea y analizan los eventos de seguridad de los equipos de cómputo, dispositivos de red, servidores, aplicaciones institucionales y otro software o activo de información que se considere importante para la SEDATU, que ayude a detectar posibles incidentes de seguridad?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Equipo de Computo',
                'anexo_politica' => 'En caso de contar con proveedor, el personal interno de la Dependencia o Entidad deberá tener acceso a los equipos de cómputo, además del proveedor, incluyendo accesos, y estos deberán estar autorizados y documentados.',
                'anexo_descripcion' => 'En caso de contar con proveedores, ¿el personal interno de la SEDATU tiene acceso a los equipos de cómputo, además del proveedor, incluyendo accesos, y estos están autorizados y documentados?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Tecnología Móvil',
                'anexo_politica' => 'Establecer los procedimientos necesarios para la autorización, el ingreso, registro y la conexión de dispositivos móviles personales a las redes institucionales.',
                'anexo_descripcion' => '¿Se cuenta con un procedimiento para la autorización, el ingreso, registro y la conexión de dispositivos móviles personales a las redes institucionales? ¿Cómo se realiza el monitoreo? ¿Quién es el personal facultado para la solicitud y autorización? En caso de baja, ¿cómo se gestina la revocación del equipo y de los accesos?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Tecnología Móvil',
                'anexo_politica' => 'En caso de requerirse que los dispositivos móviles, propiedad de terceros, accedan a la red o interactúen con los dispositivos conectados a la infraestructura de la Dependencia o Entidad, éstos deberán contar con autorización previa y tener acceso a redes diferenciadas; sólo deberá conectarse a la red como invitado con acceso a internet y no podrá conectarse a los servicios internos de la Dependencia o Entidad.',
                'anexo_descripcion' => '¿Se cuenta con la autorización previa y acceso a las redes de los dispositivos móviles, propiedad de terceros, además de conectarse a una red como invitado sin conectarse a los servicios internos de la dependencia? ¿Quién es el personal facultado para realizar la solicitud y autorización de accesos? ¿Quién realiza el monitoreo de los equipos, así como la asignación y revocación de los accesos?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Tecnología Móvil',
                'anexo_politica'=> 'Instalar mecanismos de cifrado de datos en los dispositivos electrónicos portátiles que contengan información de la Dependencia o Entidad.',
                'anexo_descripcion' => '¿Se tienen instalados mecanismos de cifrado de datos en los dispositivos electrónicos?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'Crear y actualizar el inventario de aplicaciones y sistemas de información en la Dependencia o Entidad.',
                'anexo_descripcion' => '¿Se realiza la creación y actualización de un inventario de aplicaciones y sistemas de información en la SEDATU? ¿Con qué periodicidad se revisa y/o actualiza?¿Quién es el personal facultado las la moficiación de información?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'Implementar un repositorio del código fuente Institucional, este deberá estar bajo control y administración de la Dependencia o Entidad e independiente a los contratos con fábricas de software.',
                'anexo_descripcion' => '¿Se implementa un repositorio del código fuente Institucional,  bajo control y administrado por la SEDATU e independiente a los contratos con fábricas de software?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'Mantener bitácoras y registros con fines de auditoría y trazabilidad de procesos de desarrollo de software.',
                'anexo_descripcion' => '¿Se cuenta con bitácoras y registros con fines de auditoría y trazabilidad de procesos de desarrollo de software?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'Los sistemas esenciales deben estar separados de la red de datos interna y sólo se les deberá permitir el acceso o salida directa hacia la Internet, como mínimo, con una protección perimetral de red.',
                'anexo_descripcion' => '¿Se encuentran separados los sistemas esenciales de la red de datos interna y sólo se le permite el acceso o salida directa hacia la Internet, como mínimo, con una protección perimetral de red? ¿Podemos visualizar evidencia de la segmentación? ¿Se cuenta con diagrama?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'Para las aplicaciones o servicios que estén expuestos en Internet y que manejen información sensible, como Información confidencial o reservada, datos personales y datos personales sensibles, la comunicación deberá ser cifrada a fin de evitar que ésta sea modificada expuesta a personas no autorizadas.',
                'anexo_descripcion' => '¿Se encuentra la comunicación cifrada para las aplicaciones o servicios que estén expuestos en Internet y que manejen información sensible, como Información confidencial o reservada, datos personales y datos personales sensibles, con el fin de evitar que ésta sea modificada expuesta a personas no autorizadas? ¿Cuál es el protocolo que se utiliza? ¿Podemos visualizar evidencia del cifrado?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'El desarrollo de sistemas o aplicaciones deberá regirse bajo los principios de privilegio mínimo y funcionalidad mínima, validando cada operación que realiza el usuario a través de verificación explícita, todas las entradas, incluido el tamaño, el tipo de datos, los rangos o formatos aceptables y los posibles errores.',
                'anexo_descripcion' => '¿Para el desarrollo de sistemas o aplicaciones, se rige bajo los principios de privilegio mínimo y funcionalidad mínima, validando cada operación que realiza el usuario a través de verificación explícita, todas las entradas, incluido el tamaño, el tipo de datos, los rangos o formatos aceptables y los posibles errores?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'Los ambientes de desarrollo y pruebas deberán estar separados entre ellos y de ambientes productivos, se deberán seguir las medidas de seguridad que se implementan para un ambiente de producción con la finalidad de simular y validar los escenarios que expongan riesgos de seguridad.',
                'anexo_descripcion' => '¿Se encuentran separados los ambientes de desarrollo y pruebas entre ellos y de ambientes productivos, se siguen las medidas de seguridad que se implementan para un ambiente de producción con la finalidad de simular y validar los escenarios que expongan riesgos de seguridad? ¿Se cuenta con diagrama? ¿Podemos visualizar evidencia de la segmentación?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'El responsable del desarrollo deberá establecer los controles necesarios, así como los criterios y el perfil del usuario que tendrá acceso al código fuente para realizar cambios e implementaciones que requiera el sistema o aplicación, en horarios no hábiles para no afectar la disponibilidad del servicio.',
                'anexo_descripcion' => '¿Se establecen los controles necesarios, así como los criterios y el perfil del usuario que tendrá acceso al código fuente para realizar cambios e implementaciones que requiera el sistema o aplicación? ¿Cómo se gestionan los cambios e implementaciones?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'Actualizar las bibliotecas y lenguajes de programación utilizados en el desarrollo de aplicaciones y sistemas para minimizar la exposición a vulnerabilidades, encaso de que dicha actualización afecte la funcionalidad desempeño del sistema y/o aplicativo, se deberá planificar y realizar la adecuación a los mismos.',
                'anexo_descripcion' => '¿Se cuenta con la actualización de las bibliotecas y lenguajes de programación utilizados en el desarrollo de aplicaciones y sistemas para minimizar la exposición a vulnerabilidades, en caso de que dicha actualización afecte la funcionalidad desempeño del sistema y/o aplicativo, ¿cómo se gestiona?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'Realizar pruebas unitarias y de integridad a los sistemas desarrollados.',
                'anexo_descripcion' => '¿Se realizan pruebas unitarias y de integridad a los sistemas desarrollados? Compartir evidencia de las pruebas realizadas',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'Realizar pruebas de estrés y carga masiva de datos a los sistemas y aplicaciones desarrollados antes de su implementación en ambientes productivos.',
                'anexo_descripcion' => '¿Se realizan pruebas de estrés y carga masiva de datos a los sistemas y aplicaciones desarrollados antes de su implementación en ambientes productivos? Compartir evidencia de las pruebas realizadas',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'Realizar un análisis de vulnerabilidades a los sistemas o aplicaciones, en particular las identificadas como esenciales para la Dependencia o Entidad, para verificar que cumplan con los requisitos mínimos previo a su operación en producción.',
                'anexo_descripcion' => '¿Se realiza un análisis de vulnerabilidades a los sistemas o aplicaciones, en particular las identificadas como esenciales para la SEDATU, con el fin de verificar que cumplan con los requisitos mínimos previo a su operación en producción? En caso de identificar alguna anomalía, ¿cómo se gestiona?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'Realizar pruebas de respaldo y restauración de los sistemas, aplicaciones y los servicios y de la información u otros activos de información relacionados con estos.',
                'anexo_descripcion' => '¿Se realizan pruebas de respaldo y restauración de los sistemas, aplicaciones y los servicios y de la información u otros activos de información relacionados con estos?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'Para el servicio de correo electrónico, configurara adecuadamente el marco de políticas del remitente(SPF), el correo identificado de llaves de dominio(DKIM) y la autenticación, informes y conformidad de mensajes basados en el dominio (DMARC), estos ayudarán a autenticar a los remitentes mediante el dominio específico de una Dependencia o Entidad. SPF evitará que personas malintencionadas envíen correos electrónicos en nombre del dominio de una Dependencia o Entidad. Además de SPF, DKIM verificará si el propietario de ese dominio realmente envió un correo electrónico. DMARC utiliza tanto SPF como DKIM para determinar la autenticidad del contenido de un mensaje de correo electrónico.',
                'anexo_descripcion' => '¿Se cuenta con un marco de políticas del remitente (SPF), identificado de llaves de dominio (DKIM) y mensajes basados en el dominio (DMARC) para el servicio de correo electrónico? ',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'Proteger los datos personales que son utilizados por las aplicaciones web y móviles contra posibles amenazas, reforzando el cumplimiento del presente y de la Ley general de protección de datos personales.',
                'anexo_descripcion' => '¿Se realiza la protección de datos personales que son utilizados por las aplicaciones web y móviles contra las posibles amenazas?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Sistemas, Aplicaciones y Servicios',
                'anexo_politica'=> 'Supervisar el efectivo cumplimiento de las actividades y acuerdos efectuados con proveedores de los bienes y servicios, que por falta u omisión de estas, puedan incidir en eventos o incidentes de seguridad y afectar negativamente a la Dependencia o Entidad.',
                'anexo_descripcion' => '¿Se supervisa el efectivo cumplimiento de las actividades y acuerdos efectuados con proveedores de los bienes y servicios? ¿Quién es el personal facultado para supervisar dicho cumplimiento? En caso de alguna desviación, ¿cómo se gestiona?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Base de datos',
                'anexo_politica'=> 'Establecer un mecanismo para realizar pruebas de respaldo y restauración de las bases de datos institucionales. Es recomendable que los respaldos de estas bases de datos también se encuentren cifrados.',
                'anexo_descripcion' => '¿Se utiliza un mecanismo para realizar pruebas de respaldo y restauración de las bases de datos institucionales, y estas se encuentran cifradas?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Base de datos',
                'anexo_politica'=> 'Definir usuarios, roles y permisos específicos para las diferentes operaciones en las bases de datos.',
                'anexo_descripcion' => '¿Se cuenta con la definición de  usuarios, roles y permisos específicos para las diferentes operaciones en las bases de datos?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Base de datos',
                'anexo_politica'=> 'Definir el inventario de todas las bases de datos institucionales y su interoperabilidad con otros sistemas internos o externos y con otras Instituciones públicas.',
                'anexo_descripcion' => '¿Se cuenta con un inventario de todas las bases de datos institucionales y su interoperabilidad con otros sistemas internos o externos y con otras Instituciones públicas?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Base de datos',
                'anexo_politica'=> 'Ofuscar información de bases de datos que sean utilizadas en ambientes de desarrollo.',
                'anexo_descripcion' => '¿Se ofusca información de bases de datos que sea utilizada en ambientes de desarrollo?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Base de datos',
                'anexo_politica'=> 'Utilizar cifrado en reposo y en tránsito, cuando la base de datos contenga datos personales.',
                'anexo_descripcion' => '¿Se utiliza cifrado en reposo y en tránsito, cuando la base de datos contiene datos personales?',
                'analisis_brechas_id' => $analisis_id,
            ],
            [
                'control-uno' => '',
                'control-dos' => '',
                'anexo_indice' => 'Base de datos',
                'anexo_politica'=> 'En bases de datos que contengan información confidencial, el contenido de las tuplas debe ir cifrado utilizando llaves cuya posesión sea exclusivamente para personas autorizadas y nunca tengan acceso el administrador del sistema operativo ni el DBA.',
                'anexo_descripcion' => '¿Se cuenta con bases de datos que contengan información confidencial, y el contenido de las tuplas esta cifrado utilizando llaves cuya posesión sea exclusivamente para personas autorizadas y nunca tengan acceso el administrador del sistema operativo ni el DBA?',
                'analisis_brechas_id' => $analisis_id,
            ],

        ];
    }

    public function TraerDatosTres($analisis_id)
    {
        return [
                [
                    'estado' => 'Recursos Humanos',
                    'pregunta' =>  '¿Se cuentan con acuerdos de confidencialidad y no divulgación de la información institucional? En caso de que sí, ¿cómo se gestiona el consentimiento del personal? ¿Quién es el responsable del resguardo?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'estado' => 'Recursos Humanos',
                    'pregunta' =>  '¿Se tienen definidos y documentados roles y responsabilidades de seguridad de la información?,¿cómo se asignan? ¿quién los revisa y autoriza?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'estado' => 'Recursos Humanos',
                    'pregunta' =>  '¿Se cuenta con políticas, procedimientos y controles  definidos para un correcto uso del correo institucional?, ¿Me puede mostrar evidencia de ello?, ¿Cómo se hacen de conocimiento al personal?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Como se realiza la gestión de los privilegios de acceso a los activos en materia de TIC? ¿Aplica para personal interno y externo?
                    ¿Con qué periodicidad se les da seguimiento? (altas, bajas, cambios)',
                    'estado' => 'Recursos Humanos',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con el procedimiento de desvinculación del personal internos y externos?
                    ¿Podríamos contar con evidencia de una baja reciente?',
                    'estado' => 'Recursos Humanos',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con un proceso donde se mencionen las sanciones administrativas o legales, en caso de que el personal interno y externo incumpla con lo definido en materia de seguridad de la información? 
                    En caso de que sí, ¿cómo se hace de conocimiento al personal?',
                    'estado' => 'Recursos Humanos',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuentan con políticas y procedimientos para realizar los respaldos de información y pruebas de restauración?,¿Se realizan respaldos de información? En caso de que sí, ¿con qué periodicidad se realizan?,¿Se realizan pruebas de restauración? En caso de que sí, ¿con qué periodicidad se realizan?
                    ¿Podemos visualizar cuándo fue el último respaldo realizado?',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con un programa de concienciación formalizado?
                    ¿Como llevan acabo la concienciación, formación y educación sobre seguridad y el uso aceptable los equipos?
                    ¿Con qué periodicidad se realizan? ¿Podemos visualizar evidencia de la última capacitación?',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con algún procedimiento para el almacenamiento de datos, respaldo y copias de seguridad?',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se realizán campañas de concienciación de la exposición voluntaria e involuntaria de datos de la SEDATU? Algún ejemplo es la ingeniería social y el phishing, composición de contraseñas, administración de credenciales, etc... 
                    Cuando llega a pasar algún evento de este tipo, ¿se realiza un reforzamiento de concienciación?',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿El personal interno y externo de la SEDATU se encuentra advertido sobre los peligros del descuido sobre redes inseguras? ¿De qué manera se realiza? ¿Con qué periodicidad?',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Como administras las contraseñas? ¿Se encuentra documentado?',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Cuentas con métodos de autenticación? En caso de que sí, ¿podemos visualizar evidencia?',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Cómo gestionas las credenciales de acceso? ¿en dónde se encuentra documentado? ¿Con qué periodicidad se realiza la revisión? ¿Podemos visualizar evidencia de la última revisión?',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con algún procedimiento para la administración de cuentas?¿Se encuentran rastreadas? ¿Se lleva seguimiento de las cuentas de administrador? ',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con algún procedimiento para la administración de cuentas? En caso de utilizar cuentas predeterminadas o genéricas, ¿se tiene documentado la justificación y aprobación?',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Cuentas con un proceso de accesos físicos a los activos de información? ¿Se cuenta con bitácoras de acceso de personal interno y externo?',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Cómo se encuentran configuradas las reglas de comunicación de envío y recepción de correo electrónico? ¿Quién es el personal facultado para la configuración?',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Cómo se encuentran configuradas las medidas de seguridad de correo electrónico?',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Cómo se lleva a cabo el monitoreo de dispositivos al acceder a la red institucional? En caso de alguna anomalía, ¿cómo se notifica la alerta?',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con inventario de activos de información, así como de proveedores TI? ¿Quién es el personal facultado para modificarlo? ¿Se lleva seguimiento de vigencia de licencias, contratos, etc?',
                    'estado' => 'Gestión',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con una metodología de análisis de riesgos? ¿Cuándo fue el último análisis de riesgo realizado? ¿Se cuenta con plan de tratamiento de riesgos?',
                    'estado' => 'Planeación',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con un plan de gestión de incidentes de seguridad? En caso de que sí, ¿se realizan pruebas al plan? En caso de que sí, ¿con qué periodicidad se realizan? ¿Se ha presentado algún incidente? En caso de que si, ¿podemos visualizar evidencia de la respuesta que se brindó?',
                    'estado' => 'Planeación',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con un Plan de Continuidad de Negocio?En caso de que sí, ¿realizan pruebas al Plan? ¿con qué periodicidad se realizan? ¿Se cuenta con sitios alternos?',
                    'estado' => 'Planeación',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con un plan de gestión de vulnerabilidades? ¿Se realizan pruebas al Plan? En caso de que sí, ¿con qué periodidad se realizan?
                    En este año, ¿se han realizado pruebas de penetración y análisis de vulnerabilidades? En caso de que sí, ¿podríamos visualizar el informe y remediación de hallazgos?',
                    'estado' => 'Planeación',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con una matriz de proveedores y servicios? ¿Quién es el personal responsable de la gestión de dicha matriz? ¿Con qué periodicidad se le da seguimiento?',
                    'estado' => 'Planeación',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con un plan de migración para las aplicaciones obsoletas? En caso de que sí, ¿realizan pruebas al plan? ¿con qué periodicidad se realizan?',
                    'estado' => 'Planeación',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Cuentas con un plan de migración de software libre?',
                    'estado' => 'Planeación',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con inventario de activos físicos? En caso de que sí, ¿quién es el personal responsable de su gestión?',
                    'estado' => 'Equipo Físicos',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con la actualización del firmware en los equipos? ¿Cómo se gestionan las actualizaciones?',
                    'estado' => 'Equipo Físicos',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con una bitácora de control de mantenimiento físico, cambio, remoción, o en su caso, destrucción de los equipos? En caso de que sí, ¿quién es el responsable del registro o actualización de la información de la bitácora?',
                    'estado' => 'Equipo Físicos',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se cuenta con una bitácora al centro de datos? ¿Podemos ingresar al centro de datos?',
                    'estado' => 'Centro de Datos',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Cómo se lleva acabo el proceso de acceso físico a las instalaciones?',
                    'estado' => 'Centro de Datos',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se Implementan bóvedas de medios, centros de datos alternos cuando sea posible, servicios en la nube, como alternativas para recuperar la operación de los Centros de Datos?',
                    'estado' => 'Centro de Datos',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => 'En caso de requerirse  centros de datos alternos y bóvedas de medios, ¿dónde se encuentran ubicados?',
                    'estado' => 'Centro de Datos',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se implementan mecanismos de cifrado en los medios de almacenamiento en Centros de Datos centralizados? En caso de que sí, ¿quién es el responsable de la administración de dichos mecanismos de cifrado?',
                    'estado' => 'Centro de Datos',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿En el centro de datos se cumple con su diseño, estructura, desempeño, fiabilidad y medidas de seguridad equivalentes, como mínimo, el equivalente al estándar TIER II?',
                    'estado' => 'Centro de Datos',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se establecen procesos o procedimientos formales para la administración del Centro de Datos, en cuanto a accesos, mantenimiento de equipos, supervisión de trabajos externos y otras actividades relacionadas?',
                    'estado' => 'Centro de Datos',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se aplican políticas de firewall permitiendo sólo el tráfico válido para la SEDATU por medio de los puertos TCP/IP necesarios y autorizados?',
                    'estado' => 'Redes y Telecomunicaciones',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se utilizan redes abiertas únicamente al proporcionar servicios a la población, las cuales deberán estar separadas y aisladas de las redes de datos institucionales, como por ejemplo, LAN, DMZ, invitados y de control, en caso de existir?',
                    'estado' => 'Redes y Telecomunicaciones',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se utilizan mecanismos de cifrado de llave pública y privada, canales cifrados de comunicación y, cuando corresponda, de firma electrónica avanzada, que permitan el acceso de la información únicamente al destinatario autorizado al que esté dirigida?',
                    'estado' => 'Redes y Telecomunicaciones',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se implementan controles de red como segmentación de redes, reglas de control de acceso, almacenamiento de bitácoras, seguridad de puertos, así como otras buenas prácticas con la finalidad de tener una mejor administración y seguridad en la red?
                    ¿Se cuenta con diagrama de red?',
                    'estado' => 'Redes y Telecomunicaciones',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se desactiva el uso del protocolo RDP en general? En caso de ser necesario, ¿se limita por velocidad con doble factor de autenticación?',
                    'estado' => 'Redes y Telecomunicaciones',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se establecen accesos por VPN como único medio de acceso remoto a las redes internas de la SEDATU, con autenticación separada a la de los servicios institucionales, sin tener permisos superiores a los que el usuario tiene en la red interna, y con la finalidad de que sólo usuarios autorizados puedan acceder a la red institucional desde sitios remotos?',
                    'estado' => 'Redes y Telecomunicaciones',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se establecen accesos restringidos a la red LAN para que sólo personal de la SEDATU tenga acceso; y para usuarios externos, se es requerido contar con justificación, autorización y los registros correspondientes?
                    ¿Cómo se gestiona el acceso para usuarios externos?',
                    'estado' => 'Redes y Telecomunicaciones',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                    'pregunta' => '¿Se implementa proxy en las redes Wireless y LAN, estableciendo políticas de uso de la red, es decir, autorización para navegar a sitios de la Internet y no permitiendo el acceso o salida directa hacia ésta; además, se detectan páginas fraudulentas o sospechosas por medio de direcciones IP o dominios?
                    ¿Quién lo gestiona? Si es desde una consola, ¿podríamos visualizar los accesos?',
                    'estado' => 'Redes y Telecomunicaciones',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Redes y Telecomunicaciones',
                    'pregunta' => '¿Se cuenta con una bitácora con la justificación de cada regla configurada en los firewall? ¿Quién es el personal facultado para realizar modificaciones? ¿Se revisa y autoriza?',
                    'analisis_brechas_id' => $analisis_id,
    
                ],
                [
                   
                    'estado' => 'Redes y Telecomunicaciones',
                    'pregunta' => '¿Se deshabilitan las reglas de acceso en el Firewall que no sean ocupadas, se verifican y actualizan periódicamente según las necesidades institucionales?
                    ¿Con qué periodicidad se revisan y actualizan?',
                    'analisis_brechas_id' => $analisis_id,
    
                ],
                [
                   
                    'estado' => 'Redes y Telecomunicaciones',
                    'pregunta' => '¿Se establece una configuración base y se realiza periódicamente copias de seguridad de las configuraciones de dispositivos de telecomunicaciones?
                    ¿Con qué periodicidad se realizan? ¿Quién es el personal facultado para realizar estas actividades?',
                    'analisis_brechas_id' => $analisis_id,
    
                ],
                [
                   
                    'estado' => 'Redes y Telecomunicaciones',
                    'pregunta' => '¿Se mantienen actualizados el firmware, el sistema operativo y el software instalado en los equipos, en su última versión estable, sin afectar la operación, así como aplicar los parches de seguridad recomendados por los fabricantes?
                    ¿Cómo se gestionan las actualizaciones? ¿Quién es el personal facultado para realizar las actualizaciones e instalación de parches? ¿Cómo se asegura que la instalación no vulnera la operación?',
                    'analisis_brechas_id' => $analisis_id,
    
                ],
                [
                   
                    'estado' => 'Redes y Telecomunicaciones',
                    'pregunta' => '¿Se realiza el monitoreo y análisis en el flujo de tráfico y dispositivos de red, para la detección oportuna de amenazas que puedan explotar vulnerabilidades de los activos de información en la SEDATU?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Redes y Telecomunicaciones',
                    'pregunta' => '¿Se encuentra implementado un mecanismo de revisión constante de la reputación del segmento de IP? Y en caso de estar en una lista negra, ¿Se identifican la(s) causa(s) por la(s) que la reputación del segmento decreció, se soluciona el problema y solicita la exclusión de la lista negra? ¿Quién es el personal factultado para realizar esta actividad?',
                    'analisis_brechas_id' => $analisis_id,
    
                ],
                [
                   
                    'estado' => 'Redes y Telecomunicaciones',
                    'pregunta' => '¿Se utilizan los protocolos seguros HTTPS, SFTP y SSH, en lugar de HTTP, FTP y Telnet? ¿Se prioriza el uso de Let’s Encrypt e implementar Autoridades de Certificación internas de confianza?',
                    'analisis_brechas_id' => $analisis_id,
    
                ],
                [
                   
                    'estado' => 'Redes y Telecomunicaciones',
                    'pregunta' => '¿Se restringe el acceso a invitados a una red sólo con salida a internet, que no tenga acceso a la red interna de la Dependencia, estableciendo el tiempo máximo de autorización de los dispositivos?',
                    'analisis_brechas_id' => $analisis_id,
    
                ],
                [
                   
                    'estado' => 'Redes y Telecomunicaciones',
                    'pregunta' => 'En caso de contar con proveedores, ¿el personal interno de la SEDATU tiene acceso a los equipos de telecomunicaciones, además de estos, con usuarios y con privilegios de lectura o monitoreo a los equipos de telecomunicaciones, ¿Se encuentran autorizados y documentados? ¿Cómo se gestionan las altas, cambios o bajas de los accesos? ¿Quién es el personal facultado para la la solicitud y autorización?',
                    'analisis_brechas_id' => $analisis_id,
    
                ],
                [
                   
                    'estado' => 'Equipo de Computo',
                    'pregunta' => '¿Se cuenta con la creación de imágenes de instalación base con las aplicaciones permitidas al interior de cada Dependencia, de preferencia conformadas por software libre; la configuración de los sistemas operativos y habilitación de los usuarios estrictamente necesarios de acuerdo con el grupo o rol de la persona servidora pública y priorizando el principio de menor privilegio?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Equipo de Computo',
                    'pregunta' => '¿Se cuenta con procedimientos necesarios para la autorización, el ingreso, registro y la conexión de equipos de cómputo personales a las redes institucionales?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Equipo de Computo',
                    'pregunta' => '¿Se implementan herramientas de monitoreo de aplicaciones instaladas y actividad no deseada en los equipos de cómputo? ¿Quién es el personal facultado para realizar el monitoreo? En caso de alguna anomalía, ¿cómo se gestiona?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Equipo de Computo',
                    'pregunta' => '¿Se utilizan medidas necesarias para detectar y evitar la desinstalación o deshabilitación de las herramientas o los servicios de seguridad aplicados en la SEDATU? En caso de alguna anomalía, ¿cómo se gestiona?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Equipo de Computo',
                    'pregunta' => '¿Se realiza el borrado seguro o destrucción de equipos que contengan información que esté clasificada como reservada o confidencial para la SEDATU y se mantiene evidencia auditable del proceso? ¿Cómo se identifica que es información reservada o confidencial? ¿Quién es el personal facultado para la solicitud y autorización? ¿Podemos visualizar evidencia de la última destrucción? ¿Quién es el personal facultado para el resguardo de dicha evidencia?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Equipo de Computo',
                    'pregunta' => '¿Se realiza la instalación y actualización de software antimalware en los equipos de escritorio, portátiles y servidores para evitarla instalación, propagación y ejecución de malware en diversos puntos de la red interna de la SEDATU?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Equipo de Computo',
                    'pregunta' => '¿Se cierran puertos y deshabilitación servicios que no se utilizan en los servidores, aplicando las configuraciones recomendadas? ¿Se cuenta con guías de configuración dependiendo del Sistema Operativo? En caso de que sí, ¿en qué se basan dichas configuraciones?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Equipo de Computo',
                    'pregunta' => '¿Se implementa un mecanismo de aplicación de parches de seguridad indicados por los fabricantes de hardware y software?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Equipo de Computo',
                    'pregunta' => '¿Se habilitan políticas de permisos de grupo para restringir el uso de herramientas de línea de comando(Powershell, Terminal, Shell) a cualquier usuario? ¿Podemos visualizar algún ejemplo?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Equipo de Computo',
                    'pregunta' => '¿Se cuenta con la habilitación y configuración en el firewall de cada equipo terminal para bloquear todo el tráfico entrante, permitiendo sólo el tráfico autorizado y únicamente podrá deshabilitar el firewall la persona servidora pública facultada y con la autorización correspondiente? ¿Podemos visualizar algún ejemplo?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Equipo de Computo',
                    'pregunta' => '¿Los firewalls de cada servidor se encuentran activados y configurados de acuerdo con las necesidades del servicio requerido en todo momento? En caso de requerir que esté deshabilitado, ¿se autoriza y asigna un responsable?¿Quién es el personal facultado para la solicitud y autorización de deshabilitación?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Equipo de Computo',
                    'pregunta' => '¿Se registra, monitorea y analizan los eventos de seguridad de los equipos de cómputo, dispositivos de red, servidores, aplicaciones institucionales y otro software o activo de información que se considere importante para la SEDATU, que ayude a detectar posibles incidentes de seguridad?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Equipo de Computo',
                    'pregunta' => 'En caso de contar con proveedores, ¿el personal interno de la SEDATU tiene acceso a los equipos de cómputo, además del proveedor, incluyendo accesos, y estos están autorizados y documentados?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Tecnología Móvil',
                    'pregunta' => '¿Se cuenta con un procedimiento para la autorización, el ingreso, registro y la conexión de dispositivos móviles personales a las redes institucionales? ¿Cómo se realiza el monitoreo? ¿Quién es el personal facultado para la solicitud y autorización? En caso de baja, ¿cómo se gestina la revocación del equipo y de los accesos?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Tecnología Móvil',
                    'pregunta' => '¿Se cuenta con la autorización previa y acceso a las redes de los dispositivos móviles, propiedad de terceros, además de conectarse a una red como invitado sin conectarse a los servicios internos de la dependencia? ¿Quién es el personal facultado para realizar la solicitud y autorización de accesos? ¿Quién realiza el monitoreo de los equipos, así como la asignación y revocación de los accesos?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Tecnología Móvil',
                    'pregunta' => '¿Se tienen instalados mecanismos de cifrado de datos en los dispositivos electrónicos?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se realiza la creación y actualización de un inventario de aplicaciones y sistemas de información en la SEDATU? ¿Con qué periodicidad se revisa y/o actualiza?¿Quién es el personal facultado las la moficiación de información?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se implementa un repositorio del código fuente Institucional,  bajo control y administrado por la SEDATU e independiente a los contratos con fábricas de software?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se cuenta con bitácoras y registros con fines de auditoría y trazabilidad de procesos de desarrollo de software?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se encuentran separados los sistemas esenciales de la red de datos interna y sólo se le permite el acceso o salida directa hacia la Internet, como mínimo, con una protección perimetral de red? ¿Podemos visualizar evidencia de la segmentación? ¿Se cuenta con diagrama?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se encuentra la comunicación cifrada para las aplicaciones o servicios que estén expuestos en Internet y que manejen información sensible, como Información confidencial o reservada, datos personales y datos personales sensibles, con el fin de evitar que ésta sea modificada expuesta a personas no autorizadas? ¿Cuál es el protocolo que se utiliza? ¿Podemos visualizar evidencia del cifrado?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Para el desarrollo de sistemas o aplicaciones, se rige bajo los principios de privilegio mínimo y funcionalidad mínima, validando cada operación que realiza el usuario a través de verificación explícita, todas las entradas, incluido el tamaño, el tipo de datos, los rangos o formatos aceptables y los posibles errores?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se encuentran separados los ambientes de desarrollo y pruebas entre ellos y de ambientes productivos, se siguen las medidas de seguridad que se implementan para un ambiente de producción con la finalidad de simular y validar los escenarios que expongan riesgos de seguridad? ¿Se cuenta con diagrama? ¿Podemos visualizar evidencia de la segmentación?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se establecen los controles necesarios, así como los criterios y el perfil del usuario que tendrá acceso al código fuente para realizar cambios e implementaciones que requiera el sistema o aplicación? ¿Cómo se gestionan los cambios e implementaciones?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se cuenta con la actualización de las bibliotecas y lenguajes de programación utilizados en el desarrollo de aplicaciones y sistemas para minimizar la exposición a vulnerabilidades, en caso de que dicha actualización afecte la funcionalidad desempeño del sistema y/o aplicativo, ¿cómo se gestiona?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se realizan pruebas unitarias y de integridad a los sistemas desarrollados? Compartir evidencia de las pruebas realizadas',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se realizan pruebas de estrés y carga masiva de datos a los sistemas y aplicaciones desarrollados antes de su implementación en ambientes productivos? Compartir evidencia de las pruebas realizadas',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se realiza un análisis de vulnerabilidades a los sistemas o aplicaciones, en particular las identificadas como esenciales para la SEDATU, con el fin de verificar que cumplan con los requisitos mínimos previo a su operación en producción? En caso de identificar alguna anomalía, ¿cómo se gestiona?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se realizan pruebas de respaldo y restauración de los sistemas, aplicaciones y los servicios y de la información u otros activos de información relacionados con estos?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se cuenta con un marco de políticas del remitente (SPF), identificado de llaves de dominio (DKIM) y mensajes basados en el dominio (DMARC) para el servicio de correo electrónico? ',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se realiza la protección de datos personales que son utilizados por las aplicaciones web y móviles contra las posibles amenazas?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Sistemas, Aplicaciones y Servicios',
                    'pregunta' => '¿Se supervisa el efectivo cumplimiento de las actividades y acuerdos efectuados con proveedores de los bienes y servicios? ¿Quién es el personal facultado para supervisar dicho cumplimiento? En caso de alguna desviación, ¿cómo se gestiona?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Base de datos',
                    'pregunta' => '¿Se utiliza un mecanismo para realizar pruebas de respaldo y restauración de las bases de datos institucionales, y estas se encuentran cifradas?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Base de datos',
                    'pregunta' => '¿Se cuenta con la definición de  usuarios, roles y permisos específicos para las diferentes operaciones en las bases de datos?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Base de datos',
                    'pregunta' => '¿Se cuenta con un inventario de todas las bases de datos institucionales y su interoperabilidad con otros sistemas internos o externos y con otras Instituciones públicas?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Base de datos',
                    'pregunta' => '¿Se ofusca información de bases de datos que sea utilizada en ambientes de desarrollo?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Base de datos',
                    'pregunta' => '¿Se utiliza cifrado en reposo y en tránsito, cuando la base de datos contiene datos personales?',
                    'analisis_brechas_id' => $analisis_id,
                ],
                [
                   
                    'estado' => 'Base de datos',
                    'pregunta' => '¿Se cuenta con bases de datos que contengan información confidencial, y el contenido de las tuplas esta cifrado utilizando llaves cuya posesión sea exclusivamente para personas autorizadas y nunca tengan acceso el administrador del sistema operativo ni el DBA?',
                    'analisis_brechas_id' => $analisis_id,
                ],
            ];
    }
}
