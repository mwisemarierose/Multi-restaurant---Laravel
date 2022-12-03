@extends('frontend.dashboard.layout')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>edit-product</h1>
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
              <!-- <h5 class="card-title">User_name</h5> -->
              <form class="product-form" action="/users/update" method="PATCH" enctype="multipart/form-data">
                  {{csrf_field()}}
                <input type="text" name="Title" class="form-control" placeholder="Title" ><br>
                <input type="Description" class="form-control" name="Description" placeholder="Description" ><br>
                <label for="img">Select image:</label><br>
                <input type="file" accept="image/*" class="form-control-file" style="margin-bottom:10px; " ><br>
                <input type="text" class="form-control" name="Price" placeholder="Price" ><br>
                <input type="text" class="form-control" name="Quantity" placeholder="Quantity" ><br>
                <input type="submit" class="btn btn-primary" value="Updates">
                <!-- <input type="submit" class="btn btn-danger" value="delete"><br> -->
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