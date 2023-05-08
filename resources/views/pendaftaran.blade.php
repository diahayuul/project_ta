@extends('layouts.main')

@section ('container')
<body>
    <div class="container-xxl bg-white p-0">
        
        <!-- Appointment Start -->
        <div class="container-xxl py-5 bg-light">
            <div class="container py-3 bg-light">
                
                <div class="bg-white">
                    <div class="row g-0 justify-content-center ">
                      
                        <div class="col-lg-8 wow fadeIn " data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column p-5 ">
                              <h3 class="mb-4 text-center">Pendaftaran Bimbel Giri Education Training</h3>
                                <form action="/bimbel/program/{{ $program->id }}/pendaftaran" method="post">
                                    @csrf
                                    @auth
                                    <div class="row g-2 ">
                                        <div class="col-6 mb-3">
                                            <label class="required block text mb-7" >Nama Lengkap</label>
                                            <input readonly="" class="form-control border-2" id="name" style="background-color: rgb(215, 225, 253);" 
                                            value="{{ auth()->user()->name }}">
                                        </div>
                                      
                                        <div class="col-6 mb-3">
                                            <label class="required block text mb-7" >Email</label>
                                            <input readonly="" class="form-control border-2" id="email" name="email"
                                            style="background-color: rgb(215, 225, 253);" value="{{ auth()->user()->email }}">
                                        </div>

                                        <div class="col-6 mb-3">
                                            <label class="required block text mb-7" >No. Telepon</label>
                                            <input readonly="" class="form-control border-2" id="no_telp" name="no_telp" style="background-color: rgb(215, 225, 253);" 
                                            value="{{ auth()->user()->no_telp }}">
                                        </div>

                                        <div class="col-6 mb-3">
                                            <label class="required block text mb-7" >Asal Sekolah</label>
                                            <input type="text" class="form-control border-2" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah" required>
                                        </div>
                                    </div>
                                        <div class="col-12 mb-3">
                                            <label class="required block text mb-7" >Alamat</label>
                                            <input type="text" class="form-control border-2" id="alamat" name="alamat" placeholder="Alamat" required>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="required block text mb-7" >Pilihan Program Bimbel</label>
                                            <input readonly="" class="form-control border-2" id="id_program" name="id_program" value="{{ $program->nama }}"
                                            style="background-color: rgb(250, 239, 190);">
                                         </div>

                                    <div class="row g-2 ">
                                        <div class="col-6 mb-3">
                                            <label class="required block text mb-7" >Biaya</label>
                                            <input readonly="" class="form-control border-2" id="id_program" name="id_program" value="Rp. {{ $program->harga }}"
                                            style="background-color: rgb(250, 239, 190);">
                                        </div>

                                        <div class="col-6 mb-3">
                                            <label class="required block text mb-7" >Metode Pembayaran</label>
                                            <select class="form-select border-2" name="jenis_pembayaran" id="jenis_pembayaran">
                                                <option selected>--Pilih Metode Pembayaran--</option>
                                                <option value="1">Transfer Bank</option>
                                                <option value="2">Cash/Datang ke Tempat</option>
                                              </select>
                                        </div>
                                    </div>
                                    @endauth
                                        <div class="col-12">
                                            <button class="btn btn-danger w-100 py-3 mt-3" type="submit">Daftar</button>
                                        </div>
                                    
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->

</body>

@endsection 