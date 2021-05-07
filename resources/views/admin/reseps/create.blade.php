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
        {{ trans('global.create') }} {{ trans('cruds.resep.title_singular') }}
    </div>

    <form method="POST" action="{{ route("admin.reseps.store") }}" enctype="multipart/form-data">
        @csrf
        <div class="body">
            <div class="mb-3">
                <label for="name" class="text-xs required">{{ trans('cruds.resep.fields.nama_resep') }}</label>

                <div class="form-group">
                    <input type="text" id="nama_resep" name="nama_resep" class="{{ $errors->has('nama_resep') ? ' is-invalid' : '' }}" value="{{ old('nama_resep') }}" required>
                </div>
                @if($errors->has('nama_resep'))
                    <p class="invalid-feedback">{{ $errors->first('nama_resep') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="name" class="text-xs required">{{ trans('cruds.resep.fields.users') }}</label>

                <div class="form-group">
                        <input type="text" id="name" name="name" readonly class="{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name', Auth::user()->name) }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="description" class="text-xs required">Description</label>

                <div class="form-group">
                    {{-- <input type="text" id="name" name="nama_resep" class="{{ $errors->has('nama_resep') ? ' is-invalid' : '' }}" value="{{ old('nama_resep') }}" required> --}}
                    <textarea id="summernote" name="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Description" rows="10" required></textarea>
                </div>
                @if($errors->has('description'))
                    <p class="invalid-feedback">{{ $errors->first('description') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="gambar" class="text-xs required">{{ trans('cruds.resep.fields.gambar') }}</label>

                <div class="form-group">
                    <input type="file" id="gambar" name="gambar" class="{{ $errors->has('gambar') ? ' is-invalid' : '' }}" value="{{ old('gambar') }}">
                </div>
                @if($errors->has('gambar'))
                    <p class="invalid-feedback">{{ $errors->first('gambar') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="alat_bahan" class="text-xs required">{{ trans('cruds.resep.fields.alat_bahan') }}</label>

                <div class="form-group">
                    {{-- <input type="text" id="name" name="nama_resep" class="{{ $errors->has('nama_resep') ? ' is-invalid' : '' }}" value="{{ old('nama_resep') }}" required> --}}
                    <textarea id="summernote_ab" name="alat_bahan" class="{{ $errors->has('alat_bahan') ? ' is-invalid' : '' }}" placeholder="Alat dan bahan" rows="10" required></textarea>
                </div>
                @if($errors->has('alat_bahan'))
                    <p class="invalid-feedback">{{ $errors->first('alat_bahan') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="step" class="text-xs required">{{ trans('cruds.resep.fields.step') }}</label>

                <div class="form-group">
                    {{-- <input type="text" id="name" name="nama_resep" class="{{ $errors->has('nama_resep') ? ' is-invalid' : '' }}" value="{{ old('nama_resep') }}" required> --}}
                    <textarea id="summernote_step" name="step" class="{{ $errors->has('step') ? ' is-invalid' : '' }}" placeholder="Steps" rows="12" required></textarea>
                </div>
                @if($errors->has('step'))
                    <p class="invalid-feedback">{{ $errors->first('step') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="kategori" class="text-xs">{{ trans('cruds.resep.fields.kategori') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn-sm btn-indigo select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn-sm btn-indigo deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="select2{{ $errors->has('kategori') ? ' is-invalid' : '' }}" name="kategori[]" id="kategori" multiple>
                    @foreach($kategories as $id => $kategories)
                        <option value="{{ $id }}" {{ in_array($id, old('kategori', [])) ? 'selected' : '' }}>{{ $kategories }}</option>
                    @endforeach
                </select>
                @if($errors->has('kategori'))
                    <p class="invalid-feedback">{{ $errors->first('kategori') }}</p>
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
        $('#summernote_ab').summernote({
            tabsize: 2,
            height: 200
          });
        $('#summernote_step').summernote({
            tabsize: 2,
            height: 200
          });
    </script>
</div>
@endsection
