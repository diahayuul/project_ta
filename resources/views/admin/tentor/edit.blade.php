@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data Tentor</h1>
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
              <h3 class="card-title">Form Edit Tentor</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="/tentor/{{ $tentor->id }}" enctype="multipart/form-data">
              @method('put')
                @csrf
              <div class="card-body">

                <div class="form-group col-md-8">
                  <label for="foto" class="form-label">Foto</label>
                  <input type="hidden" name="oldImage" value="{{ $tentor->foto }}">
                  @if ($tentor->foto)
                    <img src="{{ asset('storage/'. $tentor->foto) }}" class="img-preview img-fluid mb-3 d-block" width="200px">
                  @else
                    <img class="img-preview img-fluid mb-3 d-block" width="200px">
                  @endif
                  
                  <input type="file" class="form-control @error('foto') is-invalid @enderror" 
                  style="padding: 0" id="foto" name="foto" required onchange="previewImage()">
                  @error('foto')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="form-group col-md-8">
                  <label for="nama">Nama Tentor</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Tentor" 
                  name="nama" required value="{{ old('nama', $tentor->nama) }}">
                  @error('nama')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group col-md-8">
                  <label for="posisi">Posisi</label>
                  <input type="text" class="form-control @error('posisi') is-invalid @enderror" id="posisi" placeholder="Posisi/Jabatan" 
                  name="posisi" required value="{{ old('posisi', $tentor->posisi) }}">
                  @error('posisi')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group col-md-8">
                  <label for="linkedin">LinkedIn</label>
                  <input type="text" class="form-control @error('linkedin') is-invalid @enderror" id="linkedin" placeholder="linkedin.com/in/example" 
                  name="linkedin" required value="{{ old('linkedin', $tentor->linkedin) }}">
                  @error('posisi')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group col-md-8">
                  <label for="instagram">Instagram</label>
                  <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" placeholder="instagram.com/example" 
                  name="instagram" required value="{{ old('instagram', $tentor->instagram) }}">
                  @error('posisi')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-danger">Update</button>
                <button class="btn btn-default float-right"><a href="/tentor">Cancel</button>
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
    const foto = document.querySelector('#foto');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(foto.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.targrt.result;
    }
  }
  
</script>
@endsection