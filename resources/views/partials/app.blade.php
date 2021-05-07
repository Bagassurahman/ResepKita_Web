<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="{{ url('admin') }}">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                    <h6 class="text-white">Dashboard</h6>
                </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <a href="{{route('admin.kategories.index')}}">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-tag-multiple"></i></h1>
                    <h6 class="text-white">Kategori</h6>
                </div>
            </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="{{ route('admin.contacts.index') }}">
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                    <h6 class="text-white">Contacts</h6>
                </div>
            </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <a href="{{route('admin.users.index')}}">
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                    <h6 class="text-white">Users</h6>
                </div>
            </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <a href="{{route('admin.reseps.index')}}">
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                    <h6 class="text-white">Resep</h6>
                </div>
            </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
        <a href="{{route('admin.reseps.create')}}">
            <div class="card card-hover">
                <div class="box bg-info text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-plus-box"></i></h1>
                    <h6 class="text-white">Add Resep</h6>
                </div>
            </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
        <a href="{{route('admin.kategories.create')}}">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                    <h6 class="text-white">Kategori Create</h6>
                </div>
            </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="{{url('/')}}">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                        <h6 class="text-white">Landing Page</h6>
                    </div>
                </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-logout"></i></h1>
                    <h6 class="text-white">Logout</h6>
                </div>
            </div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- column -->
                        <div class="col-lg-9 text-center">
                            <div>
                                <h4 class="card-title" style="font-size: 36px;">Selamat Datang Di Resep.Kita,</h4>
                                <h5 class="card-subtitle" style="font-size: 24px;">{{ Auth::user()->name }}</h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-user mb-1 font-16"></i>
                                        <h5 class="mb-0 mt-1">{{ App\User::all()->count() }}</h5>
                                        <small class="font-light">Total Users</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fas fa-utensils mb-1 font-16"></i>
                                        <h5 class="mb-0 mt-1">{{ App\Resep::all()->count() }}</h5>
                                        <small class="font-light">Total Resep</small>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-tag mb-1 font-16"></i>
                                        <h5 class="mb-0 mt-1">{{ App\Kategori::all()->count() }}</h5>
                                        <small class="font-light">Total Kategori</small>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-id-card mb-1 font-16"></i>
                                        <h5 class="mb-0 mt-1">{{ App\Contact::all()->count() }}</h5>
                                        <small class="font-light">Total Contacts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->

        <!-- column -->


    </div>
</body>
</html>
