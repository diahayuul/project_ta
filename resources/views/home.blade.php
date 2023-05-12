@extends('layouts.main')

@section('container')
<body>
    <div class="container-xxl bg-white p-0">
    
        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">The Best Education Partner</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Segera daftarkan putra-putri anda di LBB GET dan nikmati pembelajaran yang berkualitas dengan harga yang terjangkau.</p>
                                    <a href="/about" class="btn btn-danger rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Selengkapnya</a>
                                    <a href="/" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Program Kami</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Make A Brighter Future For Your Child</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Segera daftarkan putra/putri anda di LBB GET dan nikmati pembelajaran yang berkualitas dengan harga yang terjangkau.</p>
                                    <a href="/about" class="btn btn-danger rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Selengkapnya</a>
                                    <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Program Kami</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Facilities Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Fasilitas apa saja yang didapat?</h1>
                    <p>Giri Education Training memberikan beberapa fasilitas yang menjadikan suasana belajar yang nyaman bagi para siswa.</p>
                </div>
                
                <div class="row g-4 justify-content-center">
                @foreach ($fasilities as $fas)
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-danger">
                                <span class="bg-danger"></span>
                                <i class="fa {{ $fas->icon }} fa-3x text-danger"></i>
                                <span class="bg-danger"></span>
                            </div>
                            <div class="facility-text bg-danger">
                                <h3 class="text-danger mb-3">{{ $fas->nama }}</h3>
                                <p class="mb-0">{!! $fas->deskripsi !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </div>
        <!-- Facilities End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Mengapa harus Giri Education Training?</h1>
                        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos, ipsum labore duo duo sit no sea diam. Et dolor et kasd ea. Eirmod diam at dolor est vero nonumy magna.</p>
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-6">
                                <a class="btn btn-danger rounded-pill py-3 px-5" href="/about">Selengkapnya</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-danger mb-1">Rachmad</h6>
                                        <small>CEO & Founder</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-2.jpg" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


    


        <!-- Program Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Program Pilihan Giri Education Training</h1>
                    <p>Terdapat berbagai macam program yang sesuai dengan kebutuhanmu</p>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($kategoriprogram as $kat_program)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="img/classes-6.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">{{ $kat_program->nama_kategori }}</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <p>{!! $kat_program->deskripsi !!}</p>
                                    </div>
                                </div>
                               <a href="/bimbel-program/{{ $kat_program->nama_kategori }}" class="btn btn-danger rounded-pill py-2 px-3 " >Selengkpnya<i class="fa fa-arrow-right ms-3"></i></a>
                                 </div>
                            </div>
                            
                        </div>
                        @endforeach
                    
                </div>
            </div>
        </div>
        <!-- Program End -->

        <!-- Tentor Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Tentor Kami</h1>
                    <p>Dibimbing oleh beberapa pengajar lulusan perguruan tinggi terbaik</p>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($tentor as $tent)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="{{ asset('storage/' . $tent->foto) }}" alt="">
                            <div class="team-text">
                                <h3>{{ $tent->nama }}</h3>
                                <p>{{ $tent->posisi }}</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-danger  mx-1" href="{{ $tent->linkedin }}"><i class="fab fa-linkedin"></i></a>
                                    <a class="btn btn-square btn-danger  mx-1" href="{{ $tent->instagram }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Tentor End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Cerita Sang Juara</h1>
                    <p>Cerita sang juara selama mengikuti bimbel di Giri Education Training</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    @foreach ($testimonis as $testimoni)
                        

                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">{!! $testimoni->deskripsi !!}</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 90px; height: 90px;">
                            <div class="ps-3">
                                <h3 class="mb-2">{{ $testimoni->nama }}</h3>
                                <h6>{{ $testimoni->prestasi }}</h6>
                                <span>{{ $testimoni->sekolah }}</span>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-warning ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->



        
@endsection