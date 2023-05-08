<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-0 py-lg-0">
  <a href="/" class="navbar-brand">
      <img class="img-fluid rounded-circle" src="{{ asset('img/logo.png') }}" style="width: 100px; height: 100px; ">
  </a>
  <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav mx-auto">
          <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle {{ Request::is('bimbel*') ? 'active' : '' }}" data-bs-toggle="dropdown">Program</a>
            <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                @foreach($kategoriprogram as $kat_program)
                <a href="/bimbel/program/{{ $kat_program->nama_kategori }}" class="dropdown-item">{{ $kat_program->nama_kategori }}</a>
                @endforeach
            </div>
        </div>
          <a href="/about" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About Us</a>
          <a href="/contact" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
      </div>
      
      @auth
      <a href="/dashboard" class="btn btn-large btn-danger py-sm-2 px-sm-4 me-2">Dashboard</a>
      
      @else  
      <a href="/login" class="btn btn-dark rounded-pill py-sm-2 px-sm-4 me-2">Login</a>
      <a href="/register" class="btn btn-danger rounded-pill py-sm-2 px-sm-4 me-2">Daftar</a>
      @endauth
      </div>
</nav>
<!-- Navbar End -->