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
              <li class="breadcrumb-item active">Simple Tables</li>
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
          <div class="col-md-4">
            <div class="card card-danger card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="img img-fluid img-circle" src="{{ asset ('img/profile-image.jpg') }}" alt="User profile picture">
                  </div>
  
                  <h4 class="profile-username text-center mb-3">{{ auth()->user()->name }}</h4>
  
  
                  <ul class="list-group list-group-unbordered mb-2">
                    <li class="list-group-item">
                      <b>Email</b> <p class="float-right">{{ auth()->user()->email }}</p>
                    </li>
                    <li class="list-group-item">
                      <b>Nomor Telepon</b> <p class="float-right">{{ auth()->user()->no_telp }}</p>
                    </li>
                    
                  </ul>
  
                  <a href="#" class="btn btn-danger btn-block"><b>Edit Profile</b></a>
                </div>
                <!-- /.card-body -->
              </div>
            </div>

              <div class="col-md-8">
                <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">About Me</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <strong><i class="fas fa-book mr-1"></i> Asal Sekolah</strong>
      
                      <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                      </p>
      
                      <hr>
      
                      <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
      
                      <p class="text-muted">Malibu, California</p>
      
                      <hr>
      
                      <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
      
                      <p class="text-muted">
                        <span class="tag tag-danger">UI Design</span>
                        <span class="tag tag-success">Coding</span>
                        <span class="tag tag-info">Javascript</span>
                        <span class="tag tag-warning">PHP</span>
                        <span class="tag tag-primary">Node.js</span>
                      </p>
      
                      <hr>
      
                      <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
      
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    </div>
                    <!-- /.card-body -->
                  </div>
            </div>
              
           
            
         <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection