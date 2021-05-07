<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Resep</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    {{-- UI KIT --}}
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.20/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.20/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.20/dist/js/uikit-icons.min.js"></script>


    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://kit.fontawesome.com/7b36f2302d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <style>
        body{
            font-family:'Poppins', sans-serif;
        }
        .card .card-body h4{
            font-style: normal;
            font-weight: 600;
            font-size: 22px;
            line-height: 27px;
        }
        .card .card-body p{
            font-style: normal;
            font-weight: 200;
            font-size: 16px;
            line-height: 21px;
            text-align: justify;
        }
        .card{
            border-radius: 10px;
            background: #F9FAFA;
            border: none;
        }
        .title-detail{
            font-weight: 700;
            font-size: 36px;
            line-height: 21px;
        }

        .jumbotron h1{
            font-weight: 700;
            font-size: 46px;
            line-height: 31px;
        }
    </style>
</head>
<body>
    @include('template.navigation')

    <div class="jumbotron jumbotron-fluid" style="background: #ffd198bd">
        <div class="container text-center col-lg-8 col-md col-sm">
          <h1 class="display-4">{{ $resep->nama_resep }}</h1>
          <p class="lead mt-5">{!! $resep->description !!}</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="back p-3">
                <a class="text-dark text-decoration-none" href="{{ url()->previous() }}"><i class="fas fa-home"></i> Back</a>
            </div>
        </div>
        <div class="row">
            {{-- @php
                $resep = DB::select('select * from resep where id = ?', [1]);
                $resep = Resep::find($id);
            @endphp --}}
            <div class="col-lg-8 col-md col-sm">
                <img class="img-fluid" src="{{ asset('images/'.$resep->gambar) }}" style="height: 500px;width:max-content;border-radius:10px;">
                <h2 class="title-detail text-capitalize text-center mt-3 mb-3">~ {{ $resep->nama_resep }} ~</h2>
                <div class="card mt-3">
                    <div class="card-body">
                        <h4>Description :</h4>
                        <p>{!! $resep->description !!}</p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h4>Alat Dan Bahan :</h4>
                        <p>{!! $resep->alat_bahan !!}</p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h4>Step :</h4>
                        <p>{!! $resep->step !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md col-sm">
                <div class="card mt-5 p-2">
                    <div class="card-body">
                        <h4>Resep Dari :</h4>
                        <p><i class="fas fa-user-circle"></i>  {{ $resep->name }}</p>
                    </div>
                </div>
                <div class="card mt-5 p-2">
                    <div class="card-body">
                        <h4>Tags :</h4>
                        @foreach($resep->kategori as $key => $kategories)
                            <span class="badge badge-primary"><i class="fas fa-tags"></i>  {{ $kategories->nama_kategori }}</span>
                        @endforeach
                    </div>
                </div>
                {{-- Resep Terbaru --}}
                {{-- <div class="hotresep">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h2 class="title-hot">Resep Terbaru</h2>
                            @php
                                $hot = DB::table('resep')->orderBy('created_at', 'ASC')->take(3)->get();

                            @endphp
                            @foreach ($hot as $key => $item)
                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="{{ asset('images/'.$resep->gambar) }}" style="border-radius:10px;">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>

    @include('template.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>
