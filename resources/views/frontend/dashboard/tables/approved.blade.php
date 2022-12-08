@extends('frontend.dashboard.layout')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      
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
              <h5 class="card-title"> Approved Restaurants</h5>
              <table class="table table-bordered yajra-datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Restaurant_name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Request at</th>
                    <th scope="col">Status</th>
                    


                  </tr>
                </thead>
                <tbody>
                @foreach($approvedd as $approved)
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$approved->Name}}</td>
                    <td>{{$approved->Email}}</td>
                    <td>{{$approved->Address}}</td>
                    <td>{{$approved->created_at}}</td>
                    <td>{{$approved->Status}}</td>
                    <!-- <td><select class="form-control" name="" >
                      <option class="form-control" value="APPROVE">APPROVE</option>
                       <option class="form-control" value="EJECT">REJECT</option>
                                  </select></td> -->

                  </tr>
                  @endforeach
                </tbody>
                
              </table>

             
              <!-- End Default Table Example -->
            </div>
          </div>
          

         
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