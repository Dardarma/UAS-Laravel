@extends('admin.layout.layot')
@section('content')

<div class="container-fluid">
    <div class="content-wrapper mt-2">
        <div class="row">
            <div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Tambah Admin</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">
          <form method="POST" action="{{ route('Tambah_User') }}">
              @csrf

              <div class="form-group">
                  <label for="nama">Nama:</label>
                  <input type="text" name="nama" id="nama" class="form-control" required>
              </div>

              <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" name="email" id="email" class="form-control" required>
              </div>

              <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" name="password" id="password" class="form-control" required>
              </div>

              <div class="form-group">
                  <label for="role">Role:</label>
                  <select name="role" id="role" class="form-control" required>
                      <option value="admin">Admin</option>
                      <option value="user">User</option>
                  </select>
              </div>

              <div class="form-group">
                  <label for="hp">Nomor HP:</label>
                  <input type="text" name="Hp" id="Hp" class="form-control">
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Tambah Pengguna</button>
              </div>
          </form>
      </div>
    </div>
 </div>
</div>

@endsection