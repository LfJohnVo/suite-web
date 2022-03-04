<div>
    <div class="row">
        <div wire:ignore class="form-group col-sm-4 col-md-4 col-lg-4">
            <label for="operacional"><i class="fas fa-project-diagram iconos-crear"></i>Operacional</label>
            <select class="form-control select2 {{ $errors->has('operacional') ? 'is-invalid' : '' }}"
                wire:model='operacionalId' name="operacional" id="operacional">
                <option value="1" {{ $operacionalId == 1 ? 'selected' : '' }}>1</option>
                <option value="2" {{ $operacionalId == 2 ? 'selected' : '' }}>2</option>
                <option value="3" {{ $operacionalId == 3 ? 'selected' : '' }}>3</option>
                <option value="4" {{ $operacionalId == 4 ? 'selected' : '' }}>4</option>
                <option value="5" {{ $operacionalId == 5 ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <div wire:ignore class="form-group col-sm-4 col-md-4 col-lg-4">
            <label for="cumplimiento"><i class="fas fa-check iconos-crear"></i>Cumplimiento</label>
            <select class="form-control select2 {{ $errors->has('cumplimiento') ? 'is-invalid' : '' }}"
                wire:model='cumplimientoId' name="cumplimiento" id="cumplimiento">

                <option value="1" {{ $cumplimientoId == 1 ? 'selected' : '' }}>1</option>
                <option value="2" {{ $cumplimientoId == 2 ? 'selected' : '' }}>2</option>
                <option value="3" {{ $cumplimientoId == 3 ? 'selected' : '' }}>3</option>
                <option value="4" {{ $cumplimientoId == 4 ? 'selected' : '' }}>4</option>
                <option value="5" {{ $cumplimientoId == 5 ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <div wire:ignore class="form-group col-sm-4 col-md-4 col-lg-4">
            <label for="legal"><i class="fas fa-gavel iconos-crear"></i>Legal</label>
            <select class="form-control select2 {{ $errors->has('legal') ? 'is-invalid' : '' }}" wire:model='legalId'
                name="legal" id="legal">

                <option value="1" {{ $legalId == 1 ? 'selected' : '' }}>1</option>
                <option value="2" {{ $legalId == 2 ? 'selected' : '' }}>2</option>
                <option value="3" {{ $legalId == 3 ? 'selected' : '' }}>3</option>
                <option value="4" {{ $legalId == 4 ? 'selected' : '' }}>4</option>
                <option value="5" {{ $legalId == 5 ? 'selected' : '' }}>5</option>
            </select>
        </div>

    </div>

    <div class="row">
        <div wire:ignore class="form-group col-sm-4 col-md-4 col-lg-4">
            <label for="reputacional"><i class="fas fa-newspaper iconos-crear"></i>Reputacional</label>
            <select class="form-control select2 {{ $errors->has('reputacional') ? 'is-invalid' : '' }}"
                wire:model='reputacionalId' name="reputacional" id="reputacional">

                <option value="1" {{ $reputacionalId == 1 ? 'selected' : '' }}>1</option>
                <option value="2" {{ $reputacionalId == 2 ? 'selected' : '' }}>2</option>
                <option value="3" {{ $reputacionalId == 3 ? 'selected' : '' }}>3</option>
                <option value="4" {{ $reputacionalId == 4 ? 'selected' : '' }}>4</option>
                <option value="5" {{ $reputacionalId == 5 ? 'selected' : '' }}>5</option>
            </select>
        </div>



        <div wire:ignore class="form-group col-sm-4 col-md-4 col-lg-4">
            <label for="tecnologico"><i class="fas fa-laptop iconos-crear"></i>Tecnológico</label>
            <select class="form-control select2 {{ $errors->has('tecnologico') ? 'is-invalid' : '' }}"
                wire:model='tecnologicoId' name="tecnologico" id="tecnologico">

                <option value="1" {{ $tecnologicoId == 1 ? 'selected' : '' }}>1</option>
                <option value="2" {{ $tecnologicoId == 2 ? 'selected' : '' }}>2</option>
                <option value="3" {{ $tecnologicoId == 3 ? 'selected' : '' }}>3</option>
                <option value="4" {{ $tecnologicoId == 4 ? 'selected' : '' }}>4</option>
                <option value="5" {{ $tecnologicoId == 5 ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <div wire:ignore.self class="form-group col-sm-4 col-md-4 col-lg-4">
            <label for="valor"><i class="fas fa-bullseye iconos-crear"></i>Valor del impacto</label>
            <input class="form-control mt-2 {{ $errors->has('valor') ? 'is-invalid' : '' }}" type="number"
                wire:model.defer='valorId' name="valor" value="{{ old('valor', '') }}" readonly
                style="background: {{ $colorReglaTipo }};color:{{ $colorTextoTipo }};" id="valorImpacto">
            @if ($errors->has('valor'))
                <div class="invalid-feedback">
                    {{ $errors->first('valor') }}
                </div>
            @endif
        </div>

    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        $('#cumplimiento').on('select2:select', function(e) {
            var data = e.params.data;
            @this.set('cumplimientoId', data.id);
        });
        $('#operacional').on('select2:select', function(e) {
            var data = e.params.data;
            @this.set('operacionalId', data.id);
        });
        $('#legal').on('select2:select', function(e) {
            var data = e.params.data;
            @this.set('legalId', data.id);
        });
        $('#reputacional').on('select2:select', function(e) {
            var data = e.params.data;
            @this.set('reputacionalId', data.id);
        });
        $('#tecnologico').on('select2:select', function(e) {
            var data = e.params.data;
            @this.set('tecnologicoId', data.id);
        });
    })
</script>
