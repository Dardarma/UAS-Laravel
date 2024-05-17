@extends('user.layout.index')

@section('content')
   {{-- banner --}}
   <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset ('assets/image/1.jpg')}}"class="d-block w-100" style="height: 500px">
      </div>
      <div class="carousel-item">
        <img src="{{ asset ('assets/image/2.jpg')}}" class="d-block w-100" style="height: 500px">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  {{-- endbanner --}}
  <div class="gradasi">
    <br><br><br>
  {{-- unggulan --}}
  <div class="container">
    <div class="row">
      <div class="col text-center" style="color: white; ">
        <h2 style="color: rgb(253, 62, 62)"><u>OUR STORE</u></h2>
      </div>
    </div>
        <br>
    <div class="row" style="color: red; text-align: center; font-size: 19px">
      <div class="col-md mb-4" style="padding: 25px; " >
        <img src="{{ asset ('assets/image/3.png')}}" style="height: 200px">
        <h1>GARANSI CEPAT</h1>
       
      </div>
      <div class="col-md" style="padding: 25px;" >
        <img src="{{ asset ('assets/image/4.png')}}" style="height: 200px">
        <h1>IZIN JELAS DAN RESMI</h1>
       
      </div>
      <div class="col-md" style="padding: 25px;" >
        <img src="{{ asset ('assets/image/5.png')}}" style="height: 200px">
        <h1>HARGA BERSAING</h1>
      </div>
    </div>
 
    {{-- endunggulan --}}
    <br><br><br>
  </div>
@endsection