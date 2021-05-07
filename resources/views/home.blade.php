@extends('layouts.admin')
@section('content')
<div class="main-card">

    <div class="header">
        Dashboard
    </div>

    <div class="body">
        @if(session('status'))
            <div class="alert success">
                {{ session('status') }}
            </div>
        @endif

        @include('partials.app')
        {{-- <div class="row">
            <div class="col-6">
                <div class="bg-dark p-10 text-white text-center">
                    <i class="fa fa-user mb-1 font-16"></i>
                    <h5 class="mb-0 mt-1">{{ App\User::all()->count() }}</h5>
                    <small class="font-light">Total Users</small>
                </div>
            </div>
            <div class="col-6">
                <div class="bg-dark p-10 text-white text-center">
                    <i class="fa fa-plus mb-1 font-16"></i>
                    <h5 class="mb-0 mt-1">{{ App\Resep::all()->count() }}</h5>
                    <small class="font-light">Total Reseps</small>
                </div>
            </div>
            <div class="col-6">
                <div class="bg-dark p-10 text-white text-center">
                    <i class="fa fa-plus mb-1 font-16"></i>
                    <h5 class="mb-0 mt-1">{{ App\Kategori::all()->count() }}</h5>
                    <small class="font-light">Total Ketagories</small>
                </div>
            </div>
            <div class="col-6">
                <div class="bg-dark p-10 text-white text-center">
                    <i class="fa fa-plus mb-1 font-16"></i>
                    <h5 class="mb-0 mt-1">{{ App\Contact::all()->count() }}</h5>
                    <small class="font-light">Total Contacts</small>
                </div>
            </div>
        </div> --}}

    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
