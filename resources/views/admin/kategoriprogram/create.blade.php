@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Data Kategori</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Tambah Kategori Program</li>
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
              <h3 class="card-title">Form Tambah Kategori Program</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="/kategori-program" enctype="multipart/form-data">
              @csrf
              <div class="card-body">

                <div class="form-group col-md-8">
                  <label for="nama_kategori">Nama Kategori</label>
                  <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" placeholder="Nama Kategori" 
                  name="nama_kategori" required value="{{ old('nama_kategori') }}">
                  @error('nama_kategori')
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

              <div class="form-group col-md-8">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" 
                style="padding: 0" id="gambar" name="gambar" required >
                @error('gambar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-danger">Tambah</button>
                <button class="btn btn-default float-right"><a href="/kategori-program">Cancel</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
  
  function previewImage() {
    const image = document.querySelector('#foto');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.targrt.result;
    }
  }
  
</script>
@endsection