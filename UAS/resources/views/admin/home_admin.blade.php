@extends('admin.layout.layot')

@section('content')
<div class="container-fluid">

    <!-- Small boxes (Stat box) -->
    <div class="content-wrapper"> 

        <div class="row mt-2">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>
                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Konfirmasi Penjualan</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        @foreach ($grouped_checkouts as $group)
                            <h3>Detail Pembayaran ID: {{ $group['detail_pembayaran']->id }}</h3>
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID Pembayaran</th>
                                        <th>Nama User</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th>Ekspedisi</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($group['checkouts'] as $checkout)
                                        <tr>
                                            <td>{{ $checkout->id }}</td>
                                            <td>{{ $checkout->nama_user }}</td>
                                            <td>{{ $checkout->alamat }}</td>
                                            <td>{{ $checkout->no_telp }}</td>
                                            <td>{{ $checkout->ekspedisi }}</td>
                                            <td>{{ $checkout->harga }}</td>
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
