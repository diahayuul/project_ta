@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori Program</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
        <div class="btn btn-lg bg-danger mt-3 mb-3">
          <a href="/kategori-program/create">
          <i class="fa fa-plus"></i> Tambah Kategori
        </a>
      </div>

      @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
      @endif
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <!-- /.col -->
          <div class="col-md-12">


            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th style="width: 150px">Nama Kategori</th>
                      <th>Deskripsi</th>
                      <th style="width: 200px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($kat_program as $kategori)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $kategori->nama_kategori }}</td>
                      <td>{{ $kategori->deskripsi }}</td>
                      <td>
                        <a href="/kategori-program/{{ $kategori->id }}" class="btn bg-primary"> 
                          <span class="fas fa-eye"></span>
                        </a>
                        <a href="/kategori-program/{{ $kategori->id }}/edit" class="btn bg-warning">
                          <span class="fas fa-edit"></span> 
                        </a>
                        <form action="/kategori-program/{{ $kategori->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                        <button class="btn bg-danger" onclick="return confirm('Anda yakin ingin menghapus data?')">
                          <span class="fas fa-trash"></span> 
                        </button>
                      </form>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
            
         <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection