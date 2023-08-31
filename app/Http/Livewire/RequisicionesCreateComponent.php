<?php

namespace App\Http\Livewire;

use App\Mail\RequisicionesEmail;
use App\Mail\RequsicionEmail;
use Livewire\Component;
use App\Models\Comprador;
use App\Models\Contrato;
use App\Models\Empleado;
use App\Models\EmpleadoT;
use App\Models\ContractManager\Comprador as KatbolComprador;
use App\Models\ContractManager\Contrato as KatbolContrato;
use App\Models\ContractManager\Producto as KatbolProducto;
use App\Models\ContractManager\ProductoRequisicion as KatbolProductoRequisicion;
use App\Models\ContractManager\ProvedorRequisicionCatalogo as KatbolProvedorRequisicionCatalogo;
use App\Models\ContractManager\ProveedorIndistinto as KatbolProveedorIndistinto;
use App\Models\ContractManager\ProveedorOC as KatbolProveedorOC;
use App\Models\ContractManager\ProveedorRequisicion as KatbolProveedorRequisicion;
use App\Models\ContractManager\Requsicion as KatbolRequsicion;
use App\Models\ContractManager\Sucursal as KatbolSucursal;
use App\Models\Organizacion;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\WithFileUploads;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\isEmpty;

class RequisicionesCreateComponent extends Component
{
    use WithFileUploads;

    public $sucursales;
    public $compradores;
    public $contratos;
    public $proveedores;
    public $productos;
    public $organizacion;
    public $requisicion_id;
    public $nueva_requisicion;
    public $productos_view;
    public $proveedores_view;

    public $products_servs_count;
    public $proveedores_count = 0;
    public $proveedores_catalogo;
    public $provedores_colllection_catalogo;
    public $provedores_indistinto_catalogo;
    public $proveedores_show;

    // contizaciones
    public $cotizaciones = [];

    // tabs
    public $habilitar_firma = false;

    public $user_actual;

    public $habilitar_alerta = false;
    public $habilitar_proveedores = false;

    public $habilitar_url = false;

    public $requisicion;

    public $selectedInput= [];
    public $selectOption = [];

    public $provedores_colllection;

    protected $listeners = ['actualizarCountProveedores' => 'actualizarCountProveedores'];

    public function actualizarCountProveedores()
    {
        $this->proveedores_count = $this->proveedores_count + 1;
    }

    public function mount()
    {

        $this->sucursales = KatbolSucursal::where('archivo', false)->get();
        $this->proveedores = KatbolProveedorOC::where('estado', false)->get();
        $this->compradores = KatbolComprador::with('user')->where('archivo', false)->get();
        $this->contratos = KatbolContrato::get();
        $this->productos = KatbolProducto::where('archivo', false)->get();
        $this->user_actual = Auth::user();
        $this->organizacion = Organizacion::first();
    }

    public function render()
    {
        return view('livewire.requisiciones-create-component');
    }

    public function hydrate()
    {
        $this->emit('select2');
    }

    public function servicioStore($data)
    {
        if ($this->nueva_requisicion) {
            $this->nueva_requisicion->update([
                'fecha' => $data['fecha'],
                'referencia' => $data['descripcion'],
                'user' => $data['user'],
                'area' => $this->user_actual->empleado->area->area,
                'contrato_id' => $data['contrato_id'],
                'comprador_id' => $data['comprador_id'],
                'sucursal_id' => $data['sucursal_id'],
            ]);
        }else{
            $this->nueva_requisicion = KatbolRequsicion::create([
                'fecha' => $data['fecha'],
                'referencia' => $data['descripcion'],
                'user' => $data['user'],
                'area' => $this->user_actual->empleado->area->area,
                'contrato_id' => $data['contrato_id'],
                'comprador_id' => $data['comprador_id'],
                'sucursal_id' => $data['sucursal_id'],
            ]);
        }

        $productos_existentes = KatbolProductoRequisicion::where('requisiciones_id', $this->nueva_requisicion->id)->get();
        if($productos_existentes->count() > 0){
            foreach ($productos_existentes as $product) {
                $product->delete();
            }
        }

        for($i = 1; $i <= $this->products_servs_count; $i++){
            if(isset($data['especificaciones_'.$i])){
                $producto_req = new KatbolProductoRequisicion();
                $producto_req->espesificaciones = $data['especificaciones_'.$i];
                $producto_req->cantidad = $data['cantidad_'.$i];
                $producto_req->producto_id =$data['producto_'.$i];
                $producto_req->requisiciones_id  =  $this->nueva_requisicion->id;
                $producto_req->save();
            }
        }

        $this->requisicion_id = $this->nueva_requisicion->id;
        $id = Auth::user()->id;
        $this->nueva_requisicion->update([
             'id_user' =>  $id
        ]);

        $this->habilitar_proveedores = true;
        $this->emit('cambiarTab', 'paso-proveedores');
    }

    public function proveedoresStore($data)
    {
        $this->habilitar_firma = false;

        $proveedores_exitentes = KatbolProveedorRequisicion::where('requisiciones_id', $this->requisicion_id)->get();
        if($proveedores_exitentes->count() > 0){
            foreach ($proveedores_exitentes as $proveedor) {
                $proveedor->delete();
            }
        }

        $provedores_catalogos_existentes = KatbolProvedorRequisicionCatalogo::where('requisicion_id', $this->requisicion_id)->get();
        if($provedores_catalogos_existentes->count() > 0){
            foreach ($provedores_catalogos_existentes as $proveedor_catalogo) {
                $proveedor_catalogo->delete();
            }
        }

        $proveedor_indistinto = KatbolProveedorIndistinto::where('requisicion_id', $this->requisicion_id)->get();
        if($proveedor_indistinto->count() > 0){
            foreach ($proveedor_indistinto as $proveedor_indistinto) {
                $proveedor_indistinto->delete();
            }
        }

            $cotizacion_count = 0;
            $prove_count = 0;
            $this->provedores_colllection = collect();
       for($i = 0; $i <= $this->proveedores_count; $i++){
            if(isset($data['proveedor_'.$i])){

                if ($this->selectedInput[$prove_count] === 'otro') {

                    if (!empty($this->selectOption[$prove_count]) && isset($this->selectOption[$prove_count])) {

                    }else{
                        $this->selectOption[$prove_count] = 'indistinto';
                    }

                    if ($this->selectOption[$prove_count] === 'sugerido') {

                            // nuevo proveedor
                            $proveedor_req = new KatbolProveedorRequisicion();
                            $proveedor_req->proveedor = $data['proveedor_'.$i];
                            $proveedor_req->detalles = $data['detalles_'.$i];
                            $proveedor_req->tipo = $data['tipo_'.$i];
                            $proveedor_req->comentarios  =  $data['comentarios_'.$i];
                            $proveedor_req->contacto = $data['contacto_'.$i];
                            $proveedor_req->cel = $data['contacto_telefono_'.$i];
                            $proveedor_req->contacto_correo =$data['contacto_correo_'.$i];
                            $proveedor_req->url =$data['contacto_url_'.$i];
                            $proveedor_req->fecha_inicio  =   $data['contacto_fecha_inicio_'.$i];
                            $proveedor_req->fecha_fin  =   $data['contacto_fecha_fin_'.$i];
                            $proveedor_req->requisiciones_id  =  $this->requisicion_id;

                            // cotizacion y validacion
                            $cotizacion_actual = $this->cotizaciones[$cotizacion_count];
                            if ($cotizacion_actual->getClientOriginalExtension() === 'pdf' || $cotizacion_actual->getClientOriginalExtension() === 'docx'
                            || $cotizacion_actual->getClientOriginalExtension() === 'pptx' || $cotizacion_actual->getClientOriginalExtension() === 'point'
                            || $cotizacion_actual->getClientOriginalExtension() === 'xml'  || $cotizacion_actual->getClientOriginalExtension() === 'jpeg'
                            || $cotizacion_actual->getClientOriginalExtension() === 'jpg'  || $cotizacion_actual->getClientOriginalExtension() === 'png'
                            || $cotizacion_actual->getClientOriginalExtension() === 'xlsx' || $cotizacion_actual->getClientOriginalExtension() === 'xlsm'
                            || $cotizacion_actual->getClientOriginalExtension() === 'csv') {
                            $this->habilitar_alerta = false;
                            $name_cotizacion = 'requisicion_' . $this->requisicion_id . 'cotizazcion_' . $cotizacion_count . '_' . uniqid() . '.' . $cotizacion_actual->getClientOriginalExtension();
                            $ruta_cotizacion = $cotizacion_actual->storeAs('public/cotizaciones_requisiciones_proveedores/', $name_cotizacion);
                            $proveedor_req->cotizacion  =  $name_cotizacion;
                            $proveedor_req->save();

                                }else{
                                    $this->habilitar_alerta = true;
                                    return false;
                                }

                            $this->emit('cambiarTab', 'paso-firma');

                            $this->dataFirma();
                  }else{
                $this->provedores_indistinto_catalogo = collect();
                $this->provedores_indistinto_catalogo =  KatbolProveedorIndistinto::create([
                 'requisicion_id' =>   $this->nueva_requisicion->id,
                //  'proveedor_indistinto_id' =>  $data['proveedor_otro'.$i],
                 'fecha_inicio' => $data['contacto_fecha_inicio_'.$i],
                 'fecha_fin' => $data['contacto_fecha_fin_'.$i],
                ]);

                   $this->emit('cambiarTab', 'paso-firma');

                   $this->dataFirma();

                  }
                }else {
                   $this->proveedores_catalogo = KatbolProveedorOC::where('id', $this->selectedInput[$prove_count])->first();
                   $this->provedores_colllection_catalogo = collect();
                   $this->provedores_colllection_catalogo =  KatbolProvedorRequisicionCatalogo::create([
                    'requisicion_id' =>   $this->nueva_requisicion->id,
                    'proveedor_id' => $this->selectedInput[$prove_count],
                    'fecha_inicio'  => $data['contacto_fecha_inicio_'.$i],
                    'fecha_fin'  => $data['contacto_fecha_fin_'.$i],
                   ]);

                   $this->proveedores_catalogo->update([
                    'fecha_inicio'  => $data['contacto_fecha_inicio_'.$i],
                    'fecha_fin'  => $data['contacto_fecha_fin_'.$i],
                   ]);

                   $this->nueva_requisicion->update([
                    'proveedor_catalogo' =>  $this->proveedores_catalogo->nombre,
                    'proveedoroc_id' =>  $this->proveedores_catalogo->id,
                  ]);

                   $proveedores_escogidos =  KatbolProvedorRequisicionCatalogo::where('requisicion_id',  $this->nueva_requisicion->id)->pluck('proveedor_id')->toArray();

                   $this->proveedores_show = KatbolProveedorOC::whereIn('id', $proveedores_escogidos)->get();

                   $this->emit('cambiarTab', 'paso-firma');

                   $this->dataFirma();

                }
                $prove_count = $prove_count + 1;
                $cotizacion_count = $cotizacion_count + 1;

            }

        }

        $this->provedores_colllection->push($this->proveedores_catalogo);



    }

    public function dataFirma()
    {
        $this->habilitar_proveedores = false;

        $this->productos_view = KatbolProductoRequisicion::where('requisiciones_id', $this->requisicion_id)->get();
        $this->proveedores_view = KatbolProveedorRequisicion::where('requisiciones_id',$this->requisicion_id)->get();
        $requisicion = $this->requisicion = KatbolRequsicion::with('comprador.user', 'sucursal')->find($this->requisicion_id);
        $comprador = KatbolComprador::where('id',$requisicion->comprador_id)->first();
        $contrato = KatbolContrato::where('id',$requisicion->contrato_id)->first();
        $this->emit('render_firma');
        $this->habilitar_firma = true;
    }

    public function Firmar($data)
    {

        // try {
            $this->habilitar_proveedores = false;

            $userr =  Auth::user();

            if ($data['firma']) {
                $this->nueva_requisicion->update([
                    'firma_solicitante' => $data['firma'],
                    'estado' => "curso",
                    'email' => $userr->email,
                ]);

                $fecha =  date('d-m-Y');
                $this->nueva_requisicion->fecha_firma_solicitante_requi = $fecha;
                $this->nueva_requisicion->save();

                $tipo_firma = 'firma_solicitante';
                $organizacion = Organizacion::first();

                $user = ModelsUser::where('id', $this->nueva_requisicion->id_user)->first();

                $empleado = Empleado::with('supervisor')->where('id',  $user->empleado_id)->first();

                $supervisor = $empleado->supervisor->email;

                Mail::to('saul.ramirez@silent4business.com')->send(new RequisicionesEmail($this->nueva_requisicion, $organizacion, $tipo_firma));

                return redirect(route('contract_manager.requisiciones'));

            }

        // } catch (\Throwable $th) {
        //     dump('ERROR DE CONEXION');
        // }
    }
}