@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        {{ trans('global.show') }} {{ trans('cruds.kategori.title') }}
    </div>

    <div class="body">
        <div class="block pb-4">
            <a class="btn-md btn-gray" href="{{ route('admin.kategories.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
        <table class="striped bordered show-table">

            <tbody>
                {{-- @foreach ($kategori as $key => $kategori) --}}
                <tr>
                    <th>
                        {{ trans('cruds.kategori.fields.id') }}
                    </th>
                    <td>
                        {{ $kategori->id }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.kategori.fields.nama_kategori') }}
                    </th>
                    <td>
                        {{ $kategori->nama_kategori }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.kategori.fields.gambar_sampul') }}
                    </th>
                    <td>
                        <img class="img-fluid" src="{{ asset('images/'.$kategori->gambar_sampul) }}" height="100" width="150">
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.kategori.fields.slug') }}
                    </th>
                    <td>
                        {{ $kategori->slug }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.kategori.fields.keterangan') }}
                    </th>
                    <td>
                        {!! $kategori->keterangan !!}
                    </td>
                </tr>

                {{-- @endforeach --}}
            </tbody>
        </table>
        <div class="block pt-4">
            <a class="btn-md btn-gray" href="{{ route('admin.kategories.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>
@endsection
