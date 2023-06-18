@extends('layouts.main')

@section('container')
<body>
    <div class="container-xxl bg-white p-0">

        <!-- Program Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Program {{ $kategori->nama_kategori }}</h1>
                    <p>{!! $kategori->deskripsi !!}</p>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($program as $prgrm)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('storage/'. $prgrm->gambar) }}" alt="" style="height: 220px">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">{{ $prgrm->nama }}</a>
                                <p class="text-center"> {!! $prgrm->deskripsi !!}</p>
                                <div class="col-12">
                                    <div class="border-top border-3 border-primary pt-2">
                                        <h4 class="text-danger text-center mb-1">Rp. {{ $prgrm->harga }}</h4>
                                        <h6 class="text-primary text-center mb-2">/bulan</h6>
                                    </div>
                                </div>
                               <div class="col-12">
                                <a href="/bimbel/program/{{ $prgrm->id }}/pendaftaran"><button class="btn btn-danger w-100 py-3" >Daftar Sekarang</button></a>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Program End -->
    </div>
</body>

@endsection