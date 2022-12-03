<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Register </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('img/favicon.png');}}" rel="icon">
  <link href="{{ URL::asset('img/apple-touch-icon.png');}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css');}}" rel="stylesheet">
  <link href="{{URL::asset('vendor/bootstrap-icons/bootstrap-icons.css');}}" rel="stylesheet">
  <link href="{{URL::asset('vendor/boxicons/css/boxicons.min.css');}}" rel="stylesheet">
  <link href="{{URL::asset('vendor/quill/quill.snow.css');}}" rel="stylesheet">
  <link href="{{URL::asset('vendor/quill/quill.bubble.css');}}" rel="stylesheet">
  <link href="{{URL::asset('vendor/remixicon/remixicon.css');}}" rel="stylesheet">
  <link href="{{URL::asset('vendor/simple-datatables/style.css');}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL::asset('css/style.css');}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="/">FineFood</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a class="nav-link scrollto " href="/">Home</a></li>
        <li><a class="nav-link scrollto" href="/requests/approved">Restaurants</a></li>
          <li><a class="nav-link scrollto" href="/request">Request</a></li>
         
           
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="/login" class="book-a-table-btn scrollto d-none d-lg-flex">LogIn</a>

    </div>
  </header><!-- End Header -->


  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                 
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4"><strong>Get started with us</strong></h5>
                    <p class="text-center small">FineFood</p>
                  </div>

                  <form class="row g-3 needs-validation" action="users/store" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                    

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="yourUsername" >
                        <div class="invalid-feedback">Please choose a username.</div>
                        @error('username')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" >
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                      @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Phone Number</label>
                      <div class="input-group has-validation">
                        <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" >
                        <div class="invalid-feedback">Please add a phone Number.</div>
                        @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    <div class="col-12">
                      <label for="Image" class="form-label">Image(optional)</label>
                      <input type="file" name="Image" class="form-control" id="yourEmail" >
                    </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" >
                      <div class="invalid-feedback">Please enter your password!</div>
                      @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required >
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#" style="color:blue;">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="/login" style="color:blue;">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
              
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
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
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>