@extends('user.layout.index')
@section('content')
<div class="row mt-4">
    <div class="col-md-3">
        <div class="card border-danger bg-dark" style="width: 18rem; color:red;">
            <div class="card-header border-danger">
              Kategori
            </div>
            <div class="card-body border-danger bg-dark">
                <div class="accordion accordion-flush border-danger bg-dark" id="accordionFlushExample" style="color: red">
                    <div class="accordion-item border-danger bg-dark" style="color: red">
                      <h2 class="accordion-header bg-dark border-danger">
                        <button class="accordion-button collapsed border-danger " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          pria
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body ">
                            <div class="d-flex flex-column gap-3">
                              <a href="" class="page-link">
                                  <i class="fas fa-plus"></i> Baju Pria
                              </a>
                              <a href="" class="page-link">
                                  <i class="fas fa-plus"></i> Celana Pria
                              </a>
                              <a href="" class="page-link">
                                  <i class="fas fa-plus"></i> Aksesoris Pria
                              </a>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="accordion-item border-danger bg-dark" style="color: red">
                      <h2 class="accordion-header border-danger bg-dark" style="color: red">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Wanita
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body ">
                            <div class="d-flex flex-column gap-3">
                              <a href="" class="page-link">
                                  <i class="fas fa-plus"></i> Baju Wanita
                              </a>
                              <a href="" class="page-link">
                                  <i class="fas fa-plus"></i> Celana Wanita
                              </a>
                              <a href="" class="page-link">
                                  <i class="fas fa-plus"></i> Aksesoris Wanita
                              </a>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="accordion-item border-danger bg-dark" style="color: red">
                      <h2 class="accordion-header border-danger bg-dark" style="color: red">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Anak
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body ">
                            <div class="d-flex flex-column gap-3">
                              <a href="" class="page-link">
                                  <i class="fas fa-plus"></i> Baju Anak
                              </a>
                              <a href="" class="page-link">
                                  <i class="fas fa-plus"></i> Celana Anak
                              </a>
                              <a href="" class="page-link">
                                  <i class="fas fa-plus"></i> Aksesoris Anak
                              </a>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div class="col-md-9 d-flex flex-wrap gap-4 mb-4">
        <div class="card border-danger bg-dark"  style="width: 220px">
              <div class="card-header m-auto" style="border-radius: 5px;">
                <img src="{{asset('assets/image/6.jpg')}}" alt="baju 1" style="width: 100%;">
            </div>
            <div class="card-body border-danger bg-dark" style="color: red">
                <p class="m-0 text-justify">Baju Mahal Warna Hitam</p>
                 <p class="m-0"><i class="fa-regular fa-star"> 5+</i></p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600; color:red">Rp. 200.000</p>
                   <button class="btn btn-outline-danger" style="font-size: 24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card border-danger bg-dark"  style="width: 220px">
          <div class="card-header m-auto" style="border-radius: 5px;">
            <img src="{{asset('assets/image/6.jpg')}}" alt="baju 1" style="width: 100%;">
        </div>
        <div class="card-body border-danger bg-dark" style="color: red">
            <p class="m-0 text-justify">Baju Mahal Warna Hitam</p>
             <p class="m-0"><i class="fa-regular fa-star"> 5+</i></p>
        </div>
        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600; color:red ">Rp. 200.000</p>
               <button class="btn btn-outline-danger" style="font-size: 24px">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
        </div>
    </div>
    <div class="card border-danger bg-dark"  style="width: 220px">
      <div class="card-header m-auto" style="border-radius: 5px;">
        <img src="{{asset('assets/image/6.jpg')}}" alt="baju 1" style="width: 100%;">
    </div>
    <div class="card-body border-danger bg-dark" style="color: red">
        <p class="m-0 text-justify">Baju Mahal Warna Hitam</p>
         <p class="m-0"><i class="fa-regular fa-star"> 5+</i></p>
    </div>
    <div class="card-footer d-flex flex-row justify-content-between align-items-center">
        <p class="m-0" style="font-size: 16px; font-weight:600; color:red">Rp. 200.000</p>
           <button class="btn btn-outline-danger" style="font-size: 24px">
            <i class="fa-solid fa-cart-plus"></i>
        </button>
    </div>
</div>
<div class="card border-danger bg-dark"  style="width: 220px">
  <div class="card-header m-auto" style="border-radius: 5px;">
    <img src="{{asset('assets/image/6.jpg')}}" alt="baju 1" style="width: 100%;">
</div>
<div class="card-body border-danger bg-dark" style="color: red">
    <p class="m-0 text-justify">Baju Mahal Warna Hitam</p>
     <p class="m-0"><i class="fa-regular fa-star"> 5+</i></p>
</div>
<div class="card-footer d-flex flex-row justify-content-between align-items-center">
    <p class="m-0" style="font-size: 16px; font-weight:600; color:red">Rp. 200.000</p>
       <button class="btn btn-outline-danger" style="font-size: 24px">
        <i class="fa-solid fa-cart-plus"></i>
    </button>
</div>
</div>
<div class="card border-danger bg-dark"  style="width: 220px">
  <div class="card-header m-auto" style="border-radius: 5px;">
    <img src="{{asset('assets/image/6.jpg')}}" alt="baju 1" style="width: 100%;">
</div>
<div class="card-body border-danger bg-dark" style="color: red">
    <p class="m-0 text-justify">Baju Mahal Warna Hitam</p>
     <p class="m-0"><i class="fa-regular fa-star"> 5+</i></p>
</div>
<div class="card-footer d-flex flex-row justify-content-between align-items-center">
    <p class="m-0" style="font-size: 16px; font-weight:600; color:red">Rp. 200.000</p>
       <button class="btn btn-outline-danger" style="font-size: 24px">
        <i class="fa-solid fa-cart-plus"></i>
    </button>
</div>
</div>
<div class="card border-danger bg-dark"  style="width: 220px">
  <div class="card-header m-auto" style="border-radius: 5px;">
    <img src="{{asset('assets/image/6.jpg')}}" alt="baju 1" style="width: 100%;">
</div>
<div class="card-body border-danger bg-dark" style="color: red">
    <p class="m-0 text-justify">Baju Mahal Warna Hitam</p>
     <p class="m-0"><i class="fa-regular fa-star"> 5+</i></p>
</div>
<div class="card-footer d-flex flex-row justify-content-between align-items-center">
    <p class="m-0" style="font-size: 16px; font-weight:600;color:red">Rp. 200.000</p>
       <button class="btn btn-outline-danger" style="font-size: 24px">
        <i class="fa-solid fa-cart-plus"></i>
    </button>
</div>
</div>
<div class="card border-danger bg-dark"  style="width: 220px">
  <div class="card-header m-auto" style="border-radius: 5px;">
    <img src="{{asset('assets/image/6.jpg')}}" alt="baju 1" style="width: 100%;">
</div>
<div class="card-body border-danger bg-dark" style="color: red">
    <p class="m-0 text-justify">Baju Mahal Warna Hitam</p>
     <p class="m-0"><i class="fa-regular fa-star"> 5+</i></p>
</div>
<div class="card-footer d-flex flex-row justify-content-between align-items-center">
    <p class="m-0" style="font-size: 16px; font-weight:600; color:red">Rp. 200.000</p>
       <button class="btn btn-outline-danger" style="font-size: 24px">
        <i class="fa-solid fa-cart-plus"></i>
    </button>
</div>
</div>
        
        <nav class="m-auto">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
        </nav>
    </div>
</div>
@endsection