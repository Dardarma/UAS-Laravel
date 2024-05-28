@extends('user.layout.index')

@section('content')
<style>
  th,td{
    padding: 10px;
    text-align: center;
  }
</style>

<div class="container mt-4 justify-content-center">
    <h1 class="text-center" style="color: red">Koleksi Struk </h1>

    @if($grouped_checkouts)
        @foreach ($grouped_checkouts as $group)
            @php
                $detail_pembayaran = $group['detail_pembayaran'];
                $checkouts = $group['checkouts'];
            @endphp

            <div class="row mb-4">
                <div class="col-md-9">
                    <div class="card border-danger bg-dark">
                        <div class="card-body text-light">
                            <h2 class="card-title">Detail Pembayaran</h2>
                            <p>ID Nota: {{ $detail_pembayaran->id }}</p>
                            <p>Atas Nama: {{$detail_pembayaran->user->nama}}</p>
                            +++++++++++++++++++++++++++++++++++++++++++++++++++
                            <table >
                              <thead>
                                <td>Nama Barang</td>
                                <td >Jumlah Barang</td>
                                <td >Harga Barang</td>
                                <td >Subtotal</td>
                              </thead>
                              @foreach ($checkouts as $checkout)
                                <tbody>
                                  <td>{{ $checkout->barang->nama_barang }}</td>
                                  <td>{{ $checkout->jumlah_barang }}</td>
                                  <td>{{ number_format($checkout->barang->harga_barang) }}</td>
                                  <td>{{ number_format($checkout->subtotal_harga) }}</td>
                                </tbody>
                              @endforeach
                            </table>
                            ++++++++++++++++++++++++++++++++++++++++++++++++++++
                            <br>
                            <p>Jumlah Barang: {{ $detail_pembayaran->jumlah_barang }}</p>
                            <p>Total Harga: {{ number_format($detail_pembayaran->total_harga, 2) }}</p>
                            <p>Tanggal: {{ $detail_pembayaran->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>

          
        @endforeach
    @else
        <p class="text-center text-danger">Status detail pembayaran belum selesai atau data tidak ditemukan.</p>
    @endif
</div>
@endsection

