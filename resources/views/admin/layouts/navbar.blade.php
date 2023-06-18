<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="">
          @if (auth()->user()->foto)
          <img src="{{ asset('storage/'. auth()->user()->foto) }}" class="img-fluid img-circle d-inline" alt="" style="width: 40px;height: 40px"> 
          @else
          <img class="img-fluid img-circle d-inline" src="{{ asset('img/profile-image.jpg') }}" alt=""  style="width: 40px;height: 40px">
          @endif
          <span>  {{ auth()->user()->name }} </span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg ">
          
          <div class="dropdown-divider"></div>
          <form action="/logout" method="post" class="d-inline">
            @csrf
          <button class="dropdown-item" type="submit">
             <i class="fas mr-2"></i> Logout</a>
          </button>
        </form>
          
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->