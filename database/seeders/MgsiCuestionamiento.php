<?php

namespace Database\Seeders;

use App\Models\GapUno;
use Illuminate\Database\Seeder;

class MgsiCuestionamiento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gapuno = [
            [
                'pregunta'  => '¿Cuentan con acuerdos de confidencialidad y no divulgación de la información institucional?',
            ],
            [
                'pregunta'  => '¿Se tienen definidos y documentados roles y responsabilidades de seguridad de la información?',
            ],
            [
                'pregunta'  => '¿Se cuenta con políticas, procedimientos y controles  definidos para un correcto uso del correo institucional?¿Me puede mostrar evidencia de ello?	',
            ],
            [
                'pregunta'  => '¿Cómo se realiza la gestión de los privilegios de acceso a los activos en materia de TIC?',
            ],
            [
                'pregunta'  => '¿Cuentas con un programa de concienciación formalizado?',
            ],
            [
                'pregunta'  => '¿Cómo llevan acabo la concienciación, formación y educación sobre seguridad y el uso aceptable los equipos?',
            ],
            [
                'pregunta'  => '¿Se cuenta con algún procedimiento para el almacenamiento de datos, respaldo y copias de seguridad?',
            ],
            [
                'pregunta'  => '¿Se realizán campañas de concienciación de la exposición voluntaria e involuntaria de datos de la SEDATU?',
            ],
            [
                'pregunta'  => '¿El personal interno y externo de la Secretaria se encuentra advertido sobre los peligros del descuido sobre redes inseguras?',
            ],
            [
                'pregunta'  => '¿Cómo administras las contraseñas?',
            ],
            [
                'pregunta'  => '¿Cuentas con métodos de autenticación?',
            ],
            [
                'pregunta'  => '¿Cómo gestionas las credenciales de acceso?',
            ],
            [
                'pregunta'  => '¿Cuentas con algún procedimiento para la administración de cuentas?',
            ],
            [
                'pregunta'  => '¿Cuentas con un proceso de accesos físicos a los activos de información?',
            ],
            [
                'pregunta'  => '¿Tienes permitido el uso de VPN?',
            ],
            [
                'pregunta'  => '¿Cuentas con una responsiva de uso de VPN?',
            ],
            [
                'pregunta'  => '¿Cuentas con un mecanismo de administración de accesos por VPN?',
            ],
            [
                'pregunta'  => '¿Cómo restringes los acceso a nivel puerto o MAC?',
            ],
            [
                'pregunta'  => '¿Cuentas con filtrado de navegación web?',
            ],
            [
                'pregunta'  => '¿Cómo se encuentran configuradas las reglas de comunicación de envío y recepción de correo electrónico?',
            ],
            [
                'pregunta'  => '¿Cómo se encuentran configuradas las medidas de seguridad de correo electrónico?',
            ],
            [
                'pregunta'  => '¿Cómo se lleva a cabo el monitoreo de dispositivos al acceder a la red institucional?',
            ],
            [
                'pregunta'  => '¿Cuentas con inventario de activos de información, así como de proveedores TI?',
            ],
            [
                'pregunta'  => '¿Cuentas con una metodología de análisis de riesgos?',
            ],
            [
                'pregunta'  => '¿Cuentas con proceso de gestión de incidentes de seguridad?',
            ],
            [
                'pregunta'  => '¿Cuentas con un Plan de Continuidad de Negocio?',
            ],
            [
                'pregunta'  => '¿Cuentas con un plan de gestión de vulnerabilidades?',
            ],
            [
                'pregunta'  => '¿Cuentas con una matriz de proveedores y servicios?',
            ],
            [
                'pregunta'  => '¿Cuentas con un plan de Migración para las aplicaciones obsoletas?',
            ],
            [
                'pregunta'  => '¿Cuentas con un plan de migración de software libre?',
            ],
            [
                'pregunta'  => '¿Cuentas con inventario de activos físicos?',
            ],
            [
                'pregunta'  => '¿Se cuenta con la actualización del firmware en los equipos?',
            ],
            [
                'pregunta'  => '¿Se cuenta con una bitacora de control de mantenimiento fisico, cambio, remoción, o en su caso, destruccion de los equipos?',
            ],
            [
                'pregunta'  => '¿Se cuenta con una bitácora al centro de datos?',
            ],
            [
                'pregunta'  => '¿Cómo se lleva acabo el proceso de acceso físico a las instalaciones?',
            ],
            [
                'pregunta'  => '¿Se Implementan bóvedas de medios, centros de datos alternos cuando sea posible, servicios en la nube, como alternativas para recuperar la operación de los Centros de Datos?',
            ],
            [
                'pregunta'  => '¿Se implementa en caso de requerirse  centros de datos alternos y bóvedas de medios, estos deberán estar localizados en distintos puntos geográficos ,geológicamente viables y dentro del territorio nacional?',
            ],
            [
                'pregunta'  => '¿Se implementan mecanismos de cifrado en los medios de almacenamiento en Centros de Datos centralizados, determinando que la administración de dichos mecanismos de cifrado esté a cargo de servidores públicos y nunca bajo la responsabilidad de un proveedor?',
            ],
            [
                'pregunta'  => '¿En el centro de datos se cumple con su diseño, estructura, desempeño, fiabilidad y medidas de seguridad equivalentes, como mínimo, el equivalente al estándar TIER II?',
            ],
            [
                'pregunta'  => '¿Se establecen procesos o procedimientos formales para la administración del Centro de Datos, en cuanto a accesos, mantenimiento de equipos, supervisión de trabajos externos y otras actividades relacionadas?',
            ],
            [
                'pregunta'  => '¿Se aplican políticas de firewall permitiendo sólo el tráfico válido para la Dependencia o Entidad por medio de los puertos TCP/IP necesarios y autorizados?',
            ],
            [
                'pregunta'  => '¿Se utilizan redes abiertas únicamente al proporcionar servicios a la población, las cuales deberán estar separadas y aisladas de las redes de datos institucionales, como por ejemplo, LAN, DMZ, invitados y de control, en caso de existir?',
            ],
            [
                'pregunta'  => '¿Se utilizan mecanismos de cifrado de llave pública y privada, canales cifrados de comunicación y, cuando corresponda, de firma electrónica avanzada, que permitan el acceso de la información únicamente al destinatario autorizado al que esté dirigida?',
            ],
            [
                'pregunta'  => '¿Se implementan  controles de red como segmentación de redes, reglas de control de acceso, almacenamiento de bitácoras, seguridad de puertos, así como otras buenas prácticas con la finalidad de tener una mejor administración y seguridad en la red?',
            ],
            [
                'pregunta'  => '¿Se desactiva el uso del protocolo RDP en general, en caso de ser necesario, se limita por velocidad con doble factor de autenticación?',
            ],
            [
                'pregunta'  => '¿Se establecen accesos por VPN como único medio de acceso remoto a las redes internas de la Dependencia o Entidad, con autenticación separada a la de los servicios institucionales, sin tener permisos superiores a los que el usuario tiene en la red interna, y con la finalidad de que sólo usuarios autorizados puedan acceder a la red institucional desde sitios remotos?',
            ],
            [
                'pregunta'  => '¿Se establecen accesos restringidos a la red LAN para que sólo personal de la Dependencias o Entidad tenga acceso; y para usuarios externos, se es requerido contar con justificación, autorización y los registros correspondientes?',
            ],
            [
                'pregunta'  => '¿Se implementa proxy en las redes Wireless y LAN, estableciendo políticas de uso de la red, es decir, autorización para navegar a sitios de la Internet y no permitiendo el acceso o salida directa hacia ésta; además, se detectan páginas fraudulentas o sospechosas por medio de direcciones IP o dominios?',
            ],
            [
                'pregunta'  => '¿Se cuenta con una bitácora con la justificación de cada regla configurada en los firewall?',
            ],
            [
                'pregunta'  => '¿Se deshabilitan las reglas de acceso en el Firewall que no sean ocupadas, se verifican y actualizan periódicamente según las necesidades institucionales?',
            ],
            [
                'pregunta'  => '¿Se establece una configuración base y se realiza periódicamente copias de seguridad de las configuraciones de dispositivos de telecomunicaciones?',
            ],
            [
                'pregunta'  => '¿Se mantienen actualizado el firmware, el sistema operativo y el software instalado en los equipos, en su última versión estable, sin afectar la operación, así como aplicar los parches de seguridad recomendados por los fabricantes?',
            ],
            [
                'pregunta'  => '¿Se realiza el monitoreo y análisis en el flujo de tráfico y dispositivos de red, para la detección oportuna de amenazas que puedan explotar vulnerabilidades de los activos de información en la Dependencia?',
            ],
            [
                'pregunta'  => '¿Se encuentra implementado un mecanismo de revisión constante de la reputación del segmento de IP? Y en caso de estar en una lista negra, ¿Se identifican la(s) causa(s) por la(s) que la reputación del segmento decreció, se soluciona el problema y solicita la exclusión de la lista negra?',
            ],
            [
                'pregunta'  => '¿Se utilizan los protocolos seguros HTTPS, SFTP y SSH, en lugar de HTTP, FTP y Telnet? ¿Se prioriza el uso de Let’s Encrypt e implementar Autoridades de Certificación internas de confianza?',
            ],
            [
                'pregunta'  => '¿Se restringe el acceso a invitados a una red sólo con salida a internet, que no tenga acceso a la red interna de la Dependencia, estableciendo el tiempo máximo de autorización de los dispositivos?',
            ],
            [
                'pregunta'  => '¿Si se cuenta con proveedores, el personal interno de la Dependencia tiene acceso a los equipos de telecomunicaciones, además de estos, con usuarios y con privilegios de lectura o monitoreo a los equipos de telecomunicaciones, que están autorizados y documentados?',
            ],
            [
                'pregunta'  => '¿Se cuenta con la creación de imágenes de instalación base con las aplicaciones permitidas al interior de cada Dependencia, de preferencia conformadas por software libre; la configuración de los sistemas operativos y habilitación de los usuarios estrictamente necesarios de acuerdo con el grupo o rol de la persona servidora pública y priorizando el principio de menor privilegio?',
            ],
            [
                'pregunta'  => '¿Se cuenta con procedimientos necesarios para la autorización, el ingreso, registro y la conexión de equipos de cómputo personales a las redes institucionales?',
            ],
            [
                'pregunta'  => '¿Se implementan herramientas de monitoreo de aplicaciones instaladas y actividad no deseada en los equipos de cómputo?',
            ],
            [
                'pregunta'  => '¿Se utilizan medidas necesarias para detectar y evitar la desinstalación o deshabilitación de las herramientas o los servicios de seguridad aplicados en la Dependencia?',
            ],
            [
                'pregunta'  => '¿Se realiza el borrado seguro o destrucción de equipos que contengan información que esté clasificada como reservada o confidencial para la Dependencia y se mantiene evidencia auditable del proceso?',
            ],
            [
                'pregunta'  => '¿Se realiza la instalación y actualización de software antimalware en los equipos de escritorio, portátiles y servidores para evitarla instalación, propagación y ejecución de malware en diversos puntos de la red interna de la Dependencia?',
            ],
            [
                'pregunta'  => '¿Se cierran puertos y deshabilitación servicios que no se utilizan en los servidores, aplicando las configuraciones recomendadas?',
            ],
            [
                'pregunta'  => '¿Se implementa un mecanismo de aplicación de parches de seguridad indicados por los fabricantes de hardware y software?',
            ],
            [
                'pregunta'  => '¿Se habilitan políticas de permisos de grupo para restringir el uso de herramientas de línea de comando(Powershell, Terminal, Shell) a cualquier usuario?',
            ],
            [
                'pregunta'  => '¿Se cuenta con la autorización previa y acceso a las redes de los dispositivos móviles, propiedad de terceros, además de conectarse a una red como invitado sin conectarse a los servicios internos de la dependencia?',
            ],
            [
                'pregunta'  => '¿Se realiza la creación y actualización de un inventario de aplicaciones y sistemas de información en la Dependencia?',
            ],
            [
                'pregunta'  => '¿Se implementa un repositorio del código fuente Institucional,  bajo control y administrado por la Dependencia e independiente a los contratos con fábricas de software?',
            ],
            [
                'pregunta'  => '¿Se cuenta con bitácoras y registros con fines de auditoría y trazabilidad de procesos de desarrollo de software?',
            ],
            [
                'pregunta'  => '¿Se encuentran separados los sistemas esenciales de la red de datos interna y sólo se le permite el acceso o salida directa hacia la Internet, como mínimo, con una protección perimetral de red?',
            ],
            [
                'pregunta'  => '¿Se encuentra la comunicación cifrada para las aplicaciones o servicios que estén expuestos en Internet y que manejen información sensible, como Información confidencial o reservada, datos personales y datos personales sensibles, con el fin de evitar que ésta sea modificada expuesta a personas no autorizadas?',
            ],
            [
                'pregunta'  => '¿Para el desarrollo de sistemas o aplicaciones, se rige bajo los principios de privilegio mínimo y funcionalidad mínima, validando cada operación que realiza el usuario a través de verificación explícita, todas las entradas, incluido el tamaño, el tipo de datos, los rangos o formatos aceptables y los posibles errores?',
            ],
            [
                'pregunta'  => '¿Se encuentran separados los ambientes de desarrollo y pruebas entre ellos y de ambientes productivos, se siguen las medidas de seguridad que se implementan para un ambiente de producción con la finalidad de simular y validar los escenarios que expongan riesgos de seguridad?',
            ],
            [
                'pregunta'  => '¿Se establecen los controles necesarios, así como los criterios y el perfil del usuario que tendrá acceso al código fuente para realizar cambios e implementaciones que requiera el sistema o aplicación, en horarios no hábiles para no afectar la disponibilidad del servicio?',
            ],
            [
                'pregunta'  => '¿Se cuenta con la actualización de las bibliotecas y lenguajes de programación utilizados en el desarrollo de aplicaciones y sistemas para minimizar la exposición a vulnerabilidades, en caso de que dicha actualización afecte la funcionalidad desempeño del sistema y/o aplicativo, se planifica y realiza la adecuación a los mismos?',
            ],
            [
                'pregunta'  => '¿Se realizan pruebas unitarias y de integridad a los sistemas desarrollados?',
            ],
            [
                'pregunta'  => '¿Se realizan pruebas de estrés y carga masiva de datos a los sistemas y aplicaciones desarrollados antes de su implementación en ambientes productivos?',
            ],
            [
                'pregunta'  => '¿Se realiza un análisis de vulnerabilidades a los sistemas o aplicaciones, en particular las identificadas como esenciales para la Dependencia, con el fin de verificar que cumplan con los requisitos mínimos previo a su operación en producción?',
            ],
            [
                'pregunta'  => '¿Se realizan pruebas de respaldo y restauración de los sistemas, aplicaciones y los servicios y de la información u otros activos de información relacionados con estos?',
            ],
            [
                'pregunta'  => '¿Se cuenta con un marco de políticas del remitente (SPF), identificado de llaves de dominio (DKIM) y mensajes basados en el dominio (DMARC) para el servicio de correo electrónico?',
            ],
            [
                'pregunta'  => '¿Se utiliza un mecanismo para realizar pruebas de respaldo y restauración de las bases de datos institucionales, y estas se encuentran cifradas?',
            ],
            [
                'pregunta'  => '¿Se cuenta con la definición de  usuarios, roles y permisos específicos para las diferentes operaciones en las bases de datos?',
            ],
            [
                'pregunta'  => '¿Se cuenta con un inventario de todas las bases de datos institucionales y su interoperabilidad con otros sistemas internos o externos y con otras Instituciones públicas?',
            ],
            [
                'pregunta'  => '¿Se ofusca información de bases de datos que sea utilizada en ambientes de desarrollo?',
            ],
            [
                'pregunta'  => '¿Se utiliza cifrado en reposo y en tránsito, cuando la base de datos contiene datos personales?',
            ],
            [
                'pregunta'  => '¿Se cuenta con bases de datos que contengan información confidencial, y el contenido de las tuplas esta cifrado utilizando llaves cuya posesión sea exclusivamente para personas autorizadas y nunca tengan acceso el administrador del sistema operativo ni el DBA?',
            ],
        ];

        GapUno::insert($gapuno);
    }
}