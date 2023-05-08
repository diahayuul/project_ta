@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data Fasilitas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
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
              <h3 class="card-title">Form Edit Fasilitas</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="/fasilitas/{{ $fasilitas->id }}">
              @method('put')
              @csrf
              <div class="card-body">
                <div class="form-group col-md-8">
                  <label for="nama">Nama Fasilitas</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Fasilitas" 
                  name="nama" required value="{{ old('nama', $fasilitas->nama) }}">
                  @error('nama')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group col-md-8">
                  <label for="icon">Icon</label>
                  <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" placeholder="Icon" 
                  name="icon" required value="{{ old('icon', $fasilitas->icon ) }}">
                  @error('icon')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group col-md-8">
                  <label for="deskripsi">Deskripsi</label>
                <input type="hidden" id="deskripsi" name="deskripsi" required value="{{ old('deskripsi', $fasilitas->deskripsi) }}">
                <trix-editor input="deskripsi"></trix-editor>
                @error('deskripsi')
                <p class="text-danger">{{ $message }}</p>
                @enderror  
              </div>
                
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-danger">Update</button>
                <button class="btn btn-default float-right"><a href="/fasilitas">Cancel</button>
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