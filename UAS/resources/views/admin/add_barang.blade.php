@extends('admin.layout.layot')
@section('content')

<div class="container-fluid">
    <div class="content-wrapper mt-2">
        <div class="row">
            <div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Tambah barang</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">
          <form method="POST" action="{{ route('Tambah_barang') }}" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                  <label for="nama">Nama barang:</label>
                  <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
              </div>

              <div class="form-group">
                  <label for="email">foto:</label>
                  <input type="file" name="foto_barang" id="foto_barang" class="form-control" required>
              </div>

              <div class="form-group">
                  <label for="password">deskripsi:</label>
                  <input type="text" name="deskripsi_barang" id="deskripsi_barang" class="form-control" required>
              </div>

              <div class="form-group">
                  <label for="hp">Harga:</label>
                  <input type="text" name="harga_barang" id="harga_barang" class="form-control">
              </div>


              <div class="form-group">
                <label for="hp">Stok:</label>
                <input type="text" name="stok_barang" id="stok_barang" class="form-control">
            </div>


              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Tambah barang</button>
              </div>
          </form>
      </div>
    </div>
 </div>
</div>

@endsection