<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact || ResepKita</title>
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
                      Kontak Kami
                  </h2>
                  <h4>Selalu Terhubung Bersama Kami</h4>
              </div>
            </div>
        </div>
    </section>

    <section class="contact">
        @if(!empty($successMsg))
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $successMsg }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="embed-responsive embed-responsive-16by9" style="height: 700px;border-radius:10px;">
                        {{-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe> --}}
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15825.092476716856!2d109.2494613!3d-7.4350009!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x959269c10818fa0c!2sSMK%20Telkom%20Purwokerto!5e0!3m2!1sid!2sid!4v1620182961565!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form method="POST" action="{{ url("contact") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                          <label for="name">Nama</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="form-group">
                          <label for="message">Pesan</label>
                          <textarea name="message" class="form-control" id="message" cols="60" rows="10" placeholder="Masukkan Pesan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </section>

    @include('template.footer')
</body>
</html>
