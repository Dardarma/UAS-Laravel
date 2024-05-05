@extends('admin.layout.layot')
@section('content')

<div class="container-fluid">
    <div class="content-wrapper mt-2">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Barang</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('Edit_barang', ['id' => $barangs->id]) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="nama_barang">Nama barang:</label>
                                <input type="text" name="nama_barang" id="nama_barang" class="form-control" required value="{{ old('nama_barang', $barangs->nama_barang) }}">
                                @error('nama_barang')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="foto_barang">Foto:</label>
                                <input type="file" name="foto_barang" id="foto_barang" class="form-control">
                                @error('foto_barang')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="deskripsi_barang">Deskripsi:</label>
                                <input type="text" name="deskripsi_barang" id="deskripsi_barang" class="form-control" required value="{{ old('deskripsi_barang', $barangs->deskripsi_barang) }}">
                                @error('deskripsi_barang')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="harga_barang">Harga:</label>
                                <input type="text" name="harga_barang" id="harga_barang" class="form-control" required value="{{ old('harga_barang', $barangs->harga_barang) }}">
                                @error('harga_barang')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Edit Barang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
