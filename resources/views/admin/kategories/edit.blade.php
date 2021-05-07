@extends('layouts.admin')
@section('content')
<div class="main-card">

    {{-- Head --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    {{-- End Head --}}

    <div class="header">
        {{ trans('global.edit') }} {{ trans('cruds.kategori.title_singular') }}
    </div>

    <form method="POST" action="{{ route("admin.kategories.update", [$kategori->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="body">
            <div class="mb-3">
                <label for="name" class="text-xs required">{{ trans('cruds.kategori.fields.nama_kategori') }}</label>

                <div class="form-group">
                    <input type="text" id="nama_kategori" name="nama_kategori" class="{{ $errors->has('nama_kategori') ? ' is-invalid' : '' }}" value="{{ $kategori->nama_kategori }}" required>
                </div>
                @if($errors->has('nama_kategori'))
                    <p class="invalid-feedback">{{ $errors->first('nama_kategori') }}</p>
                @endif
            </div>
            {{-- <div class="mb-3">
                <label for="slug" class="text-xs required">{{ trans('cruds.kategori.fields.slug') }}</label>

                <div class="form-group">
                        <input type="text" id="slug" name="slug" class="{{ $errors->has('slug') ? ' is-invalid' : '' }}" value="{{ $kategori->slug }}" required>
                </div>
                @if($errors->has('slug'))
                    <p class="invalid-feedback">{{ $errors->first('slug') }}</p>
                @endif
            </div> --}}
            <div class="mb-3">
                <label for="gambar_sampul" class="text-xs required">{{ trans('cruds.kategori.fields.gambar_sampul') }}</label>
                @if ($kategori->gambar_sampul)
                    <img id="gambar_sampul" src="{{ asset('images/'.$kategori->gambar_sampul) }}" height="100" width="150"><br>
                @endif
                <div class="form-group">
                    <input type="file" id="gambar_sampul" name="gambar_sampul" class="{{ $errors->has('gambar_sampul') ? ' is-invalid' : '' }}" value="{{ url('images/'.$kategori->gambar_sampul) }}">
                </div>
                @if($errors->has('gambar_sampul'))
                    <p class="invalid-feedback">{{ $errors->first('gambar_sampul') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="keterangan" class="text-xs required">{{ trans('cruds.kategori.fields.keterangan') }}</label>

                <div class="form-group">
                    {{-- <input type="text" id="name" name="nama_resep" class="{{ $errors->has('nama_resep') ? ' is-invalid' : '' }}" value="{{ old('nama_resep') }}" required> --}}
                    <textarea id="summernote" class="keterangan" name="keterangan" class="{{ $errors->has('keterangan') ? ' is-invalid' : '' }}" placeholder="Alat dan bahan" rows="10" required>{{ $kategori->keterangan }}</textarea>
                </div>
                @if($errors->has('keterangan'))
                    <p class="invalid-feedback">{{ $errors->first('keterangan') }}</p>
                @endif
            </div>
        </div>

        <div class="footer">
            <button type="submit" class="submit-button">{{ trans('global.save') }}</button>
        </div>
    </form>

    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 200
          });
    </script>
</div>
@endsection
