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
        <div class="col-lg-6">

          <div class="card" style=" width: max-content;">
            <div class="card-body">
              <h5 class="card-title">Restaurants_Table</h5>
              <table class="table table-bordered yajra-datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Restaurant_name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Request at</th>
                    <th scope="col">Status</th>
                    <th scope="col">action</th>


                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                    <td>pending</td>
                    <td>
                      <button class="btn btn-primary" onclick="location.href='/Userform'">View</button>
                      <button class="btn btn-success" onclick="location.href='/Userform'">Update</button>
                      <button class="btn btn-danger" onclick="location.href='/Userform'">Delete</button>

                  </td>

                  </tr>
                 
                </tbody>
                
              </table>

             
              <!-- End Default Table Example -->
            </div>
          </div>
          

         
            </div>
          </div>

        </div>

        <div class="col-lg-6" style="padding-left:10px;">
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
                <input type="submit" class="btn btn-primary" value="Add Restaurants"><br>
                


              
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