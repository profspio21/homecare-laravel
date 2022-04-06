@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.career.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.careers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.career.fields.id') }}
                        </th>
                        <td>
                            {{ $career->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama
                        </th>
                        <td>
                            {{ $career->nama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Pekerjaan yang dilamar
                        </th>
                        <td>
                            {{ $career->job->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gender
                        </th>
                        <td>
                            {{ $career->gender->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email
                        </th>
                        <td>
                            {!! $career->email !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            No HP
                        </th>
                        <td>
                            {!! $career->no_hp !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal lahir
                        </th>
                        <td>
                            {!! $career->ttl !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Alamat
                        </th>
                        <td>
                            {!! $career->alamat !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tinggi badan
                        </th>
                        <td>
                            {!! $career->tinggi !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Berat badan
                        </th>
                        <td>
                            {!! $career->berat !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Agama
                        </th>
                        <td>
                            {!! $career->agama !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Surat Lamaran
                        </th>
                        <td>
                            @if (!empty($career->lamaran))
                            <a href="{!! $career->lamaran->getUrl() !!}" target="_blank">Surat Lamaran</a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            CV
                        </th>
                        <td>
                            @if (!empty($career->cv))
                            <a href="{!! $career->cv->getUrl() !!}" target="_blank">CV</a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.careers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection