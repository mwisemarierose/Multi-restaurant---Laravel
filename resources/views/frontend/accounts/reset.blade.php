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

              <div class="card mb-3" style="width:100%;">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4"><strong>Reset password?</strong></h5>
                  
                  </div>

                  <form class="row g-3 needs-validation" action="#" method="get" >
                  {{csrf_field()}}
                    

                    <div class="col-12">
                      
                      <div class="input-group has-validation">
                        
                        <input type="password" name="password" class="form-control" id="yourEmail" placeholder="new password" style="margin-bottom:20px; " >
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <input type="password" name="confirm_password" class="form-control" id="yourEmail" placeholder="confirm password" style="margin-bottom:20px; " >
                        @error('confirm_password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="button">Reset</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Back to login? <a href="/login">Log in</a></p>
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