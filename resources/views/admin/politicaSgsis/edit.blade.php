@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.politicaSgsi.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.politica-sgsis.update", [$politicaSgsi->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="politicasgsi">{{ trans('cruds.politicaSgsi.fields.politicasgsi') }}</label>
                <textarea class="form-control {{ $errors->has('politicasgsi') ? 'is-invalid' : '' }}" name="politicasgsi" id="politicasgsi">{{ old('politicasgsi', $politicaSgsi->politicasgsi) }}</textarea>
                @if($errors->has('politicasgsi'))
                    <div class="invalid-feedback">
                        {{ $errors->first('politicasgsi') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.politicaSgsi.fields.politicasgsi_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection