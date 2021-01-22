<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DeclaracionAplicabilidad;

class declaracion_aplicabilidad_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $gapdo = [
             [
                 'control-uno' => "A5",
                 'control-dos' => "A5.1",
                 'anexo_indice' => "A5.1.1",
                 'anexo_politica' => "Políticas para la seguridad de la información",
                 'anexo_descripcion' => "Se debe definir un conjunto de políticas para la seguridad de la información, aprobada por la dirección, publicada y comunicada a los empleados y a las partes externas pertinentes."
             ],
             [
                 'control-uno' => "A5",
                 'control-dos' => "A5.1",
                 'anexo_indice' => "A5.1.2",
                 'anexo_politica' => "Revisión de las políticas para la seguridad de la información.",
                 'anexo_descripcion' => "Las políticas para la seguridad de la información se deben revisar a intervalos planificados o si ocurren cambios  significativos, para asegurar su conveniencia, adecuación y eficacia continua."
             ],
             [
                 'control-uno' => "A6",
                 'control-dos' => "A6.1",
                 'anexo_indice' => "A6.1.1",
                 'anexo_politica' => "Roles y responsabilidades para la seguridad de la información",
                 'anexo_descripcion' => "Se deben definir y asignar todas las responsabilidades de la seguridad de la información.",
             ],
             [
                 'control-uno' => "A6",
                 'control-dos' => "A6.1",
                 'anexo_indice' => "A6.1.2",
                 'anexo_politica' => "Separación de deberes",
                 'anexo_descripcion' => "Los deberes y áreas de responsabilidad en conflicto se deben separar para reducir las posibilidades de modificación no autorizada o no intencional, o el uso indebido de los activos de la organización"
             ],
             [
                 'control-uno' => "A6",
                 'control-dos' => "A6.1",
                 'anexo_indice' => "A6.1.3",
                 'anexo_politica' => "Contacto con las autoridades",
                 'anexo_descripcion' => "Se deben mantener contactos apropiados con las autoridades pertinentes."
             ],
             [
                 'control-uno' => "A6",
                 'control-dos' => "A6.1",
                 'anexo_indice' => "A6.1.4",
                 'anexo_politica' => "Contacto con grupos de interés especial",
                 'anexo_descripcion' => "Se deben mantener contactos apropiados con grupos de interés especial u otros foros y asociaciones profesionales especializadas en seguridad"
             ],
             [
                 'control-uno' => "A6",
                 'control-dos' => "A6.1",
                 'anexo_indice' => "A6.1.5",
                 'anexo_politica' => "Seguridad de la información en la gestión de proyectos.",
                 'anexo_descripcion' => "La seguridad de la información se debe tratar en la gestión de proyectos, independientemente del tipo de proyecto."
             ],
             [
                 'control-uno' => "A6",
                 'control-dos' => "A6.2",
                 'anexo_indice' => "A6.2.1",
                 'anexo_politica' => "Política para dispositivos móviles",
                 'anexo_descripcion' => "Se debe adoptar una política y unas medidas de seguridad de soporte, para gestionar los riesgos introducidos por el uso de dispositivos móviles."
             ],
             [
                 'control-uno' => "A6",
                 'control-dos' => "A6.2",
                 'anexo_indice' => "A6.2.2",
                 'anexo_politica' => "Teletrabajo",
                 'anexo_descripcion' => "Se deben implementar una política y unas medidas de seguridad de soporte,  para proteger la información a la que se tiene acceso, que es procesada o almacenada en los lugares en los que se realiza teletrabajo."
             ],
             [
                 'control-uno' => "A7",
                 'control-dos' => "A7.1",
                 'anexo_indice' => "A7.1.1",
                 'anexo_politica' => "Selección",
                 'anexo_descripcion' => "Las verificaciones de los antecedentes de todos los candidatos a un empleo se deben llevar a cabo de acuerdo con las leyes, reglamentaciones y ética pertinentes y deben ser proporcionales a los requisitos de negocio, a la clasificación de la información a que se va a tener acceso y a los riesgos percibidos."
             ],
             [
                 'control-uno' => "A7",
                 'control-dos' => "A7.1",
                 'anexo_indice' => "A7.1.2",
                 'anexo_politica' => "Términos y condiciones del empleo",
                 'anexo_descripcion' => "Los acuerdos contractuales con empleados y contratistas deben establecer sus responsabilidades y las de la organización en cuanto a la seguridad de la información."
             ],
             [
                 'control-uno' => "A7",
                 'control-dos' => "A7.2",
                 'anexo_indice' => "A7.2.1",
                 'anexo_politica' => "Responsabilidades de la dirección",
                 'anexo_descripcion' => "La dirección debe exigir a todos los empleados y contratistas la aplicación de la seguridad de la información de acuerdo con las políticas y procedimientos establecidos por la organización."
             ],
             [
                 'control-uno' => "A7",
                 'control-dos' => "A7.2",
                 'anexo_indice' => "A7.2.2",
                 'anexo_politica' => "Toma de conciencia, educación y formación en la seguridad de la información.",
                 'anexo_descripcion' => "Todos los empleados de la organización, y en donde sea pertinente, los contratistas, deben recibir la educación y la formación en toma de conciencia apropiada, y actualizaciones regulares sobre las políticas y procedimientos de la organización pertinentes para su cargo."
             ],
             [
                 'control-uno' => "A7",
                 'control-dos' => "A7.2",
                 'anexo_indice' => "A7.2.3",
                 'anexo_politica' => "Proceso disciplinario",
                 'anexo_descripcion' => "Se debe contar con un proceso formal, el cual debe ser comunicado, para emprender acciones contra empleados que hayan cometido una violación a la seguridad de la información."
             ],
             [
                 'control-uno' => "A7",
                 'control-dos' => "A7.3",
                 'anexo_indice' => "A7.3.1",
                 'anexo_politica' => "Terminación o cambio de responsabilidades de empleo",
                 'anexo_descripcion' => "Las responsabilidades y los deberes de seguridad de la información que permanecen validos después de la terminación o cambio de empleo se deben definir, comunicar al empleado o contratista y se deben hacer cumplir."
             ],
             [
                 'control-uno' => "A8",
                 'control-dos' => "A8.1",
                 'anexo_indice' => "A8.1.1",
                 'anexo_politica' => "Inventario de activos",
                 'anexo_descripcion' => "Se deben identificar los activos asociados con información e instalaciones de procesamiento de información, y se debe elaborar y mantener un inventario de estos activos."
             ],
             [
                 'control-uno' => "A8",
                 'control-dos' => "A8.1",
                 'anexo_indice' => "A8.1.2",
                 'anexo_politica' => "Propiedad de los activos",
                 'anexo_descripcion' => "Los activos mantenidos en el inventario deben tener un propietario."
             ],
             [
                 'control-uno' => "A8",
                 'control-dos' => "A8.1",
                 'anexo_indice' => "A8.1.3",
                 'anexo_politica' => "Uso aceptable de los activos",
                 'anexo_descripcion' => "Se deben identificar, documentar e implementar reglas para el uso aceptable de información y de activos asociados con información e instalaciones de procesamiento de información."
             ],
             [
                 'control-uno' => "A8",
                 'control-dos' => "A8.1",
                 'anexo_indice' => "A8.1.4",
                 'anexo_politica' => "Devolución de activos",
                 'anexo_descripcion' => "Todos los empleados y usuarios de partes externas deben devolver todos los activos de la organización que se encuentren a su cargo, al terminar su empleo, contrato o acuerdo."
             ],
             [
                 'control-uno' => "A8",
                 'control-dos' => "A8.2",
                 'anexo_indice' => "A8.2.1",
                 'anexo_politica' => "Clasificación de la información",
                 'anexo_descripcion' => "La información se debe clasificar en función de los requisitos legales, valor, criticidad y susceptibilidad a divulgación o a modificación no autorizada."
             ],
             [
                 'control-uno' => "A8",
                 'control-dos' => "A8.2",
                 'anexo_indice' => "A8.2.2",
                 'anexo_politica' => "Etiquetado de la información",
                 'anexo_descripcion' => "Se debe desarrollar e implementar un conjunto adecuado de procedimientos para el etiquetado de la información, de acuerdo con el esquema de clasificación de información adoptado por la organización."
             ],
             [
                 'control-uno' => "A8",
                 'control-dos' => "A8.2",
                 'anexo_indice' => "A8.2.3",
                 'anexo_politica' => "Manejo de activos",
                 'anexo_descripcion' => "Se deben desarrollar e implementar procedimientos para el manejo de activos, de acuerdo con el esquema de clasificación de información adoptado por la organización."
             ],
             [
                 'control-uno' => "A8",
                 'control-dos' => "A8.3",
                 'anexo_indice' => "A8.3.1",
                 'anexo_politica' => "Gestión de medios removibles",
                 'anexo_descripcion' => "Se deben implementar procedimientos para la gestión de medios removibles, de acuerdo con el esquema de clasificación adoptado por la organización."
             ],
             [
                 'control-uno' => "A8",
                 'control-dos' => "A8.3",
                 'anexo_indice' => "A8.3.2",
                 'anexo_politica' => "Disposición de los medios",
                 'anexo_descripcion' => "Se debe disponer en forma segura de los medios cuando ya no se requieran, utilizando procedimientos formales."
             ],
             [
                 'control-uno' => "A8",
                 'control-dos' => "A8.3",
                 'anexo_indice' => "A8.3.3",
                 'anexo_politica' => "Transferencia de medios físicos",
                 'anexo_descripcion' => "Los medios que contienen información se deben proteger contra acceso no autorizado, uso indebido o corrupción durante el transporte."
             ],
             [
                 'control-uno' => "A9",
                 'control-dos' => "A9.1",
                 'anexo_indice' => "A9.1.1",
                 'anexo_politica' => "Política de control de acceso",
                 'anexo_descripcion' => "Se debe establecer, documentar y revisar una política de control de acceso con base en los requisitos del negocio y de la seguridad de la información."
             ],
             [
                 'control-uno' => "A9",
                 'control-dos' => "A9.1",
                 'anexo_indice' => "A9.1.2",
                 'anexo_politica' => "Acceso a redes y a servicios en red",
                 'anexo_descripcion' => "Solo se debe permitir acceso de los usuarios a la red y a los servicios de red para los que hayan sido autorizados específicamente."
             ],
             [
                 'control-uno' => "A9",
                 'control-dos' => "A9.2",
                 'anexo_indice' => "A9.2.1",
                 'anexo_politica' => "Registro y cancelación del registro de usuarios",
                 'anexo_descripcion' => "Se debe implementar un proceso formal de registro y de cancelación de registro de usuarios, para posibilitar la asignación de los derechos de acceso."
             ],
             [
                 'control-uno' => "A9",
                 'control-dos' => "A9.2",
                 'anexo_indice' => "A9.2.2",
                 'anexo_politica' => "Suministro de acceso de usuarios",
                 'anexo_descripcion' => "Se debe implementar un proceso de suministro de acceso formal de usuarios para asignar o revocar los derechos de acceso para todo tipo de usuarios para todos los sistemas y servicios."
             ],
             [
                 'control-uno' => "A9",
                 'control-dos' => "A9.2",
                 'anexo_indice' => "A9.2.3",
                 'anexo_politica' => "Gestión de derechos de acceso privilegiado",
                 'anexo_descripcion' => "Se debe restringir y controlar la asignación y uso de derechos de acceso privilegiado"
             ],
             [
                 'control-uno' => "A9",
                 'control-dos' => "A9.2",
                 'anexo_indice' => "A9.2.4",
                 'anexo_politica' => "Gestión de información de autenticación secreta de usuarios",
                 'anexo_descripcion' => "La asignación de información de autenticación secreta se debe controlar por medio de un proceso de gestión formal."
             ],
             [
                 'control-uno' => "A9",
                 'control-dos' => "A9.2",
                 'anexo_indice' => "A9.2.5",
                 'anexo_politica' => "Revisión de los derechos de acceso de usuarios",
                 'anexo_descripcion' => "Los propietarios de los activos deben revisar los derechos  de acceso de los usuarios, a intervalos regulares."
             ],
             [
                 'control-uno' => "A9",
                 'control-dos' => "A9.2",
                 'anexo_indice' => "A9.2.6",
                 'anexo_politica' => "Retiro o ajuste de los derechos de acceso",
                 'anexo_descripcion' => "Los derechos de acceso de todos los empleados y de usuarios externos a la información y a las instalaciones de procesamiento de información se deben retirar al terminar su empleo, contrato o acuerdo, o se deben ajustar cuando se hagan cambios."
             ],
             [
                 'control-uno' => "A9",
                 'control-dos' => "A9.3",
                 'anexo_indice' => "A9.3.1",
                 'anexo_politica' => "Uso de información de autenticación secreta",
                 'anexo_descripcion' => "Se debe exigir a los usuarios que cumplan las prácticas de la organización para el uso de información de autenticación secreta."
             ],
             [
                 'control-uno' => "A9",
                 'control-dos' => "A9.4",
                 'anexo_indice' => "A9.4.1",
                 'anexo_politica' => "Restricción de acceso a la información",
                 'anexo_descripcion' => "El acceso a la información y a las funciones de los sistemas de las aplicaciones se debe restringir  de acuerdo con la política de control de acceso."
             ],
             [
                 'control-uno' => "A9",
                 'control-dos' => "A9.4",
                 'anexo_indice' => "A9.4.2",
                 'anexo_politica' => "Procedimiento de ingreso seguro",
                 'anexo_descripcion' => "Cuando lo requiere la política de control de acceso, el acceso a sistemas y aplicaciones se debe controlar mediante un proceso de ingreso seguro."
             ],
             [
                 'control-uno' => "A9",
                 'control-dos' => "A9.4",
                 'anexo_indice' => "A9.4.3",
                 'anexo_politica' => "Sistema de gestión de contraseñas",
                 'anexo_descripcion' => "Los sistemas de gestión de contraseñas deben ser interactivos y deben asegurar la calidad de las contraseñas."
             ],
             [
                 'control-uno' => "A9",
                 'control-dos' => "A9.4",
                 'anexo_indice' => "A9.4.4",
                 'anexo_politica' => "Uso de programas utilitarios privilegiados",
                 'anexo_descripcion' => "Se debe restringir y controlar estrictamente el usos de programas utilitarios que podrían tener capacidad de anular el sistema y los controles de las aplicaciones."
             ],
             [
                 'control-uno' => "A9",
                 'control-dos' => "A9.4",
                 'anexo_indice' => "A9.4.5",
                 'anexo_politica' => "Control de acceso a códigos fuente de programas",
                 'anexo_descripcion' => "Se debe restringir el acceso a los códigos fuente de los programas."
             ],
             [
                 'control-uno' => "A10",
                 'control-dos' => "A10.1",
                 'anexo_indice' => "A10.1.1",
                 'anexo_politica' => "Política sobre el uso de controles criptográficos",
                 'anexo_descripcion' => "Se debe desarrollar e implementar una política sobre el uso de controles criptográficos para la protección de la información."
             ],
             [
                 'control-uno' => "A10",
                 'control-dos' => "A10.1",
                 'anexo_indice' => "A10.1.2",
                 'anexo_politica' => "Gestión de llaves",
                 'anexo_descripcion' => "Se debe desarrollar e implementar una política sobre el uso, protección y tiempo de vida de las llaves criptográficas, durante todo su ciclo de vida."
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.1",
                 'anexo_indice' => "A11.1.1",
                 'anexo_politica' => "Perímetro de seguridad física",
                 'anexo_descripcion' => "Se deben definir y usar perímetros de seguridad, y usarlos para proteger áreas que contengan información confidencial o critica, e instalaciones de manejo de información."
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.1",
                 'anexo_indice' => "A11.1.2",
                 'anexo_politica' => "Controles de acceso físicos",
                 'anexo_descripcion' => "Las áreas seguras deben estar protegidas con controles de acceso apropiados para asegurar que sólo se permite el acceso a personal autorizado."
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.1",
                 'anexo_indice' => "A11.1.3",
                 'anexo_politica' => "Seguridad de oficinas, recintos e instalaciones",
                 'anexo_descripcion' => "Se debe diseñar y aplicar la seguridad física para oficinas, recintos e instalaciones."
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.1",
                 'anexo_indice' => "A11.1.4",
                 'anexo_politica' => "Protección contra amenazas externas y ambientales.",
                 'anexo_descripcion' => "Se deben diseñar y aplicar protección física contra desastres naturales, ataques maliciosos o accidentes."
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.1",
                 'anexo_indice' => "A11.1.5",
                 'anexo_politica' => "Trabajo en áreas seguras.",
                 'anexo_descripcion' => "Se deben diseñar y aplicar procedimientos para trabajo en áreas seguras."
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.1",
                 'anexo_indice' => "A11.1.6",
                 'anexo_politica' => "Áreas de carga, despacho y acceso público",
                 'anexo_descripcion' => "Se deben controlar los puntos de acceso tales como las áreas de despacho y carga y otros puntos por donde pueden entrar personas no autorizadas y, si es posible, aislarlos de las instalaciones de procesamiento de información para evitar el acceso no autorizado."
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.2",
                 'anexo_indice' => "A11.2.1",
                 'anexo_politica' => "Ubicación y protección de los equipos",
                 'anexo_descripcion' => "Los equipos deben de estar ubicados y protegidos para reducir los riesgos de amenazas y peligros del entorno, y las posibilidades de acceso no autorizado."
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.2",
                 'anexo_indice' => "A11.2.2",
                 'anexo_politica' => "Servicios de suministro",
                 'anexo_descripcion' => "Los equipos se deben proteger contra fallas de energía y otras interrupciones causadas por fallas en los servicios de suministro."
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.2",
                 'anexo_indice' => "A11.2.3",
                 'anexo_politica' => "Seguridad en el cableado.",
                 'anexo_descripcion' => "El cableado de energía eléctrica y de telecomunicaciones que porta datos o brinda soporte a los servicios de información se debe proteger contra interceptación, interferencia o daño."
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.2",
                 'anexo_indice' => "A11.2.4",
                 'anexo_politica' => "Mantenimiento de los equipos.",
                 'anexo_descripcion' => "Los equipos se deben mantener correctamente para asegurar su disponibilidad e integridad y  continuidad."
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.2",
                 'anexo_indice' => "A11.2.5",
                 'anexo_politica' => "Retiro de activos",
                 'anexo_descripcion' => "Los equipos, información o software no se deben retirar de su sitio sin autorización previa"
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.2",
                 'anexo_indice' => "A11.2.6",
                 'anexo_politica' => "Seguridad de equipos y activos fuera de las instalaciones",
                 'anexo_descripcion' => "Se deben aplicar medidas de seguridad a los activos que se encuentran fuera de las instalaciones de la organización, teniendo en cuenta los diferentes riesgos de trabajar fuera de dichas instalaciones."
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.2",
                 'anexo_indice' => "A11.2.7",
                 'anexo_politica' => "Disposición segura o reutilización de equipos",
                 'anexo_descripcion' => "Se deben verificar todos los elementos de equipos que contengan medios de almacenamiento para asegurar que cualquier dato confidencial o software licenciado haya sido retirado o sobreescrito en forma segura antes de su disposición o reúso."
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.2",
                 'anexo_indice' => "A11.2.8",
                 'anexo_politica' => "Equipos de usuario desatendido",
                 'anexo_descripcion' => "Los usuarios deben asegurarse de que a los equipos desatendidos se les da protección apropiada."
             ],
             [
                 'control-uno' => "A11",
                 'control-dos' => "A11.2",
                 'anexo_indice' => "A11.2.9",
                 'anexo_politica' => "Política de escritorio limpio y pantalla limpia",
                 'anexo_descripcion' => "Se debe adoptar una política de escritorio limpio para los papeles y medios de almacenamiento removibles, y una política de pantalla limpia en las instalaciones de procesamiento de información."
             ],
             [
                 'control-uno' => "A12",
                 'control-dos' => "A12.1",
                 'anexo_indice' => "A12.1.1",
                 'anexo_politica' => "Procedimientos de operación documentados",
                 'anexo_descripcion' => "Los procedimientos de operación se deben documentar y poner a disposición de todos los usuarios que los necesitan."
             ],
             [
                 'control-uno' => "A12",
                 'control-dos' => "A12.1",
                 'anexo_indice' => "A12.1.2",
                 'anexo_politica' => "Gestión de cambios",
                 'anexo_descripcion' => "Se deben controlar los cambios en la organización, en los procesos de negocio, en las instalaciones y en los sistemas de procesamiento de información que afectan la seguridad de la información."
             ],
             [
                 'control-uno' => "A12",
                 'control-dos' => "A12.1",
                 'anexo_indice' => "A12.1.3",
                 'anexo_politica' => "Gestión de capacidad",
                 'anexo_descripcion' => "Se debe hacer seguimiento al uso de recursos, hacer los ajustes, y hacer proyecciones de los requisitos de capacidad futura, para asegurar el desempeño requerido del sistema."
             ],
             [
                 'control-uno' => "A12",
                 'control-dos' => "A12.1",
                 'anexo_indice' => "A12.1.4",
                 'anexo_politica' => "Separación de los ambientes de desarrollo, pruebas y operación",
                 'anexo_descripcion' => "Se debe hacer seguimiento al uso de recursos, hacer los ajustes, y hacer proyecciones de los requisitos de capacidad futura, para asegurar el desempeño requerido del sistema."
             ],
             [
                 'control-uno' => "A12",
                 'control-dos' => "A12.2",
                 'anexo_indice' => "A12.2.1",
                 'anexo_politica' => "Controles contra códigos maliciosos",
                 'anexo_descripcion' => "Se deben implementar controles de detección, de prevención y de recuperación, combinados con la toma de conciencia apropiada de los usuarios, para proteger contra códigos maliciosos."
             ],
             [
                 'control-uno' => "A12",
                 'control-dos' => "A12.3",
                 'anexo_indice' => "A12.3.1",
                 'anexo_politica' => "Respaldo de la información",
                 'anexo_descripcion' => "Se deben hacer copias de respaldo de la información, software e imágenes de los sistemas, y ponerlas a prueba regularmente de acuerdo con una política de copias de respaldo acordadas."
             ],
             [
                 'control-uno' => "A12",
                 'control-dos' => "A12.4",
                 'anexo_indice' => "A12.4.1",
                 'anexo_politica' => "Registro de eventos",
                 'anexo_descripcion' => "Se deben elaborar, conservar y revisar regularmente los registros acerca de actividades del usuario, excepciones, fallas y eventos de seguridad de la información."
             ],
             [
                 'control-uno' => "A12",
                 'control-dos' => "A12.4",
                 'anexo_indice' => "A12.4.2",
                 'anexo_politica' => "Protección de la información de registro",
                 'anexo_descripcion' => "Las instalaciones y la información de registro se deben proteger contra alteración y acceso no autorizado."
             ],
             [
                 'control-uno' => "A12",
                 'control-dos' => "A12.4",
                 'anexo_indice' => "A12.4.3",
                 'anexo_politica' => "Registros del administrador y del operador",
                 'anexo_descripcion' => "Las actividades del administrador y del operador del sistema se deben registrar, y los registros se deben proteger y revisar con regularidad."
             ],
             [
                 'control-uno' => "A12",
                 'control-dos' => "A12.4",
                 'anexo_indice' => "A12.4.4",
                 'anexo_politica' => "Sincronización de relojes",
                 'anexo_descripcion' => "Los relojes de todos los sistemas de procesamiento de información pertinentes dentro de una organización o ámbito de seguridad se deben sincronizar con una única fuente de referencia de tiempo."
             ],
             [
                 'control-uno' => "A12",
                 'control-dos' => "A12.5",
                 'anexo_indice' => "A12.5.1",
                 'anexo_politica' => "Instalación de software en sistemas operativos",
                 'anexo_descripcion' => "Se deben implementar procedimientos para controlar la instalación de software en sistemas operativos."
             ],
             [
                 'control-uno' => "A12",
                 'control-dos' => "A12.6",
                 'anexo_indice' => "A12.6.1",
                 'anexo_politica' => "Gestión de las vulnerabilidades técnicas",
                 'anexo_descripcion' => "Se debe obtener oportunamente información acerca de las vulnerabilidades técnicas de los sistemas de información que se usen; evaluar la exposición de la organización a estas vulnerabilidades, y tomar las medidas apropiadas para tratar el riesgo asociado."
             ],
             [
                 'control-uno' => "A12",
                 'control-dos' => "A12.6",
                 'anexo_indice' => "A12.6.2",
                 'anexo_politica' => "Restricciones sobre la instalación de software",
                 'anexo_descripcion' => "Se deben establecer e implementar las reglas para la instalación de software por parte de los usuarios."
             ],
             [
                 'control-uno' => "A12",
                 'control-dos' => "A12.7",
                 'anexo_indice' => "A12.7.1",
                 'anexo_politica' => "Controles de auditorías de sistemas de información",
                 'anexo_descripcion' => "Los requisitos y actividades de auditoria que involucran la verificación de los sistemas operativos se deben planificar y acordar cuidadosamente para minimizar las interrupciones en los procesos del negocio."
             ],
             [
                 'control-uno' => "A13",
                 'control-dos' => "A13.1",
                 'anexo_indice' => "A13.1.1",
                 'anexo_politica' => "Controles de redes",
                 'anexo_descripcion' => "Las  redes  se deben   gestionar   y controlar para  proteger la  información   en sistemas y aplicaciones."
             ],
             [
                 'control-uno' => "A13",
                 'control-dos' => "A13.1",
                 'anexo_indice' => "A13.1.2",
                 'anexo_politica' => "Seguridad  de los servicios de red",
                 'anexo_descripcion' => "Seguridad  de los servicios"
             ],
             [
                 'control-uno' => "A13",
                 'control-dos' => "A13.1",
                 'anexo_indice' => "A13.1.3",
                 'anexo_politica' => "Seguridad  de los servicios de red",
                 'anexo_descripcion' => "Los grupos de servicios   de información,   usuarios y sistemas   de información se deben separar en las  redes."
             ],
             [
                 'control-uno' => "A13",
                 'control-dos' => "A13.2",
                 'anexo_indice' => "A13.2.1",
                 'anexo_politica' => "Políticas y procedimientos de transferencia de información",
                 'anexo_descripcion' => "Se debe  contar con   políticas,    procedimientos      y controles de transferencia información formales para  proteger la  transferencia   de información"
             ],
             [
                 'control-uno' => "A13",
                 'control-dos' => "A13.2",
                 'anexo_indice' => "A13.2.2",
                 'anexo_politica' => "Acuerdos sobre transferencia de información",
                 'anexo_descripcion' => "Los   acuerdos  deben   tratar  la   transferencia   segura  de  información    del negocio entre la  organización y las partes externas. "
             ],
             [
                 'control-uno' => "A13",
                 'control-dos' => "A13.2",
                 'anexo_indice' => "A13.2.3",
                 'anexo_politica' => "Mensajería Electronica",
                 'anexo_descripcion' => "Se debe  proteger adecuadamente la información incluida en la  mensajería electrónica."
             ],
             [
                 'control-uno' => "A13",
                 'control-dos' => "A13.2",
                 'anexo_indice' => "A13.2.4",
                 'anexo_politica' => "Acuerdos de confidencialidad o de no divulgación",
                 'anexo_descripcion' => "Control: Se  deben identificar,   revisar regularmente   y documentar los  requisitos  para  los  acuerdos   de   confidencialidad     o   no  divulgación    que   reflejen   las necesidades  de la  organización  para la  protección  de la  información."
             ],
             [
                 'control-uno' => "A14",
                 'control-dos' => "A14.1",
                 'anexo_indice' => "A14.1.1",
                 'anexo_politica' => "Los  requisitos relacionados con  seguridad   de la  información  se  deben incluir  en  los requisitos    para  nuevos   sistemas   de   información  o para mejoras   a los  sistemas  de información   existentes.",
                 'anexo_descripcion' => "Los  requisitos relacionados con  seguridad   de la  información  se  deben incluir  en  los requisitos    para  nuevos   sistemas   de   información  o para mejoras   a los  sistemas  de información   existentes."
             ],
             [
                 'control-uno' => "A14",
                 'control-dos' => "A14.1",
                 'anexo_indice' => "A14.1.2",
                 'anexo_politica' => "La informacion involucrada en   los  servicios    de  las aplicaciones  que pasan sobre redes   públicas     se   debe   proteger      de   actividades fraudulentas, disputas  contractuales    y  divulgación y  modificación no  autorizadas.",
                 'anexo_descripcion' => "La informacion involucrada en   los  servicios    de  las aplicaciones  que pasan sobre redes   públicas     se   debe   proteger      de   actividades fraudulentas, disputas  contractuales    y  divulgación y  modificación no  autorizadas."
             ],
             [
                 'control-uno' => "A14",
                 'control-dos' => "A14.1",
                 'anexo_indice' => "A14.1.3",
                 'anexo_politica' => "La información involucrada en las transacciones  de los servicios de las aplicaciones se deben proteger para evitar la transmisión incompleta, el enrutamiento errado, la alteración no autorizada de mensajes, la divulgación no autorizada, y la duplicación o reproducción de mensajes no autorizada.",
                 'anexo_descripcion' => "La información involucrada en las transacciones  de los servicios de las aplicaciones se deben proteger para evitar la transmisión incompleta, el enrutamiento errado, la alteración no autorizada de mensajes, la divulgación no autorizada, y la duplicación o reproducción de mensajes no autorizada."
             ],
             [
                 'control-uno' => "A14",
                 'control-dos' => "A14.2",
                 'anexo_indice' => "A14.2.1",
                 'anexo_politica' => "Se debe establecer y aplicar reglas para el desarrollo de software y de sistemas, a los desarrollos dentro de la organización.",
                 'anexo_descripcion' => "Se debe establecer y aplicar reglas para el desarrollo de software y de sistemas, a los desarrollos dentro de la organización."
             ],
             [
                 'control-uno' => "A14",
                 'control-dos' => "A14.2",
                 'anexo_indice' => "A14.2.2",
                 'anexo_politica' => "Los cambios a los sistemas dentro del ciclo de vida de desarrollo se deben controlar mediante el uso de procedimientos formales de control de cambios.",
                 'anexo_descripcion' => "Los cambios a los sistemas dentro del ciclo de vida de desarrollo se deben controlar mediante el uso de procedimientos formales de control de cambios."
             ],
             [
                 'control-uno' => "A14",
                 'control-dos' => "A14.2",
                 'anexo_indice' => "A14.2.3",
                 'anexo_politica' => "Revisión técnica de las aplicaciones después de cambios en la plataforma de operación",
                 'anexo_descripcion' => "Cuando se cambian las plataformas de operación, se deben revisar las aplicaciones críticas del negocio,  y someter a prueba para asegurar que no haya impacto adverso en las operaciones o seguridad de la organización."
             ],
             [
                 'control-uno' => "A14",
                 'control-dos' => "A14.2",
                 'anexo_indice' => "A14.2.4",
                 'anexo_politica' => "Restricciones en los cambios a los paquetes de software",
                 'anexo_descripcion' => "Se deben desalentar las modificaciones a los paquetes de software, los cuales se deben limitar a los cambios necesarios, y todos los cambios se deben controlar estrictamente."
             ],
             [
                 'control-uno' => "A14",
                 'control-dos' => "A14.2",
                 'anexo_indice' => "A14.2.5",
                 'anexo_politica' => "Principio de Construcción de los Sistemas Seguros.",
                 'anexo_descripcion' => "Se    deben   establecer,      documentar   y   mantener   principios    para   la construcción   de  sistemas seguros,   y aplicarlos   a cualquier  actividad  de implementación    de sistemas de información."
             ],
             [
                 'control-uno' => "A14",
                 'control-dos' => "A14.2",
                 'anexo_indice' => "A14.2.6",
                 'anexo_politica' => "Ambiente de desarrollo seguro",
                 'anexo_descripcion' => "Las organizaciones    deben establecer  y proteger adecuadamente los ambientes   de desarrollo    seguros para las actividades    de desarrollo e integración    de  sistemas  que  comprendan  todo  el   ciclo   de  vida   de desarrollo  de sistemas."
             ],
             [
                 'control-uno' => "A14",
                 'control-dos' => "A14.2",
                 'anexo_indice' => "A14.2.7",
                 'anexo_politica' => "Desarrollo contratado externamente",
                 'anexo_descripcion' => "La organización   debe supervisar  y hacer seguimiento de la  actividad de desarrollo  de sistemas   contratados     externamente."
             ],
             [
                 'control-uno' => "A14",
                 'control-dos' => "A14.2",
                 'anexo_indice' => "A14.2.8",
                 'anexo_politica' => "Pruebas de seguridad de sistemas",
                 'anexo_descripcion' => "Durante el desarrollo se deben  llevar  a cabo pruebas de funcionalidad    de la  seguridad."
             ],
             [
                 'control-uno' => "A14",
                 'control-dos' => "A14.2",
                 'anexo_indice' => "A14.2.9",
                 'anexo_politica' => "Prueba de aceptación de sistemas",
                 'anexo_descripcion' => "Para  los  sistemas    de  información   nuevos,    actualizaciones   y  nuevas versiones,   se deben establecer programas de prueba   para aceptación    y criterios   de  aceptación   relacionados."
             ],
             [
                 'control-uno' => "A14",
                 'control-dos' => "A14.3",
                 'anexo_indice' => "A14.3.1",
                 'anexo_politica' => "Protección de datos de prueba",
                 'anexo_descripcion' => "Control:Los   datos   de   prueba   se   deben    seleccionar,    proteger    y   controlar cuidadosamente."
             ],
             [
                 'control-uno' => "A15",
                 'control-dos' => "A15.1",
                 'anexo_indice' => "A15.1.1",
                 'anexo_politica' => "Política de seguridad de la información para las relaciones con proveedores",
                 'anexo_descripcion' => "Los requisitos de seguridad de la información para mitigar los riesgos asociados con el acceso de proveedores a los activos de la organización se deben acordar con estos y se deben documentar."
             ],
             [
                 'control-uno' => "A15",
                 'control-dos' => "A15.1",
                 'anexo_indice' => "A15.1.2",
                 'anexo_politica' => "Tratamiento de la seguridad dentro de los acuerdos con proveedores",
                 'anexo_descripcion' => "Se deben establecer y acordar todos los requisitos de seguridad de la información pertinentes con cada proveedor que pueda tener acceso, procesar, almacenar, comunicar o suministrar componentes de infraestructura de TI para la información de la organización."
             ],
             [
                 'control-uno' => "A15",
                 'control-dos' => "A15.1",
                 'anexo_indice' => "A15.1.3",
                 'anexo_politica' => "Cadena de suministro de tecnología de información y comunicación",
                 'anexo_descripcion' => "Los acuerdos con proveedores deben incluir requisitos para tratar los riesgos de seguridad de la información asociados con la cadena de suministro de productos y servicios de tecnología de información y comunicación."
             ],
             [
                 'control-uno' => "A15",
                 'control-dos' => "A15.2",
                 'anexo_indice' => "A15.2.1",
                 'anexo_politica' => "Seguimiento y revisión de los servicios de los proveedores",
                 'anexo_descripcion' => "Las organizaciones deben hacer seguimiento, revisar y auditar con regularidad la prestación de servicios de los proveedores."
             ],
             [
                 'control-uno' => "A15",
                 'control-dos' => "A15.2",
                 'anexo_indice' => "A15.2.2",
                 'anexo_politica' => "Gestión del cambio en los servicios de los proveedores",
                 'anexo_descripcion' => "Se deben gestionar los cambios en el suministro de servicios por parte de los proveedores, incluido el mantenimiento y las mejoras de las políticas, procedimientos y controles de seguridad de la información existentes, teniendo en cuenta la criticidad de la información, sistemas y procesos de negocio involucrados, y la revaluación de los riesgos."
             ],
             [
                 'control-uno' => "A16",
                 'control-dos' => "A16.1",
                 'anexo_indice' => "A16.1.1",
                 'anexo_politica' => "Responsabilidades y procedimientos",
                 'anexo_descripcion' => "Se deben establecer las responsabilidades y procedimientos de gestión para asegurar una respuesta rápida, eficaz y ordenada a los incidentes de seguridad de la información."
             ],
             [
                 'control-uno' => "A16",
                 'control-dos' => "A16.1",
                 'anexo_indice' => "A16.1.2",
                 'anexo_politica' => "Reporte de eventos de seguridad de la información",
                 'anexo_descripcion' => "Los eventos de seguridad de la información se deben informar a través de los canales de gestión apropiados, tan pronto como sea posible."
             ],
             [
                 'control-uno' => "A16",
                 'control-dos' => "A16.1",
                 'anexo_indice' => "A16.1.3",
                 'anexo_politica' => "Reporte de debilidades de seguridad de la información",
                 'anexo_descripcion' => "Se debe exigir a todos los empleados y contratistas que usan los servicios y sistemas de información de la organización, que observen y reporten cualquier debilidad de seguridad de la información observada o sospechada en los sistemas o servicios."
             ],
             [
                 'control-uno' => "A16",
                 'control-dos' => "A16.1",
                 'anexo_indice' => "A16.1.4",
                 'anexo_politica' => "Evaluación de eventos de seguridad de la información y decisiones sobre ellos",
                 'anexo_descripcion' => "Los eventos de seguridad de la información se deben evaluar y se debe decidir si se van a clasificar como incidentes de seguridad de la información."
             ],
             [
                 'control-uno' => "A16",
                 'control-dos' => "A16.1",
                 'anexo_indice' => "A16.1.5",
                 'anexo_politica' => "Respuesta a incidentes de seguridad de la información",
                 'anexo_descripcion' => "Se debe dar respuesta a los incidentes  de seguridad de la información de acuerdo con procedimientos documentados."
             ],
             [
                 'control-uno' => "A16",
                 'control-dos' => "A16.1",
                 'anexo_indice' => "A16.1.6",
                 'anexo_politica' => "Aprendizaje obtenido de los incidentes de seguridad de la información",
                 'anexo_descripcion' => "El conocimiento adquirido al analizar y resolver incidentes de seguridad de la información se debe usar para reducir la posibilidad o impacto de incidentes futuros."
             ],
             [
                 'control-uno' => "A16",
                 'control-dos' => "A16.1",
                 'anexo_indice' => "A16.1.7",
                 'anexo_politica' => "Recolección de evidencia",
                 'anexo_descripcion' => "La organización debe definir y aplicar procedimientos para la identificación, recolección, adquisición y preservación de información que pueda servir como evidencia."
             ],
             [
                 'control-uno' => "A17",
                 'control-dos' => "A17.1",
                 'anexo_indice' => "A17.1.1",
                 'anexo_politica' => "Planificación de la continuidad de la seguridad de la información",
                 'anexo_descripcion' => "La organización debe determinar sus requisitos para la seguridad de la información y la continuidad de la gestión de la seguridad de la información en situaciones adversas, por ejemplo, durante una crisis o desastre."
             ],
             [
                 'control-uno' => "A17",
                 'control-dos' => "A17.1",
                 'anexo_indice' => "A17.1.2",
                 'anexo_politica' => "Implementación de la continuidad de la seguridad de la información ",
                 'anexo_descripcion' => "La organización debe establecer, documentar, implementar y mantener procesos, procedimientos y controles para asegurar el nivel de continuidad requerido para la seguridad de la información durante una situación adversa."
             ],
             [
                 'control-uno' => "A17",
                 'control-dos' => "A17.1",
                 'anexo_indice' => "A17.1.3",
                 'anexo_politica' => "Verificación, revisión y evaluación de la continuidad de la seguridad de la información",
                 'anexo_descripcion' => "La organización debe verificar a intervalos regulares los controles de continuidad de la seguridad de la información establecidos e implementados, con el fin de asegurar que son válidos y eficaces durante situaciones adversas."
             ],
             [
                 'control-uno' => "A17",
                 'control-dos' => "A17.2",
                 'anexo_indice' => "A17.2.1",
                 'anexo_politica' => "Disponibilidad de instalaciones de procesamiento de información",
                 'anexo_descripcion' => "Las instalaciones de procesamientos de información se deben implementar con redundancia suficiente para cumplir los requisitos de disponibilidad."
             ],
             [
                 'control-uno' => "A18",
                 'control-dos' => "A18.1",
                 'anexo_indice' => "A18.1.1",
                 'anexo_politica' => "Identificación de la legislación aplicable.",
                 'anexo_descripcion' => "Todos los requisitos estatutarios, reglamentarios y contractuales pertinentes y el enfoque de la organización para cumplirlos, se deben identificar y documentar explícitamente y mantenerlos actualizados para cada sistema de información y para la organización."
             ],
             [
                 'control-uno' => "A18",
                 'control-dos' => "A18.1",
                 'anexo_indice' => "A18.1.2",
                 'anexo_politica' => "Derechos propiedad intelectual (DPI)",
                 'anexo_descripcion' => "Se deben implementar procedimientos apropiados para asegurar el cumplimiento de los requisitos legislativos, de reglamentación y contractuales relacionados con los derechos de propiedad intelectual y el uso de productos de software patentados."
             ],
             [
                 'control-uno' => "A18",
                 'control-dos' => "A18.1",
                 'anexo_indice' => "A18.1.3",
                 'anexo_politica' => "Protección de registros",
                 'anexo_descripcion' => "Los registros se deben proteger contra perdida, destrucción, falsificación, acceso no autorizado y liberación no autorizada, de acuerdo con los requisitos legislativos, de reglamentación, contractuales y de negocio."
             ],
             [
                 'control-uno' => "A18",
                 'control-dos' => "A18.1",
                 'anexo_indice' => "A18.1.4",
                 'anexo_politica' => "Privacidad y protección de información de datos personales",
                 'anexo_descripcion' => "Se deben asegurar la privacidad y la protección de la información de datos personales, como se exige e la legislación y la reglamentación pertinentes, cuando sea aplicable."
             ],
             [
                 'control-uno' => "A18",
                 'control-dos' => "A18.1",
                 'anexo_indice' => "A18.1.5",
                 'anexo_politica' => "Reglamentación de controles criptográficos.",
                 'anexo_descripcion' => "Se deben usar controles criptográficos, en cumplimiento de todos los acuerdos, legislación y reglamentación pertinentes."
             ],
             [
                 'control-uno' => "A18",
                 'control-dos' => "A18.2",
                 'anexo_indice' => "A18.2.1",
                 'anexo_politica' => "Revisión independiente de la seguridad de la información ",
                 'anexo_descripcion' => "El enfoque de la organización para la gestión de la seguridad de la información y su implementación (es decir los objetivos de control, los controles, las políticas, los procesos y los procedimientos para seguridad de la información), se deben revisar independientemente a intervalos planificados o cuando ocurran cambios significativos."
             ],
             [
                 'control-uno' => "A18",
                 'control-dos' => "A18.2",
                 'anexo_indice' => "A18.2.2",
                 'anexo_politica' => "Cumplimiento con las políticas y normas de seguridad",
                 'anexo_descripcion' => "Los directores deben revisar con regularidad el cumplimiento del procesamiento y procedimientos de información dentro de su área de responsabilidad, con las políticas y normas de seguridad apropiadas, y cualquier otro requisito de seguridad."
             ],
             [
                 'control-uno' => "A18",
                 'control-dos' => "A18.2",
                 'anexo_indice' => "A18.2.3",
                 'anexo_politica' => "Revisión del cumplimiento técnico",
                 'anexo_descripcion' => "Los sistemas de información se deben revisar periódicamente para determinar el cumplimiento con las políticas y normas de seguridad de la información."
             ],
         ];

         DeclaracionAplicabilidad::insert($gapdo);

 }
}
