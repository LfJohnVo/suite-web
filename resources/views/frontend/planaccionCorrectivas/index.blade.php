@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('planaccion_correctiva_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.planaccion-correctivas.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.planaccionCorrectiva.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.planaccionCorrectiva.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-PlanaccionCorrectiva">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.planaccionCorrectiva.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.planaccionCorrectiva.fields.accioncorrectiva') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.accionCorrectiva.fields.fecharegistro') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.planaccionCorrectiva.fields.actividad') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.planaccionCorrectiva.fields.responsable') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.planaccionCorrectiva.fields.fechacompromiso') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.planaccionCorrectiva.fields.estatus') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <select class="search">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach($accion_correctivas as $key => $item)
                                                <option value="{{ $item->tema }}">{{ $item->tema }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <select class="search">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach($users as $key => $item)
                                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\PlanaccionCorrectiva::ESTATUS_SELECT as $key => $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($planaccionCorrectivas as $key => $planaccionCorrectiva)
                                    <tr data-entry-id="{{ $planaccionCorrectiva->id }}">
                                        <td>
                                            {{ $planaccionCorrectiva->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $planaccionCorrectiva->accioncorrectiva->tema ?? '' }}
                                        </td>
                                        <td>
                                            {{ $planaccionCorrectiva->accioncorrectiva->fecharegistro ?? '' }}
                                        </td>
                                        <td>
                                            {{ $planaccionCorrectiva->actividad ?? '' }}
                                        </td>
                                        <td>
                                            {{ $planaccionCorrectiva->responsable->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $planaccionCorrectiva->fechacompromiso ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\PlanaccionCorrectiva::ESTATUS_SELECT[$planaccionCorrectiva->estatus] ?? '' }}
                                        </td>
                                        <td>
                                            @can('planaccion_correctiva_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.planaccion-correctivas.show', $planaccionCorrectiva->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('planaccion_correctiva_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.planaccion-correctivas.edit', $planaccionCorrectiva->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('planaccion_correctiva_delete')
                                                <form action="{{ route('frontend.planaccion-correctivas.destroy', $planaccionCorrectiva->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('planaccion_correctiva_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.planaccion-correctivas.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-PlanaccionCorrectiva:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  $('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value
      table
        .column($(this).parent().index())
        .search(value, strict)
        .draw()
  });
})

</script>
@endsection