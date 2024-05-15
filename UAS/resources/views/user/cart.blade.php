@extends('user.layout.index')

@section('content')
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
 
            <h3 class="mt-5">Keranjang</h3>
            <div class="card mb-3">
                <div class="card-body d-flex gap-4">
                    <img src="{{asset('assets/image/6.jpg')}}" height="300px" alt="">
                    <div class="desc w-100 ">
                        <form action="" method="">
                            @csrf
                            <p style="font-size: 24px; font-weight:700;">xxxxx</p>
                            <input type="hidden" name="idBarang" >
                             <input type="number" class="form-control border-0 fs-1" id="harga" name="harga" readonly
                                value="200000"> 
                            <div class="row mb-2">
                                <label for="qty" class="col-sm-2 col-form-label fs-5">Quantity</label>
                                <div class="col-sm-5 d-flex">
                                    <button class="rounded-start bg-secondary p-2 border border-0 minus" id="minus" disabled>-</button>
                                    <input type="number" id="jumlah" min="0" max="9999" name="jumlah" class="form-control w-25 text-center" value="1" readonly>
                                    <button class="rounded-end bg-secondary p-2 border border-0 plus" id="plus">+</button>
                                </div>
                            </div>
                            {{-- end jumlah --}}
                            <div class="row">
                                <label for="price" class="col-sm-2 col-form-label fs-5">Total</label>
                                <input type="text" class="col-sm-2 form-control w-25 border-0 fs-5 total" readonly
                                    name="total" id="total" value="">
                            </div>
                            <div class="row w-50 gap-1">
                                <button type="submit" class="btn btn-success col-sm-5">
                                    <i class="fa fa-shopping-cart"></i>Checkout
                                </button>
                            </div>
                        </form>
                        <form action="" method="">
                            <div class="row w-50 gap-1 ">
                                <button class="btn btn-danger col-sm-5">
                                    <i class="fa fa-trash-alt"></i>Delete
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 

@endsection