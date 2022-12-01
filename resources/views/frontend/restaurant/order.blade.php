@extends('frontend.layouthome')
@section('content')

<section id="why-us" class="why-us">
    <div class="section-title">
          <p class="resto">Order</p>
        </div>
        <div class="container restaurants" data-aos="fade-up">
        <div class="row">
        
        <div class="col-lg-4 restaurant-card">
        <div class="box" data-aos="zoom-in" data-aos-delay="100">
        <div class="order-container">
                <div class="order-image">
            <img src="" alt="image">
            </div>
            <div class="order-content">
            <h6 class="name">----------itemname-----------</h6>
            <h6 class="name">----------price-----------</h6>
            <h6 class="name">----------quantity-----------</h6>
            1<i class="bi bi-plus-circle"></i>


            </div>
        </div>
</div>
</div>
<div class="col-lg-4 restaurant-card">
        <div class="box" data-aos="zoom-in" data-aos-delay="100">
       
             
              <input type="text" placeholder="location">
              <input type="text" placeholder="location">
              <input type="text" placeholder="location">
              <input type="text" placeholder="location">

               <a href="/menu" class="book-a-table-btn scrollto d-none d-lg-flex" style="width:fit-content; margin-top:30px;">Menu</a>
</div>
        </div>
        
</section>
@endsection