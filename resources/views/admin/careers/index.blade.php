@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Job Application List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Career">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        
                        <th>
                            Nama
                        </th>
                        <th>
                            Pekerjaan yang dilamar
                        </th>
                        <th>
                            CV
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    {{-- <tr>
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
                    </tr> --}}
                </thead>
                <tbody>
                    @foreach($careers as $key => $career)
                        <tr data-entry-id="{{ $career->id }}">
                            <td>

                            </td>
                            
                            <td>
                                {!! $career->nama ?? '' !!}
                            </td>
                            <td>
                                {!! $career->job->name ?? '' !!}
                            </td>
                            <td>
                                @if (!empty($career->cv))
                                <a href="{!! $career->cv->getUrl() !!}">CV {!! $career->nama ?? '' !!}</a> 
                                @endif
                            </td>
                            <td>
                                @can('career_access')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.careers.show', $career->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
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


  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Career:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection