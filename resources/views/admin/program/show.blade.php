@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Program</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Program</li>
            </ol>
          </div>
        </div>
        <div class="btn bg-danger mt-3 mb-3">
          <a href="/program">
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
                        <th style="width: 200px">Gambar</th>
                        <td> 
                          <span><img class="img-fluid" src="{{ asset('storage/'. $program->gambar) }}" alt="" style="width: 150px"> 
                        </span>
                    </td>
                    </tr>

                    <tr> 
                      <th>Nama Program</th>
                      <td><span> {{ $program->nama }} </span></td>
                    </tr>

                    <tr> 
                      <th>Kategori</th>
                      <td><span> {{ $program->kategori_program->nama_kategori }} </span></td>
                    </tr>

                    <tr>
                      <th>Deskripsi</th>
                      <td><span> {!! $program->deskripsi !!} </span></td>
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