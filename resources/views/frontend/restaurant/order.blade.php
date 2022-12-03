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
                <div class="internal">
                <div class="order-image">
            <img src="" alt="image">
            </div>
            <div class="order-content">
            <h1 class="name">Item name</h1>
            <h3 class="name">Price:</h3>
            <h6 class="name">QTY:<i class="bi bi-plus-circle"></i> 1 <i class="bi bi-plus-circle"></i> </h6>
            <h4 class="amount">Amount:</h4>
            </div>
            </div>
            <div class="internal">
            <div class="order-image">
            <img src="" alt="image">
            </div>
            <div class="order-content">
            <h1 class="name">Item name</h1>
            <h3 class="name">Price:</h3>
            <h6 class="name">QTY:<i class="bi bi-plus-circle"></i> 1 <i class="bi bi-plus-circle"></i> </h6>
            <h4 class="amount">Amount:  </h4>
            </div>
            </div>
        </div>
</div>
</div>
<div class="col-lg-4 restaurant-card">
        <h2 class="heard">Current Location</h2>
        <div class="box inputs" data-aos="zoom-in" data-aos-delay="100">
              <input type="text" placeholder="Address">
              <input type="text" placeholder="Street number">
              <input type="text" placeholder="House number">
              <input type="text" placeholder="Tel.Number">

               <a href="/menu" class="book-a-table-btn scrollto d-none d-lg-flex" style="width:fit-content; margin-top:30px;">Confirm order</a>
</div>
        </div>
        
</section>
@endsection