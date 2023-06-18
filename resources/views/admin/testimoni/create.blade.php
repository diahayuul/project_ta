@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Data Testimoni</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Testimoni</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Testimoni</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="/testimoni" enctype="multipart/form-data">
              @csrf
              <div class="card-body">

                <div class="form-group col-md-8">
                  <label for="foto" class="form-label">Foto</label>
                  <input type="file" class="form-control @error('foto') is-invalid @enderror" 
                  style="padding: 0" id="foto" name="foto"  >
                  @error('foto')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group col-md-8">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Peserta" 
                  name="nama" required value="{{ old('nama') }}">
                  @error('nama')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group col-md-8">
                  <label for="prestasi">Prestasi</label>
                  <input type="text" class="form-control @error('prestasi') is-invalid @enderror" id="prestasi" placeholder="Prestasi" 
                  name="prestasi" required value="{{ old('prestasi') }}">
                  @error('prestasi')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group col-md-8">
                  <label for="sekolah">Asal Sekolah</label>
                  <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah" placeholder="Asal Sekolah" 
                  name="asal_sekolah" required value="{{ old('asal_sekolah') }}">
                  @error('asal_sekolah')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group col-md-8">
                    <label for="deskripsi">Deskripsi</label>
                  <input type="hidden" id="deskripsi" name="deskripsi" required value="{{ old('deskripsi') }}">
                  <trix-editor input="deskripsi"></trix-editor>
                  @error('deskripsi')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror  
                </div>
                

                
                
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-danger">Tambah</button>
                <button class="btn btn-default float-right"><a href="/testimoni">Cancel</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection