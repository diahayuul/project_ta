@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pendaftar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Verifikasi Pendaftar</li>
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
                      <th>Nama</th>
                      <th>Program</th>
                      <th>Harga</th>
                      <th>Metode Pembayaran</th>
                      
                      <th style="width: 200px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pendaftars as $pendaftar)

                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $pendaftar->name }} </td>
                      <td>{{ $pendaftar->nama }} </td>
                      <td>{{ $pendaftar->harga }}</td>
                      <td>{{ $pendaftar->jenis_pembayaran }}</td>
                      
                      <td> 
                        @if ($pendaftar->status=='Belum Diverifikasi') 
                       
                        <form action="/pendaftar/{{ $pendaftar->id }}" method="post" class="d-inline">
                          @method('put')
                          @csrf
                        <button class="btn bg-success" onclick="return confirm('Anda yakin ingin melakukan verifikasi?')">
                          <span>Verifikasi</span> 
                        </button>
                      </form>
                        @else 
                        <label class="label {{ ($pendaftar->status =='Sudah Diverifikasi') ? 'text-success' : 'text-danger' }}">{{ $pendaftar->status }}</label>
                        
                        @endif
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