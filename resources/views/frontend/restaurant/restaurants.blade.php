<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurants</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{URL::asset('assets/img/favicon.png');}}" rel="icon">
  <link href="{{URL::asset('assets/img/apple-touch-icon.png');}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::asset('assets/vendor/animate.css/animate.min.css');}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/aos/aos.css');}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css');}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css');}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/boxicons/css/boxicons.min.css');}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/glightbox/css/glightbox.min.css');}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.css');}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL::asset('assets/css/style.css');}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.9.1
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">FineFood</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto active" href="/requests/approved">Restaurants</a></li>
          <li><a class="nav-link scrollto" href="/request">Request</a></li>
         
           
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      @if(!auth()->user())
      <a href="/login" class="book-a-table-btn scrollto d-none d-lg-flex">LogIn</a>
      @else
      <h6><i class="bi bi-person"></i>{{auth()->user()->email}}</h6>
      @role('Manager')
      <a href="/Manager" class="book-a-table-btn scrollto d-none d-lg-flex">DashBoard</a>
    @endrole
      <a href="/users/logout" class="book-a-table-btn scrollto d-none d-lg-flex">Logout</a>
      @endif

    </div>
  </header><!-- End Header -->

  

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
    <div class="section-title">
          <p class="resto">Our Restaurants</p>
        </div>

      <div class="container restaurants" data-aos="fade-up">
        
        @foreach($restaurants as $restaurant)
        <div class="row">
        
          <div class="col-lg-4 restaurant-card">
          
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
           
              <span></span>
              <div class="resto-photo"> 
              <img src="{{$restaurant->Image}}" class="menu-img" alt="">
              </div>
              <h3>{{$restaurant->Name}}</h3>
              <h4>{{$restaurant->Address}}</h4>
              <p>{{$restaurant->Description}}</p>
               <a href="/menu/getUsermenu/{{$restaurant->users->id}}" class="book-a-table-btn scrollto d-none d-lg-flex" style="width:fit-content; margin-top:30px;">Menu</a>
      
            </div>
            
          </div>
          
        </div>
        @endforeach
      </div>
       
    </section>


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>FineFood</h3>
              <p>
                Kigali-Rwanda<br>
                kST 202 Kiyovu<br><br>
                <strong>Phone:</strong> +250 788 888 888<br>
                <strong>Email:</strong> info@finefood.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/restaurants">Restaurants</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/request">Request</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Food Delivering</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hosting some Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Reservation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">cooperate with many Restaurants</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Cooking Lessons</a></li>
            </ul>
        </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FineFood</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>