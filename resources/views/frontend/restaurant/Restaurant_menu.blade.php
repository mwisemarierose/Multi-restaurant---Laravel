@extends('frontend.layouthome')
@section('content')

  
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        
          <p>Check Our Tasty Menu</p>
        </div>
      
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        
          @foreach($items as $item)
          <div class="col-lg-6 menu-item filter-specialty">
            <img src="{{$item->Image}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">{{$item->Title}}</a><span>{{$item->Price}}</span>
            </div>
            <div class="menu-ingredients">
             {{$item->Description}}
            </div>
            <div>
              <button class="btn buy">buy</button>
            </div>
          </div>
          @endforeach 
        </div>

      </div>
    </section><!-- End Menu Section -->
 @endsection