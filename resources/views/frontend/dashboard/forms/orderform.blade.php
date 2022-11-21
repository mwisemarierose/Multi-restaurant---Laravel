@extends('frontend.dashboard.layout')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>All Restaurants</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section card-container">
      <div class="row">

        <div class="col-lg-6" style="padding-left:100%;">
          <div class="card" style=" width: max-content;">
            <div class="card-body">
              <h5 class="card-title">Add Resraurant</h5>
              <form action="" class="product-form">
                <input type="text" name="Title" class="form-control" placeholder="Restaurant_name" ><br>
                <input type="email" class="form-control" name="Quantity" placeholder="Restaurant-email" ><br>
                <label for="img">Select image:</label><br>
                <input type="file" accept="image/*" class="form-control-file" style="margin-bottom:10px; " ><br>
                <input type="text" class="form-control" name="Price" placeholder="Restaurant-address" ><br>
                <textarea name="Description" class="form-control" placeholder="Restaurant-description"></textarea><br>
                <input type="submit" class="btn btn-primary" value="Print"><br>
                


              
              </form>

             
              <!-- End Default Table Example -->
            </div>
          </div>
          

         
            </div>
          </div>

        </div>
      </div>
</div>
</div>
    </section>

  </main><!-- End #main -->

  @endsection