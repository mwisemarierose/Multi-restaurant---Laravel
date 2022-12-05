@extends('frontend.dashboard.layout')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <section class="section card-container">
      <div class="row">
    <div class="col-lg-6" style="padding-left:30px;">
          <div class="card" style=" width: max-content;">
            <div class="card-body">
              <h5 class="card-title">Terms and Conditions</h5>

              <form action="{{URL('/menu/store')}}" method="POST" class="product-form" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="user_id" value ="{{auth()->user()->id}}" >
                <input type="text" name="Title" class="form-control" placeholder="product_name" ><br>
                <label for="img" >Select image:</label><br>
                <input type="file" accept="image/*" name="Image" class="form-control-file" style="margin-bottom:10px; "><br>
                <textarea name="Description" class="form-control" placeholder="product_Ingredients"></textarea><br>
               <input type="text" class="form-control" name="Price" placeholder="product_price" ><br>
               <input type="number" class="form-control" name="quantity" placeholder="Qwantity" ><br>
                <input type="submit" class="btn btn-primary" value="Add product"><br>
                
              
              </form>
            </div>
            </div>
        
          </div>
          <div class="col-lg-6" style="padding-left:30px;">
          <div class="card" style=" width: max-content;">
            <div class="card-body">
              <h5 class="card-title">Terms and Conditions</h5>

              <form action="{{URL('/menu/store')}}" method="POST" class="product-form" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="user_id" value ="{{auth()->user()->id}}" >
                <input type="text" name="Title" class="form-control" placeholder="product_name" ><br>
                <label for="img" >Select image:</label><br>
                <input type="file" accept="image/*" name="Image" class="form-control-file" style="margin-bottom:10px; "><br>
                <textarea name="Description" class="form-control" placeholder="product_Ingredients"></textarea><br>
               <input type="text" class="form-control" name="Price" placeholder="product_price" ><br>
               <input type="number" class="form-control" name="quantity" placeholder="Qwantity" ><br>
                <input type="submit" class="btn btn-primary" value="Add product"><br>
                
              
              </form>
            </div>
            </div>

        </div>
      </div>
    </section>

  </main>
@endsection