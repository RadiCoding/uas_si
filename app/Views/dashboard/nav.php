<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= site_url('home/index') ?>" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= site_url('home/contact') ?>" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= site_url('home/index') ?>" class="brand-link">
    <img src="dist/img/Logo-uin.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Beasiswa UIN</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Dashboard -->
        <li class="nav-item">
          <a href="<?= site_url('home/index') ?>" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- Data Alternatif -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Data Mahasiswa
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url('home/form_alternatif') ?>" class="nav-link">
                <i class="fas fa-edit nav-icon"></i>
                <p>Input Data Mahasiswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('home/view_alternatif') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Lihat Data Mahasiswa</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Kriteria -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th-list"></i>
            <p>
              Data Kriteria
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url('home/form_kriteria') ?>" class="nav-link">
                <i class="fas fa-edit nav-icon"></i>
                <p>Input Data Kriteria</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('home/view_kriteria') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Lihat Data Kriteria</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Metode SAW -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calculator"></i>
            <p>
              Metode SAW
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url('home/form_saw') ?>" class="nav-link">
                <i class="fas fa-edit nav-icon"></i>
                <p>Input Nilai SAW</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('home/view_saw') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Hasil SAW</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= site_url('home/index') ?>">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <h4>Selamat Datang di Sistem Pemilihan Mahasiswa Berprestasi</h4>
      <p>Gunakan navigasi di sidebar untuk mengelola data dan melihat hasil analisis metode SAW.</p>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
