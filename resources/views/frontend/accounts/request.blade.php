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

                  <form class="row g-3 needs-validation" action="{{URL('/requests/store')}}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                    

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Restaurant Name</label>
                      <div class="input-group has-validation">
                        <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                        <input type="text" name="Name" class="form-control" id="yourUsername" >
                        @error('Name')
                        <div class="text-danger" style="position:absolute;top:40px;margin-bottom:10px">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="col-12">
                      <label for="yourUsername" class="form-label">Restaurant Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="Email" class="form-control" id="yourEmail" >
                        @error('email')
                        <div class="text-danger" style="position:absolute;top:40px;margin-bottom:10px">{{ $message }}</div>
                        @enderror
                      </div>
                      
                    <div class="col-12">
                      <label for="Address" class="form-label">Address</label>
                      <input type="test" name="Address" class="form-control" id="yourEmail" >
                      @error('Address')
                        <div class="text-danger" style="position:absolute;top:40px;margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                      <label for="Description" class="form-label">Phone Number</label>
                      <input type="text" name="phoneNumber" class="form-control" id="yourEmail" >
                      @error('Description')
                        <div class="text" style="position:absolute;top:40px;margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                      <label for="Description" class="form-label">Description</label>
                      <textarea name="Description" class="form-control" id="yourEmail" ></textarea>
                      @error('Description')
                        <div class="text-danger" style="position:absolute;top:40px;margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                      <label for="Image" class="form-label">Image</label>
                      <input type="file" name="Image" class="form-control" id="yourEmail" >
                      @error('Image')
                        <div class="text-danger" style="position:absolute;top:40px;margin-bottom:10px">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>



                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" >
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#" style="color:blue;">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Send Request</button>
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