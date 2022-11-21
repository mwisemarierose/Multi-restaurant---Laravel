@extends('frontend.dashboard.layout')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>All Orders</h1>
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
              <h5 class="card-title">Order_Table</h5>
              <table class="table table-bordered yajra-datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Client_name</th>
                    <th scope="col">Product_name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Payments status</th>
                    <th scope="col">Order_status</th>


                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>Designer</td>
                    <td>Designer</td>

                    <td>28</td>
                    <td>2016-05-25</td>
                    <td>Order_status</td>

                  </tr>
                 
                </tbody>
                
              </table>

             
              <!-- End Default Table Example -->
            </div>
          </div>
          

         
            

        </div>
      </div>
</div>
</div>
    </section>

  </main><!-- End #main -->

  @endsection