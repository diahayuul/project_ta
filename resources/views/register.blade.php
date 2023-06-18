<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GET | Giri Education Training </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
      .required::after{
        content: "  *";
        color: red;
        font-size: "20px";
      }
      
    </style>
</head>
<body>
    <div class="container-xxl bg-white p-0">

        <!-- Register Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded" src="img/img_1.jpg" style="object-fit: cover;">
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
    </div>
</body>

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
 <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
 <script src="{{ asset ('lib/waypoints/waypoints.min.js') }}"></script>
 <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

 <!-- Template Javascript -->
 <script src="{{ asset('js/main.js') }}"></script>

 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-danger btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>


 </body>
</html>