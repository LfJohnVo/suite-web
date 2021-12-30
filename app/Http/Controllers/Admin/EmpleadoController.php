<?php

namespace App\Models;

use App\Functions\CountriesFunction;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\CertificacionesEmpleados;
use App\Models\CursosDiplomasEmpleados;
use App\Models\EducacionEmpleados;
use App\Models\Empleado;
use App\Models\EvidenciasCertificadosEmpleados;
use App\Models\EvidenciasDocumentosEmpleados;
use App\Models\ExperienciaEmpleados;
use App\Models\PerfilEmpleado;
use App\Models\Puesto;
use App\Models\RH\BeneficiariosEmpleado;
use App\Models\RH\ContactosEmergenciaEmpleado;
use App\Models\RH\DependientesEconomicosEmpleados;
use App\Models\RH\EntidadCrediticia;
use App\Models\RH\TipoContratoEmpleado;
use App\Models\Sede;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class Empleado.
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $n_registro
 * @property string|null $foto
 * @property string|null $puesto
 * @property Carbon|null $antiguedad
 * @property string|null $estatus
 * @property string|null $email
 * @property string|null $telefono
 * @property string|null $genero
 * @property string|null $n_empleado
 * @property int|null $supervisor_id
 * @property int|null $area_id
 * @property int|null $sede_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Area|null $area
 * @property Sede|null $sede
 * @property Empleado|null $empleado
 * @property Collection|AnalisisDeRiesgo[] $analisis_de_riesgos
 * @property Collection|Documento[] $documentos
 * @property Collection|Recurso[] $recursos
 * @property Collection|Empleado[] $empleados
 * @property Collection|EntendimientoOrganizacion[] $entendimiento_organizacions
 * @property Collection|HistorialVersionesDocumento[] $historial_versiones_documentos
 * @property Collection|IndicadoresSgsi[] $indicadores_sgsis
 * @property Collection|MatrizRiesgo[] $matriz_riesgos
 * @property Collection|RevisionDocumento[] $revision_documentos
 * @property Collection|User[] $users
 */
class Empleado extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'empleados';

    protected $casts = [
        'supervisor_id' => 'int',
        'area_id' => 'int',
        'sede_id' => 'int',
    ];

    public static $searchable = [
        'name',
    ];

    protected $dates = [
        'antiguedad',
    ];

    //public $preventsLazyLoading = true;
    //protected $with = ['children:id,name,foto,puesto as title,area,supervisor_id']; //Se desborda la memoria al entrar en un bucle infinito se opto por utilizar eager loading
    protected $appends = ['avatar', 'resourceId', 'empleados_misma_area', 'genero_formateado', 'puesto','declaraciones_responsable','declaraciones_aprobador'];
    //, 'jefe_inmediato', 'empleados_misma_area'
    protected $fillable = [
        'name',
        'n_registro',
        'foto',
        'puesto',
        'antiguedad',
        'estatus',
        'email',
        'telefono',
        'extension',
        'telefono_movil',
        'genero',
        'n_empleado',
        'supervisor_id',
        'area_id',
        'sede_id',
        'direccion',
        'cumpleaños',
        'resumen',
        'puesto_id',
        'perfil_empleado_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getResourceIdAttribute()
    {
        return $this->id;
    }

    public function getPuestoAttribute()
    {
        return $this->puestoRelacionado ? $this->puestoRelacionado->puesto : 'Sin puesto';
    }

    public function getGeneroFormateadoAttribute()
    {
        if ($this->genero == 'H') {
            return 'Masculino';
        } elseif ($this->genero == 'M') {
            return 'Femenino';
        } else {
            return 'Otro Género';
        }
    }

    public function getAvatarAttribute()
    {
        $certificaciones = CertificacionesEmpleados::where('empleado_id', intval($empleado))->orderBy('id')->get();

        return $this->foto;
    }

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }

    public function sede()
    {
        return $this->belongsTo(Sede::class, 'sede_id', 'id');
    }

    public function empleado()
    {
        return $this->belongsTo(self::class, 'supervisor_id');
    }

    public function analisis_de_riesgos()
    {
        abort_if(Gate::denies('configuracion_empleados_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $empleados = Empleado::get();
        $ceo_exists = Empleado::select('supervisor_id')->whereNull('supervisor_id')->exists();
        $areas = Area::get();
        $sedes = Sede::get();
        $experiencias = ExperienciaEmpleados::get();
        $educacions = EducacionEmpleados::get();
        $cursos = CursosDiplomasEmpleados::get();
        $documentos = EvidenciasDocumentosEmpleados::get();
        $certificaciones = CertificacionesEmpleados::get();
        $puestos = Puesto::get();
        $perfiles = PerfilEmpleado::get();
        $perfiles_seleccionado = null;
        $puestos_seleccionado = null;
        $puestos = Puesto::all();
        $perfiles = PerfilEmpleado::all();
        $tipoContratoEmpleado = TipoContratoEmpleado::select('id', 'name', 'slug', 'description')->get();
        $entidadesCrediticias = EntidadCrediticia::select('id', 'entidad')->get();
        $empleado = new Empleado;

        $globalCountries = new CountriesFunction;
        $countries = $globalCountries->getCountries('ES');

        return view('admin.empleados.create', compact('empleados', 'ceo_exists', 'areas', 'sedes', 'experiencias', 'educacions', 'cursos', 'documentos', 'certificaciones', 'puestos', 'perfiles', 'tipoContratoEmpleado', 'entidadesCrediticias', 'empleado', 'countries', 'perfiles', 'perfiles_seleccionado', 'puestos_seleccionado'));
    }

    /*public function documentos()
    {
        $experiencias = json_decode($request->experiencia);
        $educacions = json_decode($request->educacion);
        $cursos = json_decode($request->curso);
        $certificados = json_decode($request->certificado);
        // dd($cursos);

        $ceo_exists = Empleado::select('supervisor_id')->whereNull('supervisor_id')->exists();
        $validateSupervisor = 'nullable|exists:empleados,id';
        if ($ceo_exists) {
            $validateSupervisor = 'required|exists:empleados,id';
        }

        $request->validate([
            'name' => 'required|string',
            'n_empleado' => 'required|unique:empleados',
            'area_id' => 'required|exists:areas,id',
            'supervisor_id' => $validateSupervisor,
            'puesto_id' => 'required|exists:puestos,id',
            'antiguedad' => 'required',
            'estatus' => 'required',
            'email' => 'required|email',
            // 'sede_id' => 'required|exists:sedes,id',
            'perfil_empleado_id' => 'required|exists:perfil_empleados,id',

        ], [
            'n_empleado.unique' => 'El número de empleado ya ha sido tomado',
        ]);
        $sede = Sede::select('id', 'direccion')->find($request->sede_id);
        if ($sede) {
            $request->query->set('direccion', $sede->direccion);
        }

        $this->validateDynamicForms($request);
        $empleado = $this->createEmpleado($request);
        $image = null;
        if ($request->snap_foto && $request->file('foto')) {
            if ($request->snap_foto) {
                if (preg_match('/^data:image\/(\w+);base64,/', $request->snap_foto)) {
                    $value = substr($request->snap_foto, strpos($request->snap_foto, ',') + 1);
                    $value = base64_decode($value);

                    $new_name_image = 'UID_' . $empleado->id . '_' . $empleado->name . '.png';
                    $image = $new_name_image;
                    $route = storage_path() . '/app/public/empleados/imagenes/' . $new_name_image;
                    $img_intervention = Image::make($request->snap_foto);
                    $img_intervention->resize(480, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($route);
                }
            }
        } elseif ($request->snap_foto && !$request->file('foto')) {
            if ($request->snap_foto) {
                if (preg_match('/^data:image\/(\w+);base64,/', $request->snap_foto)) {
                    $value = substr($request->snap_foto, strpos($request->snap_foto, ',') + 1);
                    $value = base64_decode($value);

                    $new_name_image = 'UID_' . $empleado->id . '_' . $empleado->name . '.png';
                    $image = $new_name_image;
                    $route = storage_path() . '/app/public/empleados/imagenes/' . $new_name_image;
                    $img_intervention = Image::make($request->snap_foto);
                    $img_intervention->resize(480, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($route);
                }
            }
        } else {
            if ($request->file('foto') != null or !empty($request->file('foto'))) {
                $extension = pathinfo($request->file('foto')->getClientOriginalName(), PATHINFO_EXTENSION);
                $name_image = basename(pathinfo($request->file('foto')->getClientOriginalName(), PATHINFO_BASENAME), '.' . $extension);
                $new_name_image = 'UID_' . $empleado->id . '_' . $empleado->name . '.' . $extension;
                $route = storage_path() . '/app/public/empleados/imagenes/' . $new_name_image;
                $image = $new_name_image;
                //Usamos image_intervention para disminuir el peso de la imagen
                $img_intervention = Image::make($request->file('foto'));
                $img_intervention->resize(480, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($route);
            }
        }

        $empleado->update([
            'foto' => $image,
        ]);

        return $empleado;
    }

    public function containsOnlyNull($collection)
    {
        $onlyNull = true;
        foreach ($collection as $collect) {
            foreach ($collect as $item) {
                // if (!is_null($item) && (array_key_exists('id', $collect) && $collect['id'] != '0')) {
                if (!is_null($item)) {
                    $onlyNull = false;

                    return $onlyNull;
                }
            }
        }

        return $onlyNull;
    }

    public function validateDynamicForms($request)
    {
        if (isset($request->dependientes)) {
            if (!$this->containsOnlyNull($request->dependientes)) {
                if (count($request->dependientes)) {
                    $request->validate([
                        'dependientes.*.nombre' => 'required|string',
                        'dependientes.*.parentesco' => 'required|string',
                    ]);
                }
            }
        }

        if (isset($request->contactos_emergencia)) {
            if (!$this->containsOnlyNull($request->contactos_emergencia)) {
                if (count($request->contactos_emergencia)) {
                    $request->validate([
                        'contactos_emergencia.*.nombre' => 'required|string|max:255',
                        'contactos_emergencia.*.telefono' => 'required|string|max:255',
                        'contactos_emergencia.*.parentesco' => 'required|string|max:255',
                    ]);
                }
            }
        }

        if (isset($request->beneficiarios)) {
            if (!$this->containsOnlyNull($request->beneficiarios)) {
                if (count($request->beneficiarios)) {
                    $request->validate([
                        'beneficiarios.*.nombre' => 'required|string',
                        'beneficiarios.*.parentesco' => 'required|string',
                        'beneficiarios.*.porcentaje' => 'required|numeric',
                    ]);
                }
            }
        }
    }

    public function createEmpleado($request)
    {
        $empleado = Empleado::create([
            'name' => $request->name,
            'area_id' =>  $request->area_id,
            'puesto_id' =>  $request->puesto_id,
            'perfil_empleado_id' => $request->perfil_empleado_id,
            'supervisor_id' =>  $request->supervisor_id,
            'antiguedad' =>  $request->antiguedad,
            'estatus' =>  $request->estatus,
            'email' =>  $request->email,
            'telefono' =>  $request->telefono,
            'genero' =>  $request->genero,
            'n_empleado' =>  $request->n_empleado,
            'n_registro' =>  $request->n_registro,
            'sede_id' =>  $request->sede_id,
            'resumen' =>  $request->resumen,
            'cumpleaños' => $request->cumpleaños,
            'direccion' => $request->direccion,
            'telefono_movil' => $request->telefono_movil,
            'extension' => $request->extension,
            'direccion' => $request->direccion,
            'tipo_contrato_empleados_id' => $request->tipo_contrato_empleados_id,
            'terminacion_contrato' => $request->terminacion_contrato,
            'renovacion_contrato' => $request->renovacion_contrato,
            'esquema_contratacion' => $request->esquema_contratacion,
            'proyecto_asignado' => $request->proyecto_asignado,
            'domicilio_personal' => $request->domicilio_personal,
            'telefono_casa' => $request->telefono_casa,
            'correo_personal' => $request->correo_personal,
            'estado_civil' => $request->estado_civil,
            'NSS' => $request->NSS,
            'CURP' => $request->CURP,
            'RFC' => $request->RFC,
            'lugar_nacimiento' => $request->lugar_nacimiento,
            'nacionalidad' => $request->nacionalidad,
            'entidad_crediticias_id' => $request->entidad_crediticias_id,
            'numero_credito' => $request->numero_credito,
            'descuento' => $request->descuento,
            'banco' => $request->banco,
            'cuenta_bancaria' => $request->cuenta_bancaria,
            'clabe_interbancaria' => $request->clabe_interbancaria,
            'centro_costos' => $request->centro_costos,
            'salario_bruto' => $request->salario_bruto ? preg_replace('/([^0-9\.])/i', '', $request->salario_bruto) : null,
            'salario_diario' => $request->salario_diario ? preg_replace('/([^0-9\.])/i', '', $request->salario_diario) : null,
            'salario_diario_integrado' => $request->salario_diario_integrado ? preg_replace('/([^0-9\.])/i', '', $request->salario_diario_integrado) : null,
            'salario_base_mensual' => $request->salario_base_mensual ? preg_replace('/([^0-9\.])/i', '', $request->salario_base_mensual) : null,
            'pagadora_actual' => $request->pagadora_actual,
            'periodicidad_nomina' => $request->periodicidad_nomina,
        ]);

        $this->assignDependenciesModel($request, $empleado);

        return $empleado;
    }

    public function assignDependenciesModel($request, $empleado)
    {
        if (isset($request->dependientes)) {
            if (!$this->containsOnlyNull($request->dependientes)) {
                if (count($request->dependientes)) {
                    foreach ($request->dependientes as $dependiente) {
                        $dependienteModel = DependientesEconomicosEmpleados::where('id', $dependiente['id']);
                        $dependienteAlreadyExists = $dependienteModel->exists();
                        if ($dependienteAlreadyExists) {
                            $dependienteData = $dependienteModel->first();
                            $dependienteData->update([
                                'nombre' => $dependiente['nombre'],
                                'parentesco' => $dependiente['parentesco'],
                            ]);
                        } else {
                            DependientesEconomicosEmpleados::create([
                                'empleado_id' => $empleado->id,
                                'nombre' => $dependiente['nombre'],
                                'parentesco' => $dependiente['parentesco'],
                            ]);
                        }
                    }
                }
            }
        }
        // dd(isset($request->contactos_emergencia));
        if (isset($request->contactos_emergencia)) {
            if (!$this->containsOnlyNull($request->contactos_emergencia)) {
                if (count($request->contactos_emergencia)) {
                    foreach ($request->contactos_emergencia as $contactos_emergencia) {
                        $model = ContactosEmergenciaEmpleado::where('id', $contactos_emergencia['id']);
                        $registerAlreadyExists = $model->exists();
                        if ($registerAlreadyExists) {
                            $dataModel = $model->first();
                            $dataModel->update([
                                'nombre' => $contactos_emergencia['nombre'],
                                'telefono' => $contactos_emergencia['telefono'],
                                'parentesco' => $contactos_emergencia['parentesco'],
                            ]);
                        } else {
                            ContactosEmergenciaEmpleado::create([
                                'empleado_id' => $empleado->id,
                                'nombre' => $contactos_emergencia['nombre'],
                                'telefono' => $contactos_emergencia['telefono'],
                                'parentesco' => $contactos_emergencia['parentesco'],
                            ]);
                        }
                    }
                }
            }
        }

        if (isset($request->beneficiarios)) {
            if (!$this->containsOnlyNull($request->beneficiarios)) {
                if (count($request->beneficiarios)) {
                    foreach ($request->beneficiarios as $beneficiario) {
                        $model = BeneficiariosEmpleado::where('id', $beneficiario['id']);
                        $registerAlreadyExists = $model->exists();
                        if ($registerAlreadyExists) {
                            $dataModel = $model->first();
                            $dataModel->update([
                                'nombre' => $beneficiario['nombre'],
                                'parentesco' => $beneficiario['parentesco'],
                                'porcentaje' => $beneficiario['porcentaje'],
                            ]);
                        } else {
                            BeneficiariosEmpleado::create([
                                'empleado_id' => $empleado->id,
                                'nombre' => $beneficiario['nombre'],
                                'parentesco' => $beneficiario['parentesco'],
                                'porcentaje' => $beneficiario['porcentaje'],
                            ]);
                        }
                    }
                }
            }
        }
    }

    public function store(Request $request)
    {
        return $this->belongsTo('App\Models\Puesto', 'puesto_id', 'id');
    }

        return response()->json(['status' => 'success', 'message' => 'Empleado agregado'], 200);

        // return redirect()->route('admin.empleados.index')->with('success', 'Guardado con éxito');
    }

    public function entendimiento_organizacions()
    {
        return $this->hasMany(EntendimientoOrganizacion::class, 'id_elabora');
    }

        return redirect()->route('admin.empleados.edit', $empleado)->with('success', 'Guardado con éxito');

        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach ($files as $file) {
                if (Storage::putFileAs('public/documentos_empleados', $file, $file->getClientOriginalName())) {
                    EvidenciasDocumentosEmpleados::create([
                        'documentos' => $file->getClientOriginalName(),
                        'empleado_id' => $empleado->id,
                    ]);
                }
            }
        }
        // dd($request->hasFile('files'));

        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach ($files as $file) {
                if (Storage::putFileAs('public/certificados_empleados', $file, $file->getClientOriginalName())) {
                    EvidenciasCertificadosEmpleados::create([
                        'evidencia' => $file->getClientOriginalName(),
                        'empleado_id' => $empleado->id,
                    ]);
                }
            }
        }
    }

    public function storeResumen(Request $request, $empleado)
    {
        $request->validate([
            'resumen' => 'required|string|max:4000',
        ]);
        if ($request->ajax()) {
            $empleado = Empleado::find(intval($empleado));
            $empleado->update([
                'resumen' => $request->resumen,
            ]);
            if ($empleado) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['error' => true]);
            }
        }
    }

    public function matriz_riesgos()
    {
        if ($request->esVigente == 'true') {
            $request->validate([
                'nombre' => 'required|string|max:255',
                'documento' => 'nullable|mimes:pdf|max:10000',
                'vigencia' => 'required|date|max:255',
                'estatus' => 'required|string|max:255',
            ]);
        } else {
            $request->validate([
                'nombre' => 'required|string|max:255',
                'documento' => 'nullable|mimes:pdf|max:10000',
            ]);
        }
        // dd($request->all());
        if ($request->ajax()) {
            $empleado = Empleado::find(intval($empleado));
            $certificado = CertificacionesEmpleados::create([
                'empleado_id' => $empleado->id,
                'nombre' => $request->nombre,
                'estatus' =>  $request->estatus,
                'vigencia' =>  $request->vigencia,
            ]);
            if ($request->hasFile('documento')) {
                $filenameWithExt = $request->file('documento')->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('documento')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                // Upload Image
                $path = $request->file('documento')->storeAs('public/certificados_empleados', $fileNameToStore);

                $certificado->update([
                    'documento' => $fileNameToStore,
                ]);
            }
            if ($empleado) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['error' => true]);
            }
        }
    }

    public function updateCertificaciones(Request $request, CertificacionesEmpleados $certificacion)
    {
        if (isset($request->name)) {
            $request->validate([
                'nombre' => 'required|string|max:255',
            ]);
        }
        if (isset($request->vigencia)) {
            $request->validate([
                'vigencia' => 'required|date',
                'estatus' => 'required|string|max:255',
            ]);
        }
        if (isset($request->documento)) {
            $request->validate([
                'documento' => 'required|mimes:pdf|max:10000',
            ]);
        }

        if ($request->hasFile('documento')) {
            $filenameWithExt = $request->file('documento')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('documento')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('documento')->storeAs('public/certificados_empleados', $fileNameToStore);

            $certificacion->update([
                'documento' => $fileNameToStore,
            ]);
        } else {
            $certificacion->update($request->all());
        }

        return response()->json(['status' => 'success', 'message' => 'Certificado Actualizado']);
    }

    public function deleteFileCertificacion(Request $request, CertificacionesEmpleados $certificacion)
    {
        $certificacion->update([
            'documento' => null,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Certificado Actualizado']);
    }

    // public function deleteDocumento(Request $request,  $certificacion)
    // {
    //     $certificacion->update([
    //         'documento' => null
    //     ]);
    //     return response()->json(['status' => 'success', 'message' => 'Certificado Actualizado']);
    // }

    public function storeCursos(Request $request, $empleado)
    {
        $request->merge(['duracion' => Carbon::parse($request->año)->diffInDays($request->fecha_fin) + 1]);
        $request->validate([
            'curso_diploma' => 'required|string|max:255',
            'tipo' => 'required',
            'año' => 'required|date|before_or_equal:fecha_fin',
            'fecha_fin' => 'required|date|after_or_equal:año',
            'duracion' => 'required',
            'empleado_id' => 'required|exists:empleados,id',
        ], [
            'curso_diploma.required' => 'El campo nombre es requerido',
            'año.required' => 'El campo fecha inicio es requerido',
        ]);
        if ($request->ajax()) {
            $empleado = Empleado::find(intval($empleado));
            $curso = CursosDiplomasEmpleados::create([
                'empleado_id' => $empleado->id,
                'curso_diploma' => $request->curso_diploma,
                'tipo' =>  $request->tipo,
                'año' =>  $request->año,
                'fecha_fin' =>  $request->fecha_fin,
                'duracion' =>  $request->duracion,
            ]);

            if ($request->hasFile('file')) {
                $filenameWithExt = $request->file('file')->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('file')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                // Upload Image
                $path = $request->file('file')->storeAs('public/cursos_empleados', $fileNameToStore);

                $curso->update([
                    'file' => $fileNameToStore,
                ]);
            }
            if ($curso) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['error' => true]);
            }
        }
    }

    public function updateCurso(Request $request, CursosDiplomasEmpleados $curso)
    {
        if (array_key_exists('curso_diploma', $request->all())) {
            $request->validate([
                'curso_diploma' => 'required|string|max:255',
            ]);
            $curso->update($request->all());
        }

        if (array_key_exists('tipo', $request->all())) {
            $request->validate([
                'tipo' => 'required|string|max:255',
            ]);
            $curso->update($request->all());
        }

        if (array_key_exists('año', $request->all())) {
            $request->validate([
                'año' => "required|date|before_or_equal:{$curso->fecha_fin}",
            ]);

            $curso->update($request->all());
            $curso->update([
                'duracion' => Carbon::parse($curso->año)->diffInDays($curso->fecha_fin) + 1,
            ]);
        }
        if (array_key_exists('fecha_fin', $request->all())) {
            $request->validate([
                'fecha_fin' => "required|date|after_or_equal:{$curso->año}",
            ]);

            $curso->update($request->all());
            $curso->update([
                'duracion' => Carbon::parse($curso->año)->diffInDays($curso->fecha_fin) + 1,
            ]);
        }

        if (array_key_exists('duracion', $request->all())) {
            $request->validate([
                'duracion' => 'required|numeric|min:1',
            ]);
            $curso->update($request->all());
        }

        if ($request->hasFile('file')) {
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('file')->storeAs('public/cursos_empleados', $fileNameToStore);

            $curso->update([
                'file' => $fileNameToStore,
            ]);
        }

        return response()->json(['status' => 'success', 'message' => 'Curso Actualizado', 'curso' => $curso]);
    }

    public function deleteFileCurso(Request $request, CursosDiplomasEmpleados $curso)
    {
        $curso->update([
            'file' => null,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Curso Actualizado']);
    }

    public function storeExperiencia(Request $request, $empleado)
    {
        $request->validate([
            'empresa' => 'required|string|max:255',
            'puesto' => 'required|string|max:255',
            'inicio_mes' => 'required|date',
            'fin_mes' => 'required|date',
            'descripcion' => 'required',
            'empleado_id' => 'required|exists:empleados,id',

        ]);
        // dd($request->all());
        if ($request->ajax()) {
            $empleado = Empleado::find(intval($empleado));
            $experiencia = ExperienciaEmpleados::create([
                'empleado_id' => $empleado->id,
                'empresa' => $request->empresa,
                'puesto' =>  $request->puesto,
                'inicio_mes' =>  $request->inicio_mes,
                'fin_mes' =>  $request->fin_mes,
                'descripcion' =>  $request->descripcion,
            ]);
            if ($experiencia) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['error' => true]);
            }
        }
    }

    public function updateExperiencia(Request $request, ExperienciaEmpleados $experiencia)
    {
        if (array_key_exists('empresa', $request->all())) {
            $request->validate([
                'empresa' => 'required|string|max:255',
            ]);
        }

        if (array_key_exists('puesto', $request->all())) {
            $request->validate([
                'puesto' => 'required|string|max:255',
            ]);
        }
        if (array_key_exists('descripcion', $request->all())) {
            $request->validate([
                'descripcion' => 'required|string|max:1500',
            ]);
        }
        if (array_key_exists('inicio_mes', $request->all())) {
            $request->validate([
                'inicio_mes' => 'required|date',
            ]);
        }
        if (array_key_exists('fin_mes', $request->all())) {
            $request->validate([
                'fin_mes' => 'required|date',
            ]);
        }

        $experiencia->update($request->all());

        return response()->json(['status' => 'success', 'message' => 'Registro Actualizado']);
    }

    public function storeEducacion(Request $request, $empleado)
    {
        $request->validate([
            'institucion' => 'required|string|max:255',
            'nivel' => 'required',
            'año_inicio' => 'required|date',
            'año_fin' => 'required|date',
            'empleado_id' => 'required|exists:empleados,id',
            'titulo_obtenido' => 'required|string|max:255',
        ]);
        // dd($request->all());
        if ($request->ajax()) {
            $empleado = Empleado::find(intval($empleado));
            $educacion = EducacionEmpleados::create([
                'empleado_id' => $empleado->id,
                'institucion' => $request->institucion,
                'nivel' =>  $request->nivel,
                'año_inicio' =>  $request->año_inicio,
                'año_fin' =>  $request->año_fin,
                'titulo_obtenido' =>  $request->titulo_obtenido,
            ]);

            if ($educacion) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['error' => true]);
            }
        }
    }

    public function updateEducacion(Request $request, EducacionEmpleados $educacion)
    {
        if (array_key_exists('institucion', $request->all())) {
            $request->validate([
                'institucion' => 'required|string|max:255',
            ]);
        }
        if (array_key_exists('nivel', $request->all())) {
            $request->validate([
                'nivel' => 'required|string|max:1500',
            ]);
        }
        if (array_key_exists('año_inicio', $request->all())) {
            $request->validate([
                'año_inicio' => 'required|date',
            ]);
        }
        if (array_key_exists('año_fin', $request->all())) {
            $request->validate([
                'año_fin' => 'required|date',
            ]);
        }
        if (array_key_exists('titulo_obtenido', $request->all())) {
            $request->validate([
                'titulo_obtenido' => 'required|string|max:255',
            ]);
        }

        $educacion->update($request->all());

        return response()->json(['status' => 'success', 'message' => 'Registro Actualizado']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->hasMany(Proceso::class);
    }

    public function tasks()
    {
        abort_if(Gate::denies('configuracion_empleados_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $empleado = Empleado::find(intval($id));
        $empleados = Empleado::get();
        $ceo_exists = Empleado::select('supervisor_id')->whereNull('supervisor_id')->exists();
        $areas = Area::get();
        $area = Area::find($empleado->area_id);
        $sedes = Sede::get();
        $sede = Sede::find($empleado->sede_id);
        $experiencias = ExperienciaEmpleados::get();
        $educacions = EducacionEmpleados::get();
        $cursos = CursosDiplomasEmpleados::get();
        $documentos = EvidenciasDocumentosEmpleados::get();
        $puestos = Puesto::all();
        $perfiles = PerfilEmpleado::all();
        $tipoContratoEmpleado = TipoContratoEmpleado::select('id', 'name', 'description', 'slug')->get();
        $entidadesCrediticias = EntidadCrediticia::select('id', 'entidad')->get();
        $puestos = Puesto::get();
        $perfiles = PerfilEmpleado::get();
        $perfiles_seleccionado = $empleado->perfil_empleado_id;
        $puestos_seleccionado = $empleado->puesto_id;

        $globalCountries = new CountriesFunction;
        $countries = $globalCountries->getCountries('ES');
        $isEditAdmin = true;
        // dd(Empleado::find(63));
        return view('admin.empleados.edit', compact('empleado', 'empleados', 'ceo_exists', 'areas', 'area', 'sede', 'sedes', 'experiencias', 'educacions', 'cursos', 'documentos', 'puestos', 'perfiles', 'tipoContratoEmpleado', 'entidadesCrediticias', 'countries', 'perfiles', 'perfiles_seleccionado', 'puestos_seleccionado', 'isEditAdmin'));
    }

    public function empleado_experiencia()
    {
        return $this->hasMany(ExperienciaEmpleados::class);
    }

        if ($ceo_exists) {
            if ($ceo->id == intval($id)) {
                $validateSupervisor = 'nullable|exists:empleados,id';
            } else {
                $validateSupervisor = 'required|exists:empleados,id';
            }
        }
        $request->validate([
            'name' => 'required|string',
            'n_empleado' => 'unique:empleados,n_empleado,' . $id,
            'area_id' => 'required|exists:areas,id',
            'supervisor_id' => $validateSupervisor,
            'puesto_id' => 'required|exists:puestos,id',
            'antiguedad' => 'required',
            'estatus' => 'required',
            'email' => 'required|email',
            // 'sede_id' => 'required|exists:sedes,id',
            'perfil_empleado_id' => 'required|exists:perfil_empleados,id',

        ], [
            'n_empleado.unique' => 'El número de empleado ya ha sido tomado',
        ]);

        $this->validateDynamicForms($request);
        $empleado = Empleado::find($id);
        $image = $empleado->foto;
        if ($request->snap_foto && $request->file('foto')) {
            if ($request->snap_foto) {
                if (preg_match('/^data:image\/(\w+);base64,/', $request->snap_foto)) {
                    $value = substr($request->snap_foto, strpos($request->snap_foto, ',') + 1);
                    $value = base64_decode($value);

                    $new_name_image = 'UID_' . $empleado->id . '_' . $empleado->name . '.png';
                    $image = $new_name_image;
                    $route = storage_path() . '/app/public/empleados/imagenes/' . $new_name_image;
                    $img_intervention = Image::make($request->snap_foto);
                    $img_intervention->resize(480, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($route);
                }
            }
        } elseif (
            $request->snap_foto && !$request->file('foto')
        ) {
            if ($request->snap_foto) {
                if (preg_match('/^data:image\/(\w+);base64,/', $request->snap_foto)) {
                    $value = substr($request->snap_foto, strpos($request->snap_foto, ',') + 1);
                    $value = base64_decode($value);

                    $new_name_image = 'UID_' . $empleado->id . '_' . $empleado->name . '.png';
                    $image = $new_name_image;
                    $route = storage_path() . '/app/public/empleados/imagenes/' . $new_name_image;
                    $img_intervention = Image::make($request->snap_foto);
                    $img_intervention->resize(480, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($route);
                }
            }
        } else {
            if (
                $request->file('foto') != null or !empty($request->file('foto'))
            ) {
                $extension = pathinfo($request->file('foto')->getClientOriginalName(), PATHINFO_EXTENSION);
                $name_image = basename(pathinfo($request->file('foto')->getClientOriginalName(), PATHINFO_BASENAME), '.' . $extension);
                $new_name_image = 'UID_' . $empleado->id . '_' . $request->name . '.' . $extension;
                $route = storage_path() . '/app/public/empleados/imagenes/' . $new_name_image;
                $image = $new_name_image;
                //Usamos image_intervention para disminuir el peso de la imagen
                $img_intervention = Image::make($request->file('foto'));
                $img_intervention->resize(480, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($route);
            }
        }

        // if ($request->hasFile('files')) {
        //     $files = $request->file('files');
        //     foreach ($files as $file) {
        //         if (Storage::putFileAs('public/documentos_empleados', $file, $file->getClientOriginalName())) {
        //             EvidenciasDocumentosEmpleados::create([
        //                 'documentos' => $file->getClientOriginalName(),
        //                 'empleado_id' => $empleado->id,
        //             ]);
        //         }
        //     }
        // }

        $empleado->update([
            'name' => $request->name,
            'area_id' =>  $request->area_id,
            'puesto_id' =>  $request->puesto_id,
            'perfil_empleado_id' => $request->perfil_empleado_id,
            'supervisor_id' =>  $request->supervisor_id,
            'antiguedad' =>  $request->antiguedad,
            'estatus' =>  $request->estatus,
            'email' =>  $request->email,
            'telefono' =>  $request->telefono,
            'genero' =>  $request->genero,
            'n_empleado' =>  $request->n_empleado,
            'n_registro' =>  $request->n_registro,
            'sede_id' =>  $request->sede_id,
            // 'resumen' =>  $request->resumen,
            'cumpleaños' => $request->cumpleaños,
            'direccion' => $request->direccion,
            'telefono_movil' => $request->telefono_movil,
            'extension' => $request->extension,
            'cumpleaños' => $request->cumpleaños,
            'direccion' => $request->direccion,
            'tipo_contrato_empleados_id' => $request->tipo_contrato_empleados_id,
            'terminacion_contrato' => $request->terminacion_contrato,
            'renovacion_contrato' => $request->renovacion_contrato,
            'esquema_contratacion' => $request->esquema_contratacion,
            'proyecto_asignado' => $request->proyecto_asignado,
            'domicilio_personal' => $request->domicilio_personal,
            'telefono_casa' => $request->telefono_casa,
            'correo_personal' => $request->correo_personal,
            'estado_civil' => $request->estado_civil,
            'NSS' => $request->NSS,
            'CURP' => $request->CURP,
            'RFC' => $request->RFC,
            'lugar_nacimiento' => $request->lugar_nacimiento,
            'nacionalidad' => $request->nacionalidad,
            'entidad_crediticias_id' => $request->entidad_crediticias_id,
            'numero_credito' => $request->numero_credito,
            'descuento' => $request->descuento,
            'banco' => $request->banco,
            'cuenta_bancaria' => $request->cuenta_bancaria,
            'clabe_interbancaria' => $request->clabe_interbancaria,
            'centro_costos' => $request->centro_costos,
            'salario_bruto' => $request->salario_bruto ? preg_replace('/([^0-9\.])/i', '', $request->salario_bruto) : null,
            'salario_diario' => $request->salario_diario ? preg_replace('/([^0-9\.])/i', '', $request->salario_diario) : null,
            'salario_diario_integrado' => $request->salario_diario_integrado ? preg_replace('/([^0-9\.])/i', '', $request->salario_diario_integrado) : null,
            'salario_base_mensual' => $request->salario_base_mensual ? preg_replace('/([^0-9\.])/i', '', $request->salario_base_mensual) : null,
            'pagadora_actual' => $request->pagadora_actual,
            'periodicidad_nomina' => $request->periodicidad_nomina,
        ]);

        $this->assignDependenciesModel($request, $empleado);

        return response()->json(['status' => 'success', 'message' => 'Empleado Actualizado', 'from' => 'rh'], 200);
        // return redirect()->route('admin.empleados.index')->with('success', 'Editado con éxito');
    }

    public function updateFromCurriculum(Request $request, Empleado $empleado)
    {
        $request->validate([
            'files.*' => 'nullable|mimes:jpeg,bmp,png,gif,svg,pdf|max:10000',
        ]);

        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach ($files as $file) {
                if (Storage::putFileAs('public/documentos_empleados', $file, $file->getClientOriginalName())) {
                    EvidenciasDocumentosEmpleados::create([
                        'documentos' => $file->getClientOriginalName(),
                        'empleado_id' => $empleado->id,
                    ]);
                }
            }
        }

        return response()->json(['status' => 'success', 'message' => 'Curriculum Actualizado', 'from' => 'curriculum'], 200);
    }

    public function empleado_cursos()
    {
        return $this->hasMany(CursosDiplomasEmpleados::class);
    }

    public function empleado_educacion()
    {
        return $this->hasMany(EducacionEmpleados::class);
    }

    public function empleado_documentos()
    {
        return $this->hasMany(EvidenciasDocumentosEmpleados::class);
    }

    public function empleado_documentos_certificados()
    {
        return $this->hasMany(EvidenciasDocumentosEmpleados::class);
    }

    public function foto_organizacion()
    {
        return $this->hasMany(Organizacion::class);
    }

    public function objetivos()
    {
        return $this->hasMany('App\Models\RH\ObjetivoEmpleado', 'empleado_id', 'id');
    }

    public function perfil()
    {
        return $this->belongsTo('App\Models\PerfilEmpleado', 'perfil_empleado_id', 'id');
    }

    // Recursos Humanos
    public function evaluadores()
    {
        return $this->belongsToMany('App\Models\Empleado', 'ev360_evaluado_evaluador', 'evaluador_id', 'id');
    }

    // public function getJefeInmediatoAttribute()
    // {
    //     return $this->supervisor ? $this->supervisor->id : $this->id;
    // }

    public function getEmpleadosMismaAreaAttribute()
    {
        $by_area = self::where('area_id', $this->area_id)->pluck('id')->toArray();

        return $by_area;
    }
    //declaraciones

    public function getDeclaracionesResponsableAttribute()
    {
       $misDeclaraciones=DeclaracionAplicabilidadResponsable::select('id','declaracion_id')->where('empleado_id',$this->id)->pluck('declaracion_id')->toArray();
       return $misDeclaraciones;
    }

    public function getDeclaracionesAprobadorAttribute()
    {
       $misDeclaraciones=DeclaracionAplicabilidadAprobadores::select('id','declaracion_id')->where('aprobadores_id',$this->id)->pluck('declaracion_id')->toArray();
       return $misDeclaraciones;
    }

    public function updateImageProfile(Request $request)
    {
        $empleado = auth()->user()->empleado;
        if (preg_match('/^data:image\/(\w+);base64,/', $request->image)) {
            $value = substr($request->image, strpos($request->image, ',') + 1);
            $value = base64_decode($value);
            $new_name_image = 'UID_' . $empleado->id . '_' . $empleado->name . '.png';

            $route = storage_path() . '/app/public/empleados/imagenes/' . $new_name_image;
            $img_intervention = Image::make($request->image);
            $img_intervention->resize(1280, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($route);
            $empleado->update([
                'foto' => $new_name_image,
            ]);

            return response()->json(['success' => 'Imágen actualizada']);
        } else {
            return response()->json(['error' => 'Ocurrió un error, intente nuevamente']);
        }
        // $folderPath = public_path('upload/');
        // $image_parts = explode(";base64,", $request->image);
        // $image_type_aux = explode("image/", $image_parts[0]);
        // $image_type = $image_type_aux[1];
        // $image_base64 = base64_decode($image_parts[1]);

        // $imageName = uniqid() . '.png';

        // $imageFullPath = $folderPath . $imageName;

        // file_put_contents($imageFullPath, $image_base64);

        // $saveFile = new Picture;
        // $saveFile->name = $imageName;
        // $saveFile->save();
    }

    public function updateInformationProfile(Request $request)
    {
        $empleadoID = auth()->user()->empleado->id;
        $empleado = Empleado::find($empleadoID);
        $request->validate([
            'name' => 'required|string|max:255',
            // 'email'=>'required|email|max:255',
            'cumpleaños' => 'required|date',
            'telefono_movil' => 'nullable|string|max:255',
        ]);
        $empleado->update([
            'name' => $request->name,
            // 'email'=>$request->email,
            'mostrar_telefono' => $request->has('mostrar_telefono'),
            'cumpleaños' => $request->cumpleaños,
            'telefono_movil' => $request->telefono_movil,
        ]);

        return redirect()->back()->with(['success' => 'Información actualizada']);
    }

    public function updateInformacionRelacionadaProfile(Request $request)
    {
        $empleadoID = auth()->user()->empleado->id;
        $empleado = Empleado::find($empleadoID);
        $this->validateDynamicForms($request);
        $this->assignDependenciesModel($request, $empleado);

        return redirect()->back()->with(['success' => 'Información actualizada']);
    }

    public function storeDocumentos(Request $request, Empleado $empleado)
    {
        $request->merge([
            'empleado_id' => $empleado->id,
        ]);
        $request->validate([
            'nombre' => 'required|string|max:255',
            'numero' => 'required|string|max:255',
            'documentos' => 'nullable|mimes:jpeg,bmp,png,gif,svg,pdf|max:10000',
            'empleado_id' => 'required|exists:empleados,id',
        ]);

        // dd($empleado);
        $evidencia = EvidenciasDocumentosEmpleados::create($request->all());

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            if (Storage::putFileAs('public/expedientes/' . Str::slug($empleado->name), $file, $file->getClientOriginalName())) {
                $evidencia->update([
                    'documentos' => $file->getClientOriginalName(),
                ]);
            }
        }

        return response()->json(['status' => 'success', 'message' => 'Documento registrado']);
    }

    public function updateDocumento(Request $request, EvidenciasDocumentosEmpleados $documento)
    {
        $empleado = $documento->empleados_documentos;
        if (array_key_exists('nombre', $request->all())) {
            $request->validate([
                'nombre' => 'required|string|min:2|max:255',
            ]);
            $documento->update($request->all());
        }

        if (array_key_exists('numero', $request->all())) {
            $request->validate([
                'numero' => 'required|string|min:5|max:255',
            ]);
            $documento->update($request->all());
        }

        if (array_key_exists('file', $request->all())) {
            $request->validate([
                'file' => 'nullable|mimes:jpeg,bmp,png,gif,svg,pdf|max:10000',
            ]);
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                if (Storage::putFileAs('public/expedientes/' . Str::slug($empleado->name), $file, $file->getClientOriginalName())) {
                    $documento->update([
                        'documentos' => $file->getClientOriginalName(),
                    ]);
                }
            }
        }

        return response()->json(['status' => 'success', 'message' => 'Registro Actualizado']);
    }

    public function getDocumentos(Empleado $empleado)
    {
        $documentos = EvidenciasDocumentosEmpleados::where('empleado_id', $empleado->id)->get();

        return datatables()->of($documentos)->toJson();
        // return response()->json(['documentos' => $documentos]);
    }

    public function deleteDocumento(EvidenciasDocumentosEmpleados $documento)
    {
        $documento->delete();

        return response()->json(['status' => 'success', 'message' => 'Documento eliminado']);
    }

    public function deleteFileDocumento(EvidenciasDocumentosEmpleados $documento)
    {
        if (Storage::disk('public')->exists($documento->ruta_absoluta_documento)) {
            Storage::disk('public')->delete($documento->ruta_absoluta_documento);
        }
        $documento->update([
            'documentos' => null,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Archivo eliminado']);
    }
}
