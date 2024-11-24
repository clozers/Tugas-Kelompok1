@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Import Excel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Excel</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.import-proses') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Import User</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->\
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">File</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" name="file" placeholder="Enter file">
                                    @error('file')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>    
                    </div>
                </div>
            </form>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    
@endsection
