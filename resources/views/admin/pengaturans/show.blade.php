@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pengaturan.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pengaturans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pengaturan.fields.id') }}
                        </th>
                        <td>
                            {{ $pengaturan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pengaturan.fields.key') }}
                        </th>
                        <td>
                            {{ $pengaturan->key }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pengaturan.fields.value') }}
                        </th>
                        <td>
                            {!! $pengaturan->value !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pengaturans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection