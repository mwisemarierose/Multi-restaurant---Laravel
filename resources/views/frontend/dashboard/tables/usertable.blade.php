@extends('frontend.dashboard.layout')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>All clients</h1>
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
              <h5 class="card-title">User_Table</h5>
              <table class="table table-bordered yajra-datatable">
              
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Client_name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Join at</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$client->username}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->role}}</td>
                    <td>{{$client->created_at}}</td>
                    <td>
                      <button class="btn btn-primary" onclick="location.href='/Userform'">View</button>
                      <button class="btn btn-success" onclick="location.href='/Userform'">Update</button>
                      <button class="btn btn-danger" onclick="location.href='/Userform'">Delete</button>

                  </td>
                  </tr>
                  @endforeach
                </tbody>
                
              </table>
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
</div>
    </section>

  </main><!-- End #main -->
  