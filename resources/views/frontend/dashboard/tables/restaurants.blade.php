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
                @foreach($requests as $requestss)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$requestss->Name}}</td>
                    <td>{{$requestss->Email}}</td>
                    <td>{{$requestss->Address}}</td>
                    <td>{{$requestss->created_at}}</td>
                    <td>{{$requestss->Status}}</td>
                    <td><select class="form-control" name="" >
                      <option class="form-control" value="APPROVE">APPROVE</option>
                       <option class="form-control" value="EJECT">REJECT</option>
                                  </select></td>

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