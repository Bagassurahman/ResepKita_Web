@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        {{ trans('global.show') }} {{ trans('cruds.resep.title') }}
    </div>

    <div class="body">
        <div class="block pb-4">
            <a class="btn-md btn-gray" href="{{ route('admin.reseps.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
        <table class="striped bordered show-table">
            <tbody>
                <tr>
                    <th>
                        {{ trans('cruds.resep.fields.id') }}
                    </th>
                    <td>
                        {{ $resep->id }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.resep.fields.users') }}
                    </th>
                    <td>
                        {{-- @foreach($users as $id => $users)
                            <span>{{ $users }}</span>
                        @endforeach --}}
                        {{ $resep->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.resep.fields.nama_resep') }}
                    </th>
                    <td>
                        {{ $resep->nama_resep }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.resep.fields.gambar') }}
                    </th>
                    <td>
                        <img class="img-fluid" src="{{ asset('images/'.$resep->gambar) }}" height="100" width="150">
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.resep.fields.alat_bahan') }}
                    </th>
                    <td>
                        {{ $resep->alat_bahan }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.resep.fields.step') }}
                    </th>
                    <td>
                        {{ $resep->step }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.resep.fields.kategori') }}
                    </th>
                    <td>
                        @foreach($resep->kategori as $key => $kategories)
                            <span class="label label-info">{{ $kategories->nama_kategori }}</span>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="block pt-4">
            <a class="btn-md btn-gray" href="{{ route('admin.reseps.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>
@endsection
