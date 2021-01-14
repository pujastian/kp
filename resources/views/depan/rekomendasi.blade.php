<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>APLIKASI KURIKULUM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}" />

<link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

<link type="text/css" rel="stylesheet" href="{{asset('front/css/style.css')}}" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                background-color: #22478b;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
<!-- Header -->
<header id="header">
        <!-- Nav -->
        <div id="nav">
            <!-- Main Nav -->
            <div id="nav-fixed">
                <div class="container">
                    <!-- logo -->
                    <div class="nav-logo" >
                        <a href="/" class="logo"><img src="{{asset('front/img/logos.png')}}" alt=""> </a>
                    </div>
                    <!-- /logo -->

                    <!-- nav -->
                    <ul class="nav-menu nav navbar-nav">
                        <li class="cat-1"><a href="{{ url('/depan/profil') }}">Profil</a></li>
                       <li class="cat-1"><a href="{{ url('/depan/rekomendasi') }}">Rekomendasi</a></li>
                      
     
                    </ul>
                    <!-- /nav -->

                    <!-- search & aside toggle -->
                    <div class="nav-btns">
                        <button class="aside-btn"><i class="fa fa-bars" style="color: white;"></i></button>
                        @if (Route::has('login'))
         
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
        
                        </div>
                    </div>
                    <!-- /search & aside toggle -->
                </div>
            </div>
<!-- /Main Nav -->
 
            <!-- Aside Nav -->
            <div id="nav-aside">
                <!-- nav -->
                <div class="section-row">
                    <ul class="nav-aside-menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
                <!-- /nav -->


                <!-- social links -->
                <div class="section-row">
                    <h3>Follow us</h3>
                    <ul class="nav-aside-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <!-- /social links -->

                <!-- aside nav close -->
                <button class="nav-aside-close"><i class="fa fa-times"></i></button>
                <!-- /aside nav close -->
            </div>
            <!-- Aside Nav -->
        </div>
        <!-- /Nav -->
    </header>
<br>
<br>
@include('sweetalert::alert')
        <div class="flex-center position-ref full-height">
        
        <div class="card card-primary" style="width: 100vh;">
              <div class="card-header">
                  
                <h3 class="card-title">Rekomendasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <h3 class="card-title">Rekomendasi</h3>
			  <form action="/admin/tambahrekom" method="post" style="color: white;" >
              {{ csrf_field() }}
                <div class="card-body">
               <!-- <div class="form-group">
                    <label for="idrekomendasi">Id Rekomendasi</label>
                    <input type="text" class="form-control" name="id_rekomendasi" required="required">
                  </div>-->
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" required="required">
                  </div>
				  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" required="required">
          </div>
          <div class="form-group">
                    <label for="asalinstansi">Asal Instansi</label>
                    <input type="text" class="form-control" name="asal_instansi" required="required">
          </div>
          <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" required="required">
          </div>
          <div class="form-group">
                    <label for="nohp">No HP</label>
                    <input type="text" class="form-control" name="no_hp" required="required">
          </div>
          <div class="form-group">
                    <label for="email">Email</label>
                    <input type="Email" class="form-control" name="email" required="required">
          </div>   
          <div class="form-group">
                    <label for="saranmasukan">Saran Masukan</label>
                    <textarea id="inputDescription" class="form-control" rows="5" name="saran_masukan" required="required"></textarea>
          </div>
          </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Kirim</button>
                 <button type="button" onclick="history.back();" value="Back" class="btn btn-warning"><i class="nav-icon fa fa-chevron-left" ></i> Kembali</button>
                </div>	 
                 
                
              </form>
     
            </div>
            
            
        </div>
        <!-- Footer -->
    <footer id="footer">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html" class="logo"><img src="{{asset('front/img/logostmik.png')}}" alt=""></a>
                        </div>
                        <ul class="footer-nav">
                            <li><a href="https://stmik-sumedang.ac.id/"><i class="fa fa-university"></i>  STMIK Sumedang</a></li><br>
                            <li><a href="#"><i class="fa fa-map-o"></i>  Jl.Angkrek Situ NO.19 Sumedang</a></li><br>
                            <li><a href="#"><i class="fa fa-phone"></i>  (0261) 207395</a></li><br>
                            <li><a href="#"><i class="fa fa-envelope"></i>  info@stmik-sumedang.ac.id</a></li><br>
                        </ul>
                        <div class="footer-copyright">
                            <span>&copy;
                                <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">colorlib</a>
                        </div>
                    </div>
                </div>

                <!--<div class="col-md-4">
                    <div class="row">
                    
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">Catagories</h3>
                                <ul class="footer-links">
                                    <li><a href="category.html">Web Design</a></li>
                                    <li><a href="category.html">JavaScript</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
      <!-- <div class="col-md-3">
        <div class="footer-widget">
            <h3 class="footer-title">Join our Newsletter</h3>
            <div class="footer-newsletter">
                <form>
                    <input class="input" type="email" name="newsletter" placeholder="Enter your email">
                    <button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
                </form>
            </div>
            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
        </div>
    </div> -->
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>
</div>
<!-- /row -->
</div>
<!-- /container -->
</footer>
<!-- /Footer -->
    </body>
</html>
