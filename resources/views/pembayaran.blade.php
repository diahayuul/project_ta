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
                            <div class="h-100 d-flex flex-column p-5 justify-content-center">
                              <h3 class="mb-4 text-center">Pendaftaran Berhasil, Silahkan Lakukan Pembayaran ke </h3>

                                <img class="mb-3 " id="logo" src="{{ asset ('img/mandiri-logo.png') }}" width="200px" alt="">
             
                                <h4 id="nama" class="text-center">Giri Education Training</h4>
                                <p id="no_rek" class="text-center">1440056500009</p>
                                
                                        <div class="col-6">
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