@extends('layouts.main')

@section('container')
        <!-- Register Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded" src="img/appointment.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                              <p style="font-size: 21px;">Selamat Datang <a href="/" style="font-weight:600; color: #D11A21;">Giri Education Training</a></p>
                             
                              <h1 class="mb-4">Buat Akun</h1>
                                <form action="/register" method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="form-floating">
                                              <input type="text" class="form-control border-0 @error('name') is-invalid @enderror" 
                                              id="name" name="name" placeholder="Nama" required value="{{ old('name') }}">
                                                <label for="name">Nama</label>
                                                @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                              <input type="text" class="form-control border-0 @error('no_telp') is-invalid @enderror" 
                                              id="no_telp" name="no_telp" placeholder="No. Telepon" required value="{{ old('no_telp') }}">
                                                <label for="no_telp">No. Telepon</label>
                                                @error('no_telp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                              <input type="text" class="form-control border-0 @error('email') is-invalid @enderror" 
                                              id="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                                                <label for="email">Email</label>
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="password" class="form-control border-0 @error('password') is-invalid @enderror" 
                                                id="password" name="password" placeholder="Password" required>
                                                <label for="password">Password</label>
                                                @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <button class="btn btn-danger w-100 py-3" type="submit">Daftar</button>
                                        </div>
                                        

                                        <small class="d-block text-center mt-3">Sudah Punya Akun? <a href="/login" style="font-weight:600; color: #D11A21;">Login</a></small>
                                    </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Register End -->

</body>

</html>
@endsection