@extends('layouts.admin')
@section('content')
@can('resep_create')
    <div class="block my-4">
        <a class="btn-md btn-green" href="{{ route('admin.reseps.create') }}">
            {{ trans('global.add') }} {{ trans('cruds.resep.title_singular') }}
        </a>
    </div>
@endcan
<div class="main-card">
    <div class="header">
        {{ trans('cruds.resep.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="body">
        <div class="w-full">
            <table class="stripe hover bordered datatable datatable-Resep">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.resep.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.resep.fields.users') }}
                        </th>
                        <th>
                            {{ trans('cruds.resep.fields.nama_resep') }}
                        </th>
                        <th>
                            {{ trans('cruds.resep.fields.gambar') }}
                        </th>
                        <th>
                            {{ trans('cruds.resep.fields.alat_bahan') }}
                        </th>
                        <th>
                            {{ trans('cruds.resep.fields.step') }}
                        </th>
                        <th>
                            {{ trans('cruds.resep.fields.kategori') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reseps as $key => $resep)
                        <tr data-entry-id="{{ $resep->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $resep->id ?? '' }}
                            </td>
                            <td>
                                {{-- @foreach($resep->users as $key => $item)
                                    {{ $item->name }}
                                @endforeach --}}
                                {{ $resep->name }}

                            </td>
                            <td>
                                {{ $resep->nama_resep ?? '' }}
                            </td>
                            <td>
                                <img class="img-fluid" src="{{ asset('images/'.$resep->gambar) }}" height="100" width="150">
                            </td>
                            <td>
                                {{-- {!! nl2br($resep->alat_bahan) !!} --}}
                                {!! Str::limit($resep->alat_bahan, 10) !!}
                            </td>
                            <td>
                                {!! Str::limit($resep->step, 10) !!}
                            </td>
                            <td>
                                @foreach($resep->kategori as $key => $item)
                                    <span class="badge blue">{{ $item->nama_kategori }}</span>
                                @endforeach
                            </td>
                            <td>
                                @can('resep_show')
                                    <a class="btn-sm btn-indigo" href="{{ route('admin.reseps.show', $resep->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('resep_edit')
                                    <a class="btn-sm btn-blue" href="{{ route('admin.reseps.edit', $resep->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('resep_delete')
                                    <form action="{{ route('admin.reseps.destroy', $resep->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn-sm btn-red" value="{{ trans('global.delete') }}">
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
@can('resep_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.reseps.massDestroy') }}",
    className: 'btn-red',
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
  let table = $('.datatable-Resep:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
