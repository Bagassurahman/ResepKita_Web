<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home || ResepKita</title>

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
        <!-- Styles -->
        @yield('head')


        <style>
            .resep .title .title-top{
                font-style: normal;
                font-weight: bold;
                font-size: 18px;
                line-height: 21px;
                color: #FD8F13;
            }
            .resep .title .title-bottom{
                font-style: normal;
                font-weight: 900;
                font-size: 45px;
                line-height: 60px;
            }
            .card{
                border-radius: 10px;
            }
            .card .card-body .card-text{
                font-weight: 600;
                font-size: 14px;
                line-height: 16px;
            }
            .card .card-body .card-title{
                font-weight: 700;
                font-size: 24px;
                line-height: 26px;
                color: #000000;
            }
            .card .card-body a{
                font-size: 14px;
            }

            .berbagi .title .title-bottom{
                font-style: normal;
                font-weight: bold;
                font-size: 18px;
                line-height: 21px;
                color: #FD8F13;
            }
            .berbagi .title .title-top{
                font-style: normal;
                font-weight: 900;
                font-size: 45px;
                line-height: 60px;
            }
        </style>
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> --}}


        {{-- Nav --}}
        @include('template.navigation')

          {{-- Content Home --}}
          <section id="jumbotron">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <div class="row align-items-center">
                      <div class="desc col-lg-4  col-md-12 col-sm-12 text-lg-left text-md-center text-sm-center text-center">
                          <h2 class="" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">Selamat Datang Di Resep.Kita</h2>
                          <a class="btn btn-dark mt-3" href="{{ route('login') }}" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">Cari Tahu Sekarang <i class="far fa-arrow-alt-circle-right"></i></a>

                          <div class="sosmed pt-5 pr-5 mx-auto">
                              <div class="row mx-auto">
                                  <div class="col">
                                    <a href="https://instagram.com/stematelpwt" data-aos="fade-down-right" data-aos-easing="linear" data-aos-duration="100">
                                        <i class="fab fa-instagram rounded-circle"></i>
                                    </a>
                                  </div>
                                  <div class="col" data-aos="fade-down-right" data-aos-easing="linear" data-aos-duration="200">
                                    <a href="https://instagram.com/stematelpwt">
                                        <i class="fab fa-twitter rounded-circle"></i>
                                    </a>
                                  </div>
                                  <div class="col" data-aos="fade-down-left" data-aos-easing="linear" data-aos-duration="300">
                                    <a href="https://instagram.com/stematelpwt">
                                        <i class="fab fa-google rounded-circle"></i>
                                    </a>
                                  </div>
                                  <div class="col" data-aos="fade-down-left" data-aos-easing="linear" data-aos-duration="400">
                                    <a href="https://instagram.com/stematelpwt">
                                        <i class="fab fa-youtube rounded-circle"></i>
                                    </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-8 col-md col-sm d-sm-none d-md-none d-lg-block d-none"  data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                          <img class="img-fluid" src="{{asset('img/db.png')}}" alt="">
                      </div>
                  </div>
                </div>
            </div>
          </section>

          {{-- About Us --}}
          <section id="about">
              <div class="container">
                <div class="row align-items-center">
                    <div class="img col-lg-6 col-md col-sm" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500" data-aos-anchor-placement="center-bottom">
                        <img class="img-fluid" src="{{ asset('img/bg_about.png') }}" alt="">
                    </div>
                    <div class="desc col-lg-6 col-md col-sm mt-5 text-lg-left text-md-center text-sm-center text-center">
                        <h3 class="text-lg-left text-md-center text-sm-center text-center" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">Tentang Kami</h3>
                        <p class=" mt-5" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">Memasak adalah salah satu hal yang diperlukan dalam kehidupan sehari - hari. Namun sering kali kita kehabisan resep, sehingga muncul pertanyaan harus masak apa hari ini?

                            Resep kita bisa menjadi solusi masalah ini, kalian bisa melihat berbagai resep masakan mulai dari yang simple dan pemula friendly yang tentunya lengkap dengan bahan dan penjelasan.</p>
                        <a href="{{ url('resep') }}" class="btn btn-warning p-2 text-white" style="background: #FD8F13;" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Lihat Resep</a>
                    </div>
                </div>
              </div>
          </section>

          {{-- @yield('resep') --}}
          {{-- Card Resep --}}
          <section class="resep" id="resep">
            <div class="container pt-5">
                <div class="title text-center">
                    <h4 class="title-top" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="200">Beberapa Resep</h4>
                    <h2 class="title-bottom" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="300">Resep Favorit</h2>
                </div>
                  <div class="row pt-3">
                    @foreach (($reseps)->take(6) as $key => $resep)
                      <div class="col-lg-4 col-md col-sm">

                        <div class="card mt-2 mx-auto" style="width: 18rem;" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="300">
                          <img src="{{ asset('images/'.$resep->gambar) }}" class="card-img-top img-fluid" alt="..." style="width:100%;height:300px;border-radius:10px 10px 0 0;">
                          <div class="card-body">
                              <h1 class="card-title text-center text-capitalize">{{ $resep->nama_resep }}</h1>
                              <h3 class="card-text text-bold pt-2" style="font-weight:900;">Description : </h3>
                            @if ($resep->description == '')
                            <h3 class="card-text text-justify">No Description</h3>
                            @else
                            <h3 class="card-text text-justify">{!! Str::of($resep->description)->words(10, ' ....') !!}</h3>

                            @endif
                            <a href="{{ url('resep_detail', $resep->id) }}" class="float-right pt-3">Detail Resep <i class="fas fa-long-arrow-alt-right"></i></a>
                          </div>
                          <div class="card-footer">
                              @foreach(($resep->kategori)->take(2) as $key => $item)

                                  <p class="d-inline-flex"><i class="fas fa-tags"></i> {{ $item->nama_kategori }}</p>
                              @endforeach
                          </div>
                        </div>

                      </div>
                      @endforeach
                  </div>
              </div>
          </section>

          {{-- Berbagi Resep --}}
          <section class="berbagi" id="berbagi">
              <div class="container pt-5">
                <div class="title text-center">
                    <h2 class="title-top" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="200">Berbagi Resep</h2>
                    <h4 class="title-bottom" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="300">yuk tulis resep ala kamu!</h4>
                </div>
                  <div class="row pt-3">
                      <div class="col-lg-4 col-md col-sm mt-2">
                          <div class="card" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="200">
                              <div class="card-body text-center p-5">
                                <i class="fas fa-user-plus" style="font-size:46px;color:#FD8F13;"></i>
                                  <p class="card-text mt-2">
                                    Bergabung bersama ResepKita dengan mendaftarkan akun anda melalui form pendaftaran. Gunakan email anda untuk mendaftar.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md col-sm mt-2">
                          <div class="card" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="300">
                              <div class="card-body text-center p-5">
                                <i class="fas fa-upload" style="font-size:46px;color:#FD8F13;"></i>
                                  <p class="card-text mt-2">
                                    Buat tutorial menarik sesuai dengan bidang anda. Tutorial dapat berupa step-step tertulis maupun video dari youtube.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md col-sm mt-2">
                          <div class="card" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                              <div class="card-body text-center p-5 m-3">
                                <i class="fas fa-clipboard-check" style="font-size:46px;color:#FD8F13;"></i>
                                  <p class="card-text mt-2">
                                    Resep diterima oleh admin, dan berhasil diupload
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>




         {{-- <div class="container">

                    <section class="resep pt-3">
                        <div class="row">
                            @foreach ($reseps as $key => $resep)
                             <div class="col-4">
                                <div class="cards d-inline-flex"  style="width: 180rem;">
                                    <article class="card card--1">
                                        <div class="card__info-hover">
                                        <svg class="card__like" viewBox="0 0 24 24">
                                            <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                        </svg>
                                        <div class="card__clock-info">
                                            <svg class="card__clock" viewBox="0 0 24 24">
                                            <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                                            </svg><span class="card__time">15 min</span>
                                        </div>

                                        </div>
                                        <div class="card__img"></div>
                                        <a href="#" class="card_link">
                                        <div class="card__img--hover">
                                            <img src="{{ asset('images/'.$resep->gambar) }}" alt="">
                                        </div>
                                        </a>
                                        <div class="card__info">
                                        <span class="card__category">{{ $resep->nama_resep }}</span>
                                        <h3 class="card__title">{{ $resep->description }}</h3>
                                        <span class="card__by">by <a href="#" class="card__author" title="author">{{ $resep->name }}</a></span>
                                        </div>
                                    </article>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>

         </div> --}}


          {{-- Footer --}}
          @include('template.footer')


          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    </body>
</html>
