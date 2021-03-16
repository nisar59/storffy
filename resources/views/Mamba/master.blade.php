<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Storffy</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/public/assets/img/logo.jpg')}}" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/public/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/public/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('/public/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/public/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('/public/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('/public/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('/public/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/public/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">support@storffy.com</a>
        <i class="icofont-phone"></i> <a href="tel:030-258-699-31">030-258-699-31</a>
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="home"><img src="{{asset('/public/assets/img/logo.jpg')}}"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
      <li class="active"><a href="home">Home</a></li>
      <li class=""><a href="home">How it works?</a></li>
      <li class=""><a href="home">Blog</a></li>

          @if($path!='home' & $path!='/')
          <li><a href="about">About Us</a></li> 
          <li><a href="faqs">FAQs</a></li>       
          <li><a href="contact-us">Contact Us</a></li>
          @else
          <li><a href="#about">About Us</a></li> 
          <li><a href="#faqs">FAQs</a></li>       
          <li><a href="#contact-us">Contact Us</a></li>
          @endif
          <li class="drop-down"><a>Sign in</a>
            <ul>
              <li><a href="login"> As Viewer</a></li>
              <li><a href="creator/login">As Creator</a></li>
            </ul>
          </li>

          <li class="drop-down"><a>Get Started</a>
            <ul>
              <li><a href="register">Viewer</a></li>
              <li><a href="creator/register">Creator</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('{{asset('/public/assets/img/slide/slide-1.jpg')}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Storffy</span></h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="register" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('{{asset('/public/assets/img/slide/slide-2.jpg')}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Hi Creators!</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="creator/register" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('{{asset('/public/assets/img/slide/slide-3.jpg')}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Hello Viewers!</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="register" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <!-- Content Main Start -->

  <main id="main">
  @yield('content')
</main>
 <!-- Content Main End -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Mamba</h3>
            <p>
              A108 Adam Street <br>
              NY 535022, USA<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
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

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Storffy</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/public/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/public/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('/public/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/public/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('/public/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('/public/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('/public/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('/public/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/public/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/public/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/public/assets/js/main.js')}}"></script>
<!-- apply -->
   <script src="{{asset('public/applyassets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('public/applyassets/vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{asset('public/applyassets/vendor/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{asset('public/applyassets/js/main.js')}}"></script>
</body>

</html>