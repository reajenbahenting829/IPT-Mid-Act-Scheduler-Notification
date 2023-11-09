@extends('base')

@include('_navbar')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
        <img class="d-block w-100" style="height: 380px;" src="images/rt.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="height: 380px;" src="images/sd.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="height: 380px;" src="images/hg.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="height: 380px;" src="images/fa.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="height: 380px;" src="images/kl.png" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="height: 380px;" src="images/nm.jpeg" alt="Third slide">
      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container mt-5">
  <h1 class="text-center mt-2">Hello, {{$user->name}}</h1>
  <hr>
  <div class="row">
    <div class="col-sm-3" v-for="{ id, productName, category, price, quantity } in products" :key="id">
      <div class="card mt-4 shadow" style="width: 16rem; height: 27rem;">
        <div class="card-header">
          <h5 class="card-title mt-2 text-center">Rea Store</h5>
        </div>
        <div class="card-body">
          <img src="images/nodata.png" alt="image" class="w-100 rounded mb-2">
          <hr>
          {{-- <span class="card-text">Brand Name: <span style="color: red;">{{ $prod->name }}</span></span><br>
          <span class="card-text">Product Name: &#x20b1;<span style="color: red;">&nbsp;{{ $prod->brand }}</span></span><br>
          <span class="card-text">Amount: <span style="color: red;">{{ $prod->amount}}</span></span><br> --}}
        </div>
        <div class="card-footer">
          <a href="/product" class="btn btn-primary form-control">Visit Product Table</a>
        </div>
      </div>
    </div>
  </div>
<br>
  <h2>Registered User</h2>
  <hr>
  <div class="container">
    <div class="row">
    <div class="col-sm-4">
      <div class="card mt-4 card-bdoy shadow p-3">
        <p>ID:  {{ $user->id }}</p>
        <p>Name: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
        
        <a href="/product">Visit Customers Products</a>
      </div>
    </div>
  </div>
  </div>
</div>


@endsection