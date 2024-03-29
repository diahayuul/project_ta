@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fasilitas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Fasilitas</li>
            </ol>
          </div>
        </div>
        <div class="btn btn-lg bg-danger mt-3 mb-3">
          <a href="/fasilitas/create">
          <i class="fa fa-plus"></i> Tambah Fasilitas
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
                      <th style="width: 10px">No.</th>
                      <th>Nama</th>
                      <th>Icon</th>
                      <th style="width: 200px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($fasilitass as $index => $fasilitas)
                    <tr>
                      <td scope="row">{{ $index + $fasilitass->firstItem() }}</td>
                      <td>{{ $fasilitas->nama }}</td>
                      <td>{{ $fasilitas->icon }}</td>
                      <td>
                        <a href="/fasilitas/{{ $fasilitas->id }}" class="btn bg-primary"> 
                          <span class="fas fa-eye"></span>
                        </a>
                        <a href="/fasilitas/{{ $fasilitas->id }}/edit" class="btn bg-warning">
                          <span class="fas fa-edit"></span> 
                        </a>

                        <form action="/fasilitas/{{ $fasilitas->id }}" method="post" class="d-inline">
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
              
              <div class="d-flex justify-content-end mt-3 mx-3">
                {{ $fasilitass->links() }}

              </div>
            </div>
            <!-- /.card -->
            
         <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection