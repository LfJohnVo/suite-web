<!--<span class="card-title">Editar cierre</span>-->

<div class="col s12">
    <div class="form-group diseño-titulo">
        <p class="center-align white-text" style="font-size:13pt;">EDITAR ASPECTO DE VALIDACIÓN</p>
    </div>
</div>

@include('livewire.cierre-contratos.form')

<div class="form-group col-12 text-right mt-4" style="margin-left: 10px; margin-right: 10px;">
    <div class="col s12 m12 right-align btn-grd distancia">
        <button wire:click="update" class="btn btn-success">
            Actualizar
        </button>

        <button wire:click="default" class="btn btn_cancelar">
            Cancelar
        </button>
    </div>
</div>
