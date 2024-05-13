@extends('user.layout.index')

@section('content')
<div class="row mt-4 justify-content-center">
  <div class="col-md-9 d-flex flex-wrap gap-4 mb-4">
      @foreach ($barangs as $brg)
        <div class="card border-danger bg-dark" style="width: 220px">
            <div class="card-header m-auto" style="height:100%;width:100%">
                <img src="{{ asset('foto_barang/'.$brg->foto_barang) }}" alt="baju 1" style="width: 100%; object-fit: cover; height:200px">
            </div>
            <div class="card-body border-danger bg-dark" style="color: red">
                <p class="m-0 text-justify">{{$brg->nama_barang}}</p>
                <p class="m-0"><i class="fa-regular fa-star"> 5+</i></p>
                <p class="m-0">{{$brg->deskripsi_barang}}</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight: 600; color: red">{{$brg->harga_barang}}</p>
                <button class="btn btn-outline-danger" style="font-size: 24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
      @endforeach
    </div>
</div>
@endsection
