@extends('admin.layout.layot')
@section('content')


<div class="container-fluid">

    <div class="content-wrapper mt-2">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                      <h3 class="card-title">List Pengguna</h3>
                      <div class="card-tools">
                        <a href="{{ asset('admin/user/register') }}" class="btn btn-primary">Tambah user</a>
                      </div>
                  </div>
                  <div class="input-group input-group-sm mt-2" style="width: 150px; margin-left: auto;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                      <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                          </button>
                      </div>
                  </div>
              </div>
              
              
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                      <tr>
                        <th>ID User</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>password</th>
                        <th>role</th>
                        <th>No Hp</th>
                        <th>aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                        <td scope="row">{{$user->id}}</td>
                        <td>{{ $user->nama}}</td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->password}}</td>
                        <td>{{ $user->role}}</td>
                        <td>{{ $user->Hp}}</td>
                        <td>
                         <a href="{{ url('admin/user/'.$user->id.'/tedit')}}" class="btn btn-primary">edit</a>
                          <a href="{{url('/admin/user/'.$user->id.'/delete')}}" class="btn btn-danger">Hapus</a>
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
