<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light text-color">SMK Golden</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar ">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-2 pb-0 mb-2 d-flex">
      <div class="info ">
        <label class="d-block text-color">{{ session()->get('username') }}</a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2 "  >
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/admin_utama" class="nav-link">
            <i class="nav-icon fas fa-circle "></i>
            <p class="">Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin_utama/data_panitia" class="nav-link">
            <i class="nav-icon fas fa-user "></i>
            <p class="">Data Tata Usaha</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin_utama/data_pendaftar" class="nav-link">
            <i class="nav-icon fas fa-user "></i>
            <p class="">Data Akun Siswa</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin_utama/data_pengumuman" class="nav-link">
            <i class="nav-icon far fa-circle "></i>
            <p class="">Data Pengumuman</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
