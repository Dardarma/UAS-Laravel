@extends('admin.layout.layot')
@section('content')

<div class="container-fluid">

    <div class="content-wrapper mt-2">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"> Display Barang</h3>
    
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
                  <div class="card-body">
                    <a href="{{Route('Register_barang')}}" class="btn btn-primary">Tambah Barang</a>
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                      <tr>
                        <th>ID barang</th>
                        <th>Nama Barang</th>
                        <th>Foto Barang</th>
                        <th>Deskripsi barang</th>
                        <th>Harga Barang</th>
                        <th>Stok Barang</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($barangs as $brg)
                      <tr>
                        <td scope="row">{{$brg->id}}</td>
                        <td>{{$brg->nama_barang}}</td>
                        <td>
                          <img src="{{ asset('foto_barang/'.$brg->foto_barang) }}" width="100px" alt="">
                        </td>
                        <td>{{$brg->deskripsi_barang}}</td>
                        <td>{{$brg->harga_barang}}</td>
                        <td>{{$brg->stok_barang}}</td>
                        <td>
                          <a href="{{('/admin/barang/'.$brg->id.'/tedit')}}" class="btn btn-primary">edit</a>
                           <a href="{{('/admin/barang/'.$brg->id.'/delete')}}" class="btn btn-danger">delete</a>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        
    </div>
    </div>

</div>
@endsection
