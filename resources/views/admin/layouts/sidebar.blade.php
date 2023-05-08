<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">LBB GET</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <div class="user-panel mt-2 pb-3 mb-3 d-flex ">
            <div class="image">
            <img src="{{ asset ('img/profile-image.jpg') }}" class="img-circle" alt="User Image" >
            </div>
          <div class="info">
            <a href="/profile" class="d-block">{{ auth()->user()->name }}</a>
          </div>
        </div>  
          

         <li class="nav-item ">
            <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i><p> Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/fasilitas" class="nav-link {{ Request::is('fasilitas*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-school"></i><p> Fasilitas</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/kategori-program" class="nav-link {{ Request::is('kategori-program*') ? 'active' : '' }}">
              <i class="fas fa-tag nav-icon"></i>
              <p>Kategori Program</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/program" class="nav-link {{ Request::is('program*') ? 'active' : '' }}">
              <i class="fas fa-book nav-icon"></i>
              <p>Program</p>
            </a>
          </li>
       

          <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('peserta*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i><p> Pendaftar<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pendaftar" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Pendaftar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/peserta" class="nav-link">
                  <i class="fas fa-user-check nav-icon"></i>
                  <p>Peserta</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item">
            <a href="/tentor" class="nav-link {{ Request::is('tentor*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-graduate"></i><p> Tentor</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/testimoni" class="nav-link {{ Request::is('testimoni*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-comment"></i><p> Testimoni</p>
            </a>
          </li>
          
          
         
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>