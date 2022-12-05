
@extends('frontend.accounts.acclayout')
@section('content')
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
                    <h5 class="card-title text-center pb-0 fs-4"><strong>Welcome Back</strong></h5>
                    <p class="text-center small">to FineFood!!</p>
                  </div>

                  <form class="row g-3 needs-validation" action="/users/login" method="POST" >
{{csrf_field()}}
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control" id="yourUsername"  ><br>
                        @error('email')
                        <div class="text-danger" style="position:absolute;top:40px;margin-bottom:10px">{{ $message }}</div>
                        @enderror

                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label" style="margin-top:10px;">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" >
                        @error('password')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                    </div>

                    <div class="col-12">
                      <a href="/Forget" style="color:blue">forget password? </a>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="/register" style="color:blue;">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
              
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>
  @endsection