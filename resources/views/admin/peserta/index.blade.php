@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Peserta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Peserta</li>
            </ol>
          </div>
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
                      <th style="width: 200px">Nama</th>
                      <th>No.Telepon</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>Asal Sekolah</th>    
                      <th style="width: 100px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pendaftars as $pendaftar)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $pendaftar->name }} </td>
                      <td>{{ $pendaftar->no_telp }} </td>
                      <td>{{ $pendaftar->email }}</td>
                      <td>{{ $pendaftar->alamat }} </td>
                      <td>{{ $pendaftar->asal_sekolah }}</td>
                      <td>
                        <form action="/peserta/{{ $pendaftar->id_pendaftar }}" method="post" class="d-inline">
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
                {{-- {{ $pendaftars->links() }} --}}

              </div>
            </div>
            <!-- /.card -->
            
         <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection