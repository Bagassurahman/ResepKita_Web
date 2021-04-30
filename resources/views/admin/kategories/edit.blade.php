@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        {{ trans('global.edit') }} {{ trans('cruds.resep.title_singular') }}
    </div>

    <form method="POST" action="{{ route("admin.reseps.update", [$resep->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="body">
            <div class="mb-3">
                <label for="name" class="text-xs required">{{ trans('cruds.resep.fields.nama_resep') }}</label>

                <div class="form-group">
                    <input type="text" id="nama_resep" name="nama_resep" class="{{ $errors->has('nama_resep') ? ' is-invalid' : '' }}" value="{{ $resep->nama_resep }}" required>
                </div>
                @if($errors->has('nama_resep'))
                    <p class="invalid-feedback">{{ $errors->first('nama_resep') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="name" class="text-xs required">{{ trans('cruds.resep.fields.users') }}</label>

                <div class="form-group">
                        <input type="text" id="name" name="name" readonly class="{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $resep->name }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="gambar" class="text-xs required">{{ trans('cruds.resep.fields.gambar') }}</label>

                <div class="form-group">
                    <input type="file" id="gambar" name="gambar" class="{{ $errors->has('gambar') ? ' is-invalid' : '' }}" value="{{ url('images/'.$resep->gambar) }}">
                </div>
                @if($errors->has('gambar'))
                    <p class="invalid-feedback">{{ $errors->first('gambar') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="alat_bahan" class="text-xs required">{{ trans('cruds.resep.fields.alat_bahan') }}</label>

                <div class="form-group">
                    {{-- <input type="text" id="name" name="nama_resep" class="{{ $errors->has('nama_resep') ? ' is-invalid' : '' }}" value="{{ old('nama_resep') }}" required> --}}
                    <textarea class="alat_bahan" name="alat_bahan" class="{{ $errors->has('alat_bahan') ? ' is-invalid' : '' }}" placeholder="Alat dan bahan" rows="10" required>{{ $resep->alat_bahan }}</textarea>
                </div>
                @if($errors->has('alat_bahan'))
                    <p class="invalid-feedback">{{ $errors->first('alat_bahan') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="step" class="text-xs required">{{ trans('cruds.resep.fields.step') }}</label>

                <div class="form-group">
                    {{-- <input type="text" id="name" name="nama_resep" class="{{ $errors->has('nama_resep') ? ' is-invalid' : '' }}" value="{{ old('nama_resep') }}" required> --}}
                    <textarea name="step" class="{{ $errors->has('step') ? ' is-invalid' : '' }}" placeholder="Steps" rows="12" required>{{ $resep->step }}</textarea>
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
                        <option value="{{ $id }}" {{ (in_array($id, old('kategori', [])) || $resep->kategori->contains($id)) ? 'selected' : '' }}>{{ $kategories }}</option>
                    @endforeach
                </select>
                @if($errors->has('kategori'))
                    <p class="invalid-feedback">{{ $errors->first('kategori') }}</p>
                @endif
            </div>
            {{-- <div class="mb-3">
                <label for="users" class="text-xs">{{ trans('cruds.project.fields.users') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn-sm btn-indigo select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn-sm btn-indigo deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="select2{{ $errors->has('users') ? ' is-invalid' : '' }}" name="users[]" id="users" multiple>
                    @foreach($users as $id => $users)
                        <option value="{{ $id }}" {{ (in_array($id, old('users', [])) || $project->users->contains($id)) ? 'selected' : '' }}>{{ $users }}</option>
                    @endforeach
                </select>
                @if($errors->has('users'))
                    <p class="invalid-feedback">{{ $errors->first('users') }}</p>
                @endif
                <span class="block">{{ trans('cruds.project.fields.users_helper') }}</span>
            </div> --}}
        </div>

        <div class="footer">
            <button type="submit" class="submit-button">{{ trans('global.save') }}</button>
        </div>
    </form>
</div>
@endsection
