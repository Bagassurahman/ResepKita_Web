<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resep || ResepKita</title>
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
        .jumbotron{
            background: url('{{ asset('img/bg-resep.png') }}');
        }
        .jumbotron .jumbotron-text h2{
            color: #ffffff;
            font-style: normal;
            font-weight: bold;
            font-size: 50px;
            line-height: 67px;
        }
        .jumbotron .jumbotron-text h4{
            font-style: normal;
            font-weight: bold;
            font-size: 18px;
            line-height: 22px;

            color: #FFFFFF;
        }

        .card-cntnt .card{
            border-radius: 10px;
        }
        .card-cntnt .card .card-body .card-text{
            font-weight: 600;
            font-size: 14px;
            line-height: 16px;
        }
        .card-cntnt .card .card-body .card-title{
            font-weight: 700;
            font-size: 24px;
            line-height: 26px;
            color: #000000;
        }
        .card-cntnt .card .card-body a{
            font-size: 14px;
        }
    </style>
</head>
<body>
    @include('template.navigation')

    {{-- Content Home --}}
    <section id="jumbotron">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <div class="jumbotron-text text-center align-items-center p-5">
                  <h2 class="">
                      Tutorial Terbaru
                  </h2>
                  <h4>Tutorial menarik yang harus Anda coba</h4>
              </div>
            </div>
        </div>
      </section>


      <section class="content">
          <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-left text-bold mb-4">Kategori :</h4>
                            @foreach ($kategori as $key => $item)
                            <p class="text-left">{{ $loop->iteration }}. {{ $item->nama_kategori }}</p>

                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card-cntnt col-lg-8">
                    <div class="row pt-3">
                        @foreach ($reseps as $key => $resep)
                          <div class="col-lg-6 col-md col-sm">

                            <div class="card mt-2 mx-auto" style="width: 18rem;">
                              <img src="{{ asset('images/'.$resep->gambar) }}" class="card-img-top img-fluid" alt="..." style="width:100%;height:300px;border-radius:10px 10px 0 0;">
                              <div class="card-body">
                                  <h1 class="card-title text-center text-capitalize">{{ $resep->nama_resep }}</h1>
                                  <h3 class="card-text text-left text-bold pt-2" style="font-weight:900;">Description : </h3>
                                @if ($resep->description == '')
                                <h3 class="card-text text-justify">No Description</h3>
                                @else
                                <h3 class="card-text text-justify">{!! Str::of($resep->description)->words(10, ' ....') !!}</h3>                                </h3>
                                {{-- <h3 class="card-text text-justify">{!! Str::limit($resep->description, 6) !!}</h3> --}}

                                @endif
                                <a href="{{ url('resep_detail', $resep->id) }}" class="float-right pt-3">Detail Resep <i class="fas fa-long-arrow-alt-right"></i></a>
                              </div>
                              <div class="card-footer text-left">
                                  @foreach($resep->kategori as $key => $item)

                                      <p class="d-inline-flex"><i class="fas fa-tags"></i> {{ $item->nama_kategori }}</p>
                                  @endforeach
                              </div>
                            </div>

                          </div>
                          @endforeach

                      </div>
                      <div class="d-flex justify-content-center pt-5">
                        {!! $reseps->links() !!}
                      </div>
                </div>
            </div>
          </div>
      </section>

      @include('template.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>
