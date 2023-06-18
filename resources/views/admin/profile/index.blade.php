@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
          <div class="col-lg-3">
            <div class="card card-danger card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    @if (auth()->user()->foto)
                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('storage/'. auth()->user()->foto) }}" alt="User profile picture" style="width: 100px;height: 100px"> 
                 @else
                 <img class="profile-user-img img-fluid img-circle" src="{{ asset('img/profile-image.jpg') }}" alt="User profile picture"  style="width: 100px;height: 100px">
                 @endif 
                  </div>
  
                  <h4 class="profile-username text-center mb-3">{{ auth()->user()->name }}</h4>

                  <form class="form-horizontal" method="post" action="/profile/update-image" enctype="multipart/form-data">
                    @csrf
                  <div class="col-sm-12">
                  <input type="file" class="form-control @error('foto') is-invalid @enderror" 
                  style="padding: 0" id="foto" name="foto" required>
                  @error('foto')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                
                    <button type="submit" class="btn btn-danger btn-block mt-3 ">Upload Foto</button>
                </div>
              </div>
            </form>
                <!-- /.card-body -->
              </div>
            </div>

            <div class="col-lg-9">
              <div class="card card-danger">
                  <div class="card-header">
                    <h3 class="card-title">Personal Information</h3>
                  </div>
                  <!-- /.card-header -->
                  <form class="form-horizontal" method="post" action="/profile/edit" id="AdminForm" enctype="multipart/form-data">
                    @method('post')
                    @csrf
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" 
                          name="name" value="{{ auth()->user()->name }}" required>
                          @error('name')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" 
                          name="email" value="{{ auth()->user()->email }}" required>
                          @error('email')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No. Telepon</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" 
                          name="no_telp" value="{{ auth()->user()->no_telp }}" required>
                          @error('no_telp')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-danger">Simpan Perubahan</button>
                    </div>
                    <!-- /.card-body -->
                    
                  </form>
          </div>
         <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection