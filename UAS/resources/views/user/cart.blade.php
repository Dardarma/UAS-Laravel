@extends('user.layout.index')

@section('content')
<style>

    .cart-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .cart-item {
        width: calc(50% - 10px); /* 50% width with gap */
        margin-bottom: 20px;
    }
</style>

<div class="d-flex justify-content-center mt-4 ">
    <!-- Form -->
    <div class="card border-danger bg-dark me-3" style="width: 30%;">
        <div class="card-header">
            <h3 class="card-title" style="color: red">Checkout</h3>
        </div>

        <form action="{{ route('checkout') }}" method="POST">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="nama_user" style="color:red">Penerima</label>
                    <input type="text" class="form-control" name="nama_user" value="{{ Auth::user()->nama }}">
                </div>
                <div class="form-group">
                    <label for="alamat" style="color:red">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukan alamat">
                </div>
                <div class="form-group">
                    <label for="no_telp" style="color:red">No HP</label>
                    <input type="text" class="form-control" name="no_telp" value="{{ Auth::user()->Hp }}">
                </div>
                <div class="form-group">
                    <label for="ekspedisi" style="color:red">Ekspedisi</label>
                    <input type="text" class="form-control" name="ekspedisi">
                </div>
                <div>
                    <h3 style="color:red">Grand Total:</h3>
                    <h2 style="color:red" id="grand-total">Rp. {{ $total }}</h2>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </form>
    </div>

    <!-- Cart -->
    <div class="cart-container" style="width: 60%;">
        @foreach ($cart as $c)
        <div class="card border-danger bg-dark mb-4 cart-item">
            <div class="card-body d-flex gap-4">
                <img src="{{ asset('foto_barang/'.$c->barang->foto_barang) }}" style="width: 200px; height: 200px">
                <div class="desc">
                    <form action="{{ url('/updatecart/'.$c->id) }}" method="POST">
                        @csrf
                        <p style="font-size: 18px; font-weight: 700;color: red">{{ $c->barang->nama_barang ?? 'Barang tidak ditemukan' }}</p>
                        <p style="font-size: 14px; font-weight: 600;color: red">{{ $c->barang->deskripsi_barang ?? 'Barang tidak ditemukan' }}</p>
                        <p style="font-size: 14px; font-weight: 600;color: red">Rp. {{ $c->barang->harga_barang ?? 'Barang tidak ditemukan' }}</p>

                        <div class="d-flex gap-2 align-items-center">
                            <input type="number" name="jumlah_item" value="{{ $c->jumlah_item }}" min="1" class="form-control jumlah-item" style="width: 60px;" data-harga="{{ $c->barang->harga_barang }}">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ url('/deletecart/'.$c->id) }}" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                        </div>
                    </form>
                    <p style="font-size: 14px; font-weight: 600;color: red">Total: Rp. <span class="total-harga">{{ $c->total_harga }}</span></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="d-flex justify-content-center mt-4">
    <div class="card border-danger bg-dark mb-4" style="width: 100%;">
        <div class="card-body">
            <h3 class="text-center" style="color: red">Total Harga: Rp. <span id="final-total">{{ $total }}</span></h3>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const jumlahItems = document.querySelectorAll('.jumlah-item');
        const finalTotal = document.getElementById('final-total');
        const grandTotal = document.getElementById('grand-total');

        jumlahItems.forEach(function(input) {
            input.addEventListener('change', function() {
                const harga = parseFloat(input.dataset.harga);
                const jumlah = parseInt(input.value);
                const totalHargaElement = input.closest('.desc').querySelector('.total-harga');

                const totalHarga = harga * jumlah;
                totalHargaElement.textContent = totalHarga.toFixed(2);

                updateFinalTotal();
            });
        });

        function updateFinalTotal() {
            let total = 0;

            document.querySelectorAll('.total-harga').forEach(function(element) {
                total += parseFloat(element.textContent);
            });

            finalTotal.textContent = total.toFixed(2);
            grandTotal.textContent = 'Rp. ' + total.toFixed(2);
        }
    });
</script>

@endsection
