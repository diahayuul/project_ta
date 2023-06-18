@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Tentor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Detail Tentor</li>
            </ol>
          </div>
        </div>
        <div class="btn bg-danger mt-3 mb-3">
          <a href="/tentor">
          <i class="fa fa-arrow-left"></i> Kembali
        </a>
      </div>
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
                <table class="table table-bordered">
                  <tbody>
                    <tr> 
                        <th style="width: 50px">Foto</th>
                        <td> 
                          <span><img class="img-fluid" src="{{ asset('storage/'. $tentor->foto) }}" alt="" style="width: 150px"> 
                        </span>
                    </td>
                    </tr>

                    <tr> 
                      <th>Nama</th>
                      <td><span> {{ $tentor->nama }} </span></td>
                    </tr>

                    <tr>
                      <th>Posisi/Jabatan</th>
                      <td><span> {{ $tentor->posisi }} </span></td>
                    </tr>

                    <tr>
                      <th>Linkedin</th>
                      <td><span> {{ $tentor->linkedin }} </span></td>
                    </tr>
                    <tr>
                      <th>Instagram</th>
                      <td><span> {{ $tentor->instagram }} </span></td>
                    </tr>
                

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection