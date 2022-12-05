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
                      <label for="image" class="form-label">Image(optional)</label>
                      <input type="file" name="image" class="form-control" id="yourEmail" >
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
  </main>
  @endsection