<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Arsha Bootstrap Template - Index</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{asset('admin/front_end/assets/img/favicon.png')}}" rel="icon">
        <link href="{{asset('admin/front_end/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('admin/front_end/assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('admin/front_end/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/front_end/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('admin/front_end/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/front_end/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/front_end/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{asset('admin/front_end/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('admin/front_end/assets/css/style.css')}}" rel="stylesheet">

        <!-- =======================================================
        * Template Name: Arsha - v4.3.0
        * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
      </head>

    <body>

      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

          <h1 class="logo me-auto"><a href="index.html">ร้านเกรียนกะ’บาลBarbershop</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#portfolio">Menu</a></li>
              <li><a class="nav-link scrollto" href="#team">Team</a></li>
              <li><a class="nav-link scrollto" href="#Content">Content</a></li>
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

              <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                <div class="top-right links">
                  @auth
                  <a class="nav-link" href="{{ url('/home') }}">Home</a>
                  @else
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
                  @endauth
                </div>
                @endif
              </div>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

        </div>
      </header><!-- End Header -->

      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center">

        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

              <div class="d-flex justify-content-center justify-content-lg-start">


              </div>
            </div>
            @foreach ($header as $headers )

            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{asset('admin/images/'.$headers->image)}}" class="img-fluid animated" alt="">
            </div>
            @endforeach
          </div>
        </div>

      </section><!-- End Hero -->

      <main id="main">


        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Menu</h2>



            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

    @foreach ($hairstyle as $hairstyles)
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-img"><img src="{{asset('admin/images/'.$hairstyles->image)}}" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <h4>{{$hairstyles->name}}</h4>
                  <p>{{$hairstyles->price}}</p>
                </div>
              </div>

    @endforeach


            </div>

          </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Team</h2>

            </div>

            <div class="row">

              <div class="col-lg-6">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="{{asset('admin/front_end/assets/img/team/tor11.png')}}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>อาจารย์ศิริรัตน์ ม่วงเถื่อน</h4>
                    <span>Ms.Sirirat Muangthen</span>

                    <div class="social">

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img src="{{asset('admin/front_end/assets/img/team/tor12.png')}}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>นายกรฤทธิ์ ปะระกำ</h4>
                    <span>Mr.Korarit Parakam</span>

                    <div class="social">

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                  <div class="pic"><img src="{{asset('admin/front_end/assets/img/team/tor13.png')}}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>นายลภัส ประคองศิลป์</h4>
                    <span>Mr.Lapas Prakongsil</span>

                    <div class="social">

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                  <div class="pic"><img src="{{asset('admin/front_end/assets/img/team/tor14.png')}}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>นายรัชชานนท์ ศรีทอง</h4>
                    <span>Mr.Ratchanon Srithong</span>

                    <div class="social">
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Team Section -->

        <!-- ======= Content Section =======-->
        <section id="Content" class="Content">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Content</h2>

            </div>
                   @foreach ($conteant as $conteants )

                    <h4>{{$conteants->text}}</h4>
                   @endforeach




          </section><!-- End Content Section -->




        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Contact</h2>

            </div>

            <div class="row">

              <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                  <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>แผนที่  :</h4>
                    <p>50/70 ม. 1 ต. บางศรีเมือง อ. เมือง
                      จ. นนทบุรี 11000 ร้านจะอยู่ติดกับร้านก๋วยเตี๋ยว</p>
                  </div>

                  <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>wanika21731@gmail.com</p>
                  </div>

                  <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>0955753836</p>
                  </div>

                  <iframe src="" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

              </div>

              <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="name">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                  </div>
                  <div class="form-group">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="message" rows="10" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>

            </div>

          </div>
        </section><!-- End Contact Section -->

      </main><!-- End #main -->

      <!-- ======= Footer ======= -->
      <footer id="footer">

        <div class="footer-newsletter">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <h4>Join Our Newsletter</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-top">
          <div class="container">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Arsha</h3>
                <p>
                  A108 Adam Street <br>
                  New York, NY 535022<br>
                  United States <br><br>
                  <strong>Phone:</strong> +1 5589 55488 55<br>
                  <strong>Email:</strong> info@example.com<br>
                </p>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Networks</h4>
                <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="container footer-bottom clearfix">
          <div class="copyright">
            &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </footer><!-- End Footer -->

      <div id="preloader"></div>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="{{asset('admin/front_end/assets/vendor/aos/aos.js')}}"></script>
      <script src="{{asset('admin/front_end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('admin/front_end/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
      <script src="{{asset('admin/front_end/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('admin/front_end/assets/vendor/php-email-form/validate.js')}}"></script>
      <script src="{{asset('admin/front_end/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
      <script src="{{asset('admin/front_end//vendor/waypoints/noframework.waypoints.js')}}"></script>

      <!-- Template Main JS File -->
      <script src="{{asset('admin/front_end/assets/js/main.js')}}"></script>

    </body>

    </html>
    <body>
        <div class="flex-center position-ref full-height">
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
        </div>
    </body>
</html>
