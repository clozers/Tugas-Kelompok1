@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <a href="{{ route('admin.user.create') }}" class="btn btn-primary btn-md mb-3">Tambah User</a>
            <a href="{{ route('admin.assets') }}?export=pdf" class="btn btn-danger btn-md mb-3">Export PDF</a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <form action="{{ route('admin.assets') }}" method="get">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ $request->get('search') }}">
  
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Photo</th>
                      <th>Nik</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Asset</th>
                      <th>Jumlah Asset</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('storage/photo-user/'.$d->image) }}" width="50" alt="profil"></td>
                        <td>{{ $d->ktp->nik ?? '' }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->email }}</td>
                        <td>
                            <ul>
                                @foreach ($d->assets as $asset)
                                    <li>{{ $asset->nama_asset }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{ count($d->assets) }}</td>

                    </tr>
                    <!-- /.modal -->
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  
@endsection
