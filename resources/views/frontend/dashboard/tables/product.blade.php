@extends('frontend.dashboard.layout')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>All user</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">All User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section card-container">
      <div class="row">
        <div class="col-lg-6">

          <div class="card" style=" width: max-content;">
            <div class="card-body">
              <h5 class="card-title">User_Table</h5>
              <table class="table table-bordered yajra-datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product_name</th>
                    <th scope="col">Ingredients</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
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
                    <td><select name="" >
                      <option value="View">View</option>
                      <option value="Delete">Delete</option>
                       <option value="Update">Update</option>
                                  </select></td>

                  </tr>
                 
                </tbody>
                
              </table>

             
              <!-- End Default Table Example -->
            </div>
          </div>
          

         
            </div>
          </div>

        </div>

        <div class="col-lg-6" style="padding-left:30px;">
          <div class="card" style=" width: max-content;">
            <div class="card-body">
              <h5 class="card-title">Add Product</h5>
              <form action="" class="product-form">
                <input type="text" name="Title" placeholder="product_name" style="margin-bottom:10px"><br>
                <label for="img">Select image:</label><br>
                <input type="file" accept="image/*" style="margin-bottom:10px"><br>
                <textarea name="Description" placeholder="product_Ingredients"></textarea><br>
               <input type="text" name="Price" placeholder="product_price" style="margin-bottom:10px"><br>
               <input type="number" name="Quantity" placeholder="Qwantity" style="margin-bottom:10px"><br>
                <input type="submit" value="Add product"><br>
                


              
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