@extends('admin.layout.layot')

@section('content')
<div class="container-fluid">

    <!-- Small boxes (Stat box) -->
    <div class="content-wrapper"> 


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Konfirmasi Penjualan</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table p-0" style="height: 300px;">
                        @foreach ($grouped_checkouts as $group)
                            <h3>Detail Pembayaran ID: {{ $group['detail_pembayaran']->id }}</h3>
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID Pembayaran</th>
                                        <th>Nama User</th>
                                        <th>Nama barang</th>
                                        <th>Jumlah barang</th>
                                        <th>harga</th>
                                        <th>subtotal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($group['checkouts'] as $checkout)
                                        <tr>
                                            <td>{{ $checkout->id }}</td>
                                            <td>{{ $checkout->nama_user }}</td>
                                            <td>{{ $checkout->barang->nama_barang }}</td>
                                            <td>{{ $checkout->jumlah_barang }}</td>
                                            <td>{{ $checkout->harga }}</td>
                                            <td>{{ $checkout->subtotal_harga }}</td>
                                            <td>
                                            @if (!$group['detail_pembayaran']->saved)
                                            <form action="{{ route('updateStatusPembayaran', $checkout->id) }}" method="POST">
                                            @csrf
                                            <h4>{{ $checkout->status }}</h4>
                                            <select name="status">
                                            <option value="terima">Terima</option>
                                            <option value="tolak">Tolak</option>
                                            </select>
                                            <button type="submit">Perbarui Status</button>
                                            </form>
                                            @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5"><strong>Total:</strong></td>
                                        <td><strong>{{ $group['detail_pembayaran']->total_harga }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"><strong>Jumlah Barang:</strong></td>
                                        <td><strong>{{ $group['detail_pembayaran']->jumlah_barang }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>
                                            <form action="{{ route('updateStatusdetailPembayaran', $group['detail_pembayaran']->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" {{ $group['detail_pembayaran']->status ? 'disabled' : '' }} class="btn btn-primary">
                                                    {{ $group['detail_pembayaran']->status ? 'Status Sudah Disimpan' : 'Ubah Status' }}
                                                </button>
                                            </form>
                                        </td>
                                        <td colspan="6">{{ $group['detail_pembayaran']->status ? 'Sudah disimpan' : 'Belum disimpan' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        @endforeach
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
@endsection
