@extends('layouts.admin')
@section('content')
@can('politica_sgsi_create')

<div class="card mt-5">
    <div class="col-md-10 col-sm-9 py-3 card card-body bg-primary align-self-center " style="margin-top:-40px; ">
        <h3 class="mb-2  text-center text-white"><strong>Política SGSI</strong></h3>
    </div>


    <div style="margin-bottom: 10px; margin-left:10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.politica-sgsis.create') }}">
                  Agregar <strong>+</strong>
            </a>
        </div>
    </div>
@endcan


    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-PoliticaSgsi">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.politicaSgsi.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.politicaSgsi.fields.politicasgsi') }}
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
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($politicaSgsis as $key => $politicaSgsi)
                        <tr data-entry-id="{{ $politicaSgsi->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $politicaSgsi->id ?? '' }}
                            </td>
                            <td>
                                {{ $politicaSgsi->politicasgsi ?? '' }}
                            </td>
                            <td>
                                @can('politica_sgsi_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.politica-sgsis.show', $politicaSgsi->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('politica_sgsi_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.politica-sgsis.edit', $politicaSgsi->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('politica_sgsi_delete')
                                    <form action="{{ route('admin.politica-sgsis.destroy', $politicaSgsi->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('politica_sgsi_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.politica-sgsis.massDestroy') }}",
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
  let table = $('.datatable-PoliticaSgsi:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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
