@extends('admin.layout.layot')
@section('content')

<div class="container-fluid">

    <div class="content-wrapper mt-2">
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
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                      <tr>
                        <th>ID Pemesanan</th>
                        <th>ID User</th>
                        <th>User</th>
                        <th>tanggal</th>
                        <th>Detail Pemesanan</th>
                        <th>status Pemesanan</th>
                        <th>Terima tolak</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>12</td>
                        <td>183</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td><span class="tag tag-success">Pistol 1</span></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Status
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Diterima</a></li>
                                    <li><a class="dropdown-item" href="#">Diproses</a></li>
                                    <li><a class="dropdown-item" href="#">Dikirim</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">Tolak</button>
                            <button type="button" class="btn btn-success">Terima</button>
                        </td>
                      </tr>
                    </tbody>
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
